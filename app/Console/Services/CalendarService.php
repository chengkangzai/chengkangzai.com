<?php


namespace App\Console\Services;


use App\Http\Services\APUScheduleService;
use App\Http\Services\MicrosoftGraphService;
use App\Http\Services\TimeZoneService;
use App\Models\User;
use JetBrains\PhpStorm\ArrayShape;
use Microsoft\Graph\Model\Event;

class CalendarService
{
    private MicrosoftGraphService $graphService;
    private APUScheduleService $APUSchedule;

    public function __construct()
    {
        $this->graphService = new MicrosoftGraphService();
        $this->APUSchedule = new APUScheduleService();
    }

    public function addEvent($config, User $user)
    {
        $attendeeAddresses = explode(';', $user->email);
        $attendees = $this->getAttendees($attendeeAddresses);
        $schedules = $this->APUSchedule->getSchedule($config->intake_code, $config->grouping)->get();

        foreach ($schedules as $schedule) {
            $newEvent = $this->getNewEvent($schedule, $attendees, $user);

            $this->syncCalendar($newEvent, $user);
        }
    }

    private function getAttendees(array $attendeeAddresses): array
    {
        $attendees = [];
        foreach ($attendeeAddresses as $attendeeAddress) {
            array_push($attendees, [
                'emailAddress' => [
                    'address' => $attendeeAddress
                ],
                'type' => 'required'
            ]);
        }
        return $attendees;
    }

    private function syncCalendar(array $newEvent, User $user)
    {
        $graph = $this->graphService->getGraph($user);
        $graph->createRequest('POST', '/me/events')
            ->attachBody($newEvent)
            ->setReturnType(Event::class)
            ->execute();
    }

    #[ArrayShape(['subject' => "", 'attendees' => "array", 'start' => "array", 'end' => "array", 'body' => "string[]"])]
    private function getNewEvent($schedule, array $attendees, User $user): array
    {
        return [
            'subject' => $schedule->MODID,
            'attendees' => $attendees,
            'start' => [
                'dateTime' => $schedule->TIME_FROM_ISO,
                'timeZone' => TimeZoneService::$timeZoneMap['SE Asia Standard Time']
            ],
            'end' => [
                'dateTime' => $schedule->TIME_TO_ISO,
                'timeZone' => TimeZoneService::$timeZoneMap['SE Asia Standard Time']
            ],
            'body' => [
                'content' =>
                    "Hi, $user->name, you have a class of $schedule->MODULE_NAME with lecturer $schedule->NAME ()" .
                    " at $schedule->ROOM from $schedule->TIME_FROM to $schedule->TIME_TO",
                'contentType' => 'text'
            ]
        ];
    }
}
