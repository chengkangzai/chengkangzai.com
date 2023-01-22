<?php

namespace App\Filament\Resources\ScheduleConfigResource\Widgets;

use App\Models\ScheduleConfig;
use Carbon\Carbon;
use Chengkangzai\ApuSchedule\ApuSchedule;
use Http;
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
        $apuHoliday = Http::get('https://2o7wc015dc.execute-api.ap-southeast-1.amazonaws.com/dev/v2/transix/holiday/active')
            ->json();
        $holidays = collect($apuHoliday)
            ->where('year', now()->year)
            ->pluck('holidays')
            ->flatten(1)
            ->map(fn ($item) => [
                'id' => $item['id'],
                'title' => $item['holiday_name'],
                'start' => Carbon::parse($item['holiday_start_date']),
                'end' => Carbon::parse($item['holiday_end_date']),
                'allDay' => true,
            ]);

        $config = ScheduleConfig::firstWhere('user_id', auth()->id());
        $schedules = ApuSchedule::getSchedule(
            intake: $config->intake_code,
            grouping: $config->grouping,
            ignore: $config->except
        )
            ->map(fn ($item) => [
                'id' => $item->CLASS_CODE,
                'title' => Str::title($item->MODULE_NAME),
                'start' => Carbon::parse($item->TIME_FROM_ISO),
                'end' => Carbon::parse($item->TIME_TO_ISO),
            ])
            ->values();

        return $schedules
            ->merge($holidays)
            ->toArray();
    }
}
