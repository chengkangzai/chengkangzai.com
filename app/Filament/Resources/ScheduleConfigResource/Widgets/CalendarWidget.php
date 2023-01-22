<?php

namespace App\Filament\Resources\ScheduleConfigResource\Widgets;

use afiqiqmal\MalaysiaHoliday\MalaysiaHoliday;
use App\Models\ScheduleConfig;
use Carbon\Carbon;
use Chengkangzai\ApuSchedule\ApuSchedule;
use Saade\FilamentFullCalendar\Widgets\Concerns\CantManageEvents;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Str;

class CalendarWidget extends FullCalendarWidget
{
    use CantManageEvents;

    public array $fullCalendarConfig = [
        'headerToolbar' => [
            'left' => 'prev,next today',
            'center' => 'title',
            'right' => 'dayGridMonth,timeGridWeek,listWeek',
        ],

        'initialView' => 'timeGridWeek',
        'nowIndicator' => true,
        'allDaySlot' => true,
        'contentHeight' => 700,

        'slotMinTime' => '08:00:00',
        'slotMaxTime' => '19:00:00',

        'editable' => false,
    ];

    public function getViewData(): array
    {
        $config = ScheduleConfig::firstWhere('user_id', auth()->id());
        $holiday = MalaysiaHoliday::make()->fromState('Kuala Lumpur', now()->year)->get()['data'];
        $holidays = collect($holiday[0]['collection'][0]['data'])
            ->map(function ($item) {
                return [
                    'id' => $item['name'],
                    'title' => $item['name'],
                    'start' => Carbon::parse($item['date'])->startOfDay(),
                    'allDay' => true,
                ];
            });

        return ApuSchedule::getSchedule(
            intake: $config->intake_code,
            grouping: $config->grouping,
            ignore: $config->except
        )
            ->map(fn($item) => [
                'id' => $item->CLASS_CODE,
                'title' => Str::title($item->MODULE_NAME),
                'start' => Carbon::parse($item->TIME_FROM_ISO),
                'end' => Carbon::parse($item->TIME_TO_ISO),
            ])
            ->values()
            ->merge($holidays)
            ->toArray();
    }
}
