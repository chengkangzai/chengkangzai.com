<?php

namespace App\Http\Services;

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
        return Cache::remember(__METHOD__ . $filter, $this->cacheSecond, fn() => VaxState::latestOne()->get())
            ->map(function ($vaxState) use ($filter) {

                $pop = $this->getPop($filter)[$vaxState->state];
                $vaxState->firstDoseDailyPercent = ($vaxState->daily_partial / $pop) * 100;
                $vaxState->secondDoseDailyPercent = ($vaxState->daily_full / $pop) * 100;

                $vaxState->firstDoseCumulPercent = ($vaxState->cumul_partial / $pop) * 100;
                $vaxState->secondDoseCumulPercent = ($vaxState->cumul_full / $pop) * 100;
                return $vaxState;
            });
    }

    public function getVaxReg(string $filter = Population::POP_FILTER['ALL_POPULATION']): Collection
    {
        return Cache::remember(__METHOD__ . $filter, $this->cacheSecond, fn() => VaxRegState::latestOne()->get())
            ->map(function ($vaxRegState) use ($filter) {
                $pop = $this->getPop($filter)[$vaxRegState->state];
                $vaxRegState->registeredPrecent = ($vaxRegState->total / $pop) * 100;
                return $vaxRegState;
            });
    }

    public function getPop(string $filter = Population::POP_FILTER['ALL_POPULATION']): mixed
    {
        return Cache::remember('Population', $this->cacheSecond, function () {
            return Population::all();
        })->pluck($filter, 'state');
    }
}
