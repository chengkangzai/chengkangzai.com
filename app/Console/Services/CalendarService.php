<?php


namespace App\Console\Services;


use App\Http\Services\MicrosoftGraphService;
use App\Http\Services\TimeZoneService;
use App\Models\User;
use Carbon\Carbon;
use Chengkangzai\ApuSchedule\ApuSchedule;
use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;
use Illuminate\Support\Facades\URL;
use JetBrains\PhpStorm\ArrayShape;
use Microsoft\Graph\Model;

class CalendarService
{
    private MicrosoftGraphService $graphService;

    public function __construct()
    {
        $this->graphService = new MicrosoftGraphService();
    }

    public function addEvent($config, User $user)
    {
        $attendeeAddresses = explode(';', $user->email);
        $attendees = $this->getAttendees($attendeeAddresses);
        $schedules = ApuSchedule::getSchedule($config->intake_code, $config->grouping);

        $events = $this->getEvent($user);
        foreach ($schedules as $schedule) {
            $isEventCreatedBefore = false;
            foreach ($events as $event) {
                if ($event->getSubject() == $schedule->MODID
                    || ($event->getStart()->getDateTime() == Carbon::parse($schedule->TIME_FROM_ISO)->toISOString()
                        && $event->getEnd()->getDateTime() == Carbon::parse($schedule->TIME_TO_ISO)->toISOString())) {
                    $isEventCreatedBefore = true;
                    break;
                }
            }
            if (!$isEventCreatedBefore) {
                $newEvent = $this->formatNewEvent($schedule, $attendees, $user);
                $this->syncCalendar($newEvent, $user);
            }
        }
    }

    private function getAttendees(array $attendeeAddresses): array
    {
        $attendees = [];
        foreach ($attendeeAddresses as $attendeeAddress) {
            $attendees[] = [
                'emailAddress' => [
                    'address' => $attendeeAddress
                ],
                'type' => 'required'
            ];
        }
        return $attendees;
    }

    private function syncCalendar(array $newEvent, User $user)
    {
        $graph = $this->graphService->getGraph($user);
        $graph->createRequest('POST', '/me/events')
            ->attachBody($newEvent)
            ->setReturnType(Model\Event::class)
            ->execute();
    }

    #[ArrayShape(['subject' => "", 'attendees' => "array", 'start' => "array", 'end' => "array", 'body' => "string[]"])]
    private function formatNewEvent($schedule, array $attendees, User $user): array
    {
        return [
            'subject' => $schedule->MODID,
            'attendees' => $attendees,
            'start' => [
                'dateTime' => $schedule->TIME_FROM_ISO,
                'timeZone' => TimeZoneService::$timeZoneMap['Singapore Standard Time']
            ],
            'end' => [
                'dateTime' => $schedule->TIME_TO_ISO,
                'timeZone' => TimeZoneService::$timeZoneMap['Singapore Standard Time']
            ],
            'body' => [
                'content' =>
                    "Hi, $user->name, you have a class of $schedule->MODULE_NAME with lecturer $schedule->NAME ($schedule->SAMACCOUNTNAME@staffemail.apu.edu.my)" .
                    " at $schedule->ROOM from $schedule->TIME_FROM to $schedule->TIME_TO \n" .
//                    "Sync Schedule will run every Saturday at 01:00 AM.\n" .
                    "To unsubscribe, please click on the link below: \n" .
                    URL::signedRoute('public.unsubscribe', ['email' => $user->email]),
                'contentType' => 'text'
            ]
        ];
    }

    private function getEvent(User $user): array
    {
        $graph = $this->graphService->getGraph($user);

        $timezone = new DateTimeZone(TimeZoneService::$timeZoneMap["Singapore Standard Time"]);

        // Get start and end of week
        $startOfWeek = new DateTimeImmutable('sunday -2 week', $timezone);
        $endOfWeek = new DateTimeImmutable('sunday +2 week', $timezone);

        $queryParams = array(
            'startDateTime' => $startOfWeek->format(DateTimeInterface::ISO8601),
            'endDateTime' => $endOfWeek->format(DateTimeInterface::ISO8601),
            // Only request the properties used by the app
            '$select' => 'subject,organizer,start,end',
            // Sort them by start time
            '$orderby' => 'start/dateTime',
            // Limit results to 25
            '$top' => 25
        );

        // Append query parameters to the '/me/calendarView' url
        $getEventsUrl = '/me/calendarView?' . http_build_query($queryParams);

        return $graph->createRequest('GET', $getEventsUrl)
            // Add the user's timezone to the Prefer header
            ->addHeaders(array(
                'Prefer' => 'outlook.timezone="' . TimeZoneService::$timeZoneMap["Singapore Standard Time"] . '"'
            ))
            ->setReturnType(Model\Event::class)
            ->execute();
    }
}
