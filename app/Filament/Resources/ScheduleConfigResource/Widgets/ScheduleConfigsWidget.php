<?php

namespace App\Filament\Resources\ScheduleConfigResource\Widgets;

use App\Models\ScheduleConfig;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Chengkangzai\ApuSchedule\ApuHoliday;
use Chengkangzai\ApuSchedule\ApuSchedule;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Saade\FilamentFullCalendar\Widgets\Concerns\CantManageEvents;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class ScheduleConfigsWidget extends FullCalendarWidget
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
        'weekends' => false,
    ];

    public function getViewData(): array
    {
        $holidays = cache()->remember(
            key: 'apu-holiday',
            ttl: CarbonPeriod::weeks(14)->interval,
            callback: fn () => ApuHoliday::getByYear(Carbon::now()->year)
                ->map(fn ($item) => [
                    'id' => $item['id'],
                    'title' => $item['holiday_name'],
                    'start' => Carbon::parse($item['holiday_start_date']),
                    'end' => Carbon::parse($item['holiday_end_date']),
                    'allDay' => true,
                ])
        );

        $schedules = ScheduleConfig::whereBelongsTo(auth()->user())
            ->get()
            ->map(fn ($item) => cache()
                ->remember(
                    key: 'apu-schedule-'.$item->id,
                    ttl: CarbonPeriod::weeks(14)->interval,
                    callback: fn () => ApuSchedule::getSchedule(
                        intake: $item->intake_code,
                        grouping: $item->grouping,
                        ignore: $item->except
                    )
                )
            )
            ->map(function (Collection $item) {
                $COLOR = collect([
                    'red', 'maroon', 'blue', 'navy', 'teal', 'darkgreen', 'darkorchid', 'deeppink', 'lightsalmon', 'royalblue', 'skyblue',
                ])->random();

                $item->map(function ($i) use ($COLOR) {
                    $i->randomColor = $COLOR;

                    return $i;
                });

                return $item;
            })
            ->flatten(1)
            ->map(fn ($item) => [
                'id' => $item->CLASS_CODE,
                'title' => Str::title($item->MODULE_NAME),
                'start' => Carbon::parse($item->TIME_FROM_ISO),
                'end' => Carbon::parse($item->TIME_TO_ISO),
                'color' => $item->randomColor,
            ])
            ->values();

        return $schedules
            ->merge($holidays)
            ->toArray();
    }
}
