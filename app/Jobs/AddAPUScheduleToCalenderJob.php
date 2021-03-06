<?php

namespace App\Jobs;

use App\Http\Services\MicrosoftGraphService;
use App\Models\ScheduleConfig;
use App\Models\User;
use App\Notifications\CalendarSyncSuccessNotification;
use Carbon\Carbon;
use Chengkangzai\ApuSchedule\ApuSchedule;
use DateTimeInterface;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;
use JetBrains\PhpStorm\ArrayShape;
use Log;
use Microsoft\Graph\Exception\GraphException;
use Microsoft\Graph\Graph as MicrosoftGraph;
use Microsoft\Graph\Model;
use Notification;

class AddAPUScheduleToCalenderJob implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public const CAUSED_BY = [
        'Console' => 'Console',
        'Web' => 'Web',
    ];

    private MicrosoftGraph $graph;
    private User $user;
    private ScheduleConfig $config;
    private ?string $causeBy;

    public function __construct(User $user, ScheduleConfig $config, string|null $causeBy)
    {
        $graphService = new MicrosoftGraphService();
        $this->graph = $graphService->getGraph($user);
        $this->user = $user;
        $this->config = $config;
        $this->causeBy = $causeBy;
    }

    public function handle()
    {
        $attendeeAddresses = explode(';', $this->user->email);
        $attendees = $this->getAttendees($attendeeAddresses);
        $schedules = ApuSchedule::getSchedule($this->config->intake_code, $this->config->grouping, $this->config->except);

        try {
            $events = $this->getEvent();
            $syncedSchedule = collect();
            foreach ($schedules as $schedule) {
                $isEventCreatedBefore = $this->isCreatedBefore($events, $schedule);
                if (! $isEventCreatedBefore) {
                    $newEvent = $this->formatNewEvent($schedule, $attendees);
                    $this->syncCalendar($newEvent);
                    $syncedSchedule->add($schedule);
                }
            }

            Notification::send($this->user, new CalendarSyncSuccessNotification($this->config, $syncedSchedule));
        } catch (GuzzleException|GraphException|Exception $e) {
            Log::error($e->getMessage());
        }
    }

    private function getAttendees(array $attendeeAddresses): array
    {
        $attendees = [];
        foreach ($attendeeAddresses as $attendeeAddress) {
            $attendees[] = [
                'emailAddress' => [
                    'address' => $attendeeAddress,
                ],
                'type' => 'required',
            ];
        }

        return $attendees;
    }

    /**
     * @throws GraphException
     * @throws GuzzleException
     */
    private function syncCalendar(array $newEvent)
    {
        $this->graph->createRequest('POST', '/me/events')
            ->attachBody($newEvent)
            ->setReturnType(Model\Event::class)
            ->execute();
    }

    #[ArrayShape(['subject' => "", 'attendees' => "array", 'start' => "array", 'end' => "array", 'body' => "string[]"])]
    private function formatNewEvent($schedule, array $attendees): array
    {
        return [
            'subject' => $schedule->MODID,
            'attendees' => $attendees,
            'start' => [
                'dateTime' => $schedule->TIME_FROM_ISO,
                'timeZone' => 'Asia/Kuala_Lumpur',
            ],
            'end' => [
                'dateTime' => $schedule->TIME_TO_ISO,
                'timeZone' => 'Asia/Kuala_Lumpur',
            ],
            'body' => [
                'content' =>
                    "Hi," . $this->user->name . ", you have a class of $schedule->MODULE_NAME with lecturer $schedule->NAME ($schedule->SAMACCOUNTNAME@staffemail.apu.edu.my)" .
                    " at $schedule->ROOM from $schedule->TIME_FROM to $schedule->TIME_TO \n" .
                    (
                        $this->causeBy == self::CAUSED_BY['Console'] ?
                        "Sync Schedule will run every Saturday at 06:00 AM (GMT+8 Malaysia Timezone).\n" .
                        "To unsubscribe, please click on the link below: \n" .
                        URL::signedRoute('public.unsubscribe', ['email' => $this->user->email]) : ''
                    ),
                'contentType' => 'text',
            ],
        ];
    }

    /**
     * @throws GraphException
     * @throws GuzzleException
     * @throws Exception
     */
    private function getEvent(): array
    {
        $queryParams = [
            'startDateTime' => now()->subWeeks(4)->startOfDay()->toIso8601String(),
            'endDateTime' => now()->addWeeks(4)->startOfDay()->toIso8601String(),
            // Only request the properties used by the app
            '$select' => 'subject,organizer,start,end',
            // Sort them by start time
            '$orderby' => 'start/dateTime',
            // Limit results to 25
            '$top' => 50,
        ];

        // Append query parameters to the '/me/calendarView' url
        $getEventsUrl = '/me/calendarView?' . http_build_query($queryParams);

        return $this->graph->createRequest('GET', $getEventsUrl)
            // Add the user's timezone to Prefer header
            ->addHeaders([
                'Prefer' => 'outlook.timezone="' . 'Asia/Kuala_Lumpur' . '"',
            ])
            ->setReturnType(Model\Event::class)
            ->execute();
    }

    private function isCreatedBefore(array $events, $schedule): bool
    {
        $isEventCreatedBefore = false;
        foreach ($events as $event) {
            $eventStart = Carbon::parse($event->getStart()->getDateTime())->format(DateTimeInterface::ISO8601);
            $eventEnd = Carbon::parse($event->getEnd()->getDateTime())->format(DateTimeInterface::ISO8601);

            $scheduleStart = Carbon::parse($schedule->TIME_FROM_ISO)->format(DateTimeInterface::ISO8601);
            $scheduleEnd = Carbon::parse($schedule->TIME_TO_ISO)->format(DateTimeInterface::ISO8601);

            if ($eventStart == $scheduleStart && $eventEnd == $scheduleEnd) {
                $isEventCreatedBefore = true;

                break;
            }
        }

        return $isEventCreatedBefore;
    }
}
