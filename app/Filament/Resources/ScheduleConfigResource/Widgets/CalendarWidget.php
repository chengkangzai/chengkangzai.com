<?php

namespace App\Filament\Resources\ScheduleConfigResource\Widgets;

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
        'allDaySlot' => false,
        'contentHeight' => 700,

        'slotMinTime' => '07:00:00',
        'slotMaxTime' => '24:00:00',

        'editable' => false,
    ];

    public function getViewData(): array
    {
        $config = ScheduleConfig::firstWhere('user_id', auth()->id());
        return ApuSchedule::getSchedule($config->intake_code, $config->grouping, $config->except)
            ->map(fn($item) => [
                'id' => $item->CLASS_CODE,
                'title' => Str::title($item->MODULE_NAME),
                'start' => Carbon::parse($item->TIME_FROM_ISO),
                'end' => Carbon::parse($item->TIME_TO_ISO),
            ])
            ->values()
            ->toArray();
    }
}
