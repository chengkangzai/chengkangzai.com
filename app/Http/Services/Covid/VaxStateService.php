<?php

namespace App\Http\Services\Covid;

use App\Models\Covid\Population;
use App\Models\Covid\VaxRegState;
use App\Models\Covid\VaxState;
use Cache;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class VaxStateService
{
    private int $cacheSecond;

    public function __construct()
    {
        $this->cacheSecond = Carbon::now()->endOfHour()->diffInSeconds(Carbon::now());
    }

    public function getVax(string $filter = Population::POP_FILTER['ALL_POPULATION']): Collection
    {
        return Cache::remember(__METHOD__ . $filter, $this->cacheSecond, fn () => VaxState::latestOne()->get())
            ->map(function ($vaxState) use ($filter) {
                $pop = $this->getPop($filter)[$vaxState->state];
                $vaxState->firstDoseDailyPercent = ($vaxState->daily_partial / $pop) * 100;
                $vaxState->secondDoseDailyPercent = ($vaxState->daily_full / $pop) * 100;

                $vaxState->firstDoseCumulPercent = ($vaxState->cumul_partial / $pop) * 100;
                $vaxState->secondDoseCumulPercent = ($vaxState->cumul_full / $pop) * 100;

                $vaxState->date_diffWord = $this->getDiffForHumans($vaxState->date);

                return $vaxState;
            });
    }

    public function getVaxReg(string $filter = Population::POP_FILTER['ALL_POPULATION']): Collection
    {
        return Cache::remember(__METHOD__ . $filter, $this->cacheSecond, fn () => VaxRegState::latestOne()->get())
            ->map(function ($vaxRegState) use ($filter) {
                $pop = $this->getPop($filter)[$vaxRegState->state];
                $vaxRegState->registeredPrecent = ($vaxRegState->total / $pop) * 100;

                $vaxRegState->date_diffWord = $this->getDiffForHumans($vaxRegState->date);

                return $vaxRegState;
            });
    }

    public function getPop(string $filter = Population::POP_FILTER['ALL_POPULATION']): mixed
    {
        return Cache::remember('Population', $this->cacheSecond, function () {
            return Population::all();
        })
            ->map(function (Population $population) {
                $population->pop_18 = $population->pop_18 + $population->pop_60;
                $population->pop_12 = $population->pop_12 + $population->pop_18;

                return $population;
            })
            ->pluck($filter, 'state');
    }

    private function getDiffForHumans($date): string
    {
        return Carbon::parse($date)->locale(app()->getLocale())->diffForHumans(['options' => Carbon::ONE_DAY_WORDS]);
    }
}
