<?php

namespace App\Http\Services;

use App\Models\Covid\Population;
use App\Models\Covid\VaxRegState;
use App\Models\Covid\VaxState;
use Cache;
use Illuminate\Support\Collection;

class VaxStateService
{
    public const POP_FILTER = [
        'ALL' => 'pop',
        'ABOVE_18' => 'pop_18'
    ];

    private int $cacheSecond;

    public function __construct()
    {
        $this->cacheSecond = 60;
    }

    public function getVax(string $filter = self::POP_FILTER['ALL']): Collection
    {
        return Cache::remember('VaxState.VaxState', $this->cacheSecond, function () {
            return VaxState::query()
                ->orderByDesc('date')
                ->take(16)
                ->orderBy('state')
                ->get();
        })
            ->map(function ($vaxState) use ($filter) {

                $pop = $this->getPop($filter)[$vaxState->state];
                $vaxState->firstDoseDailyPercent = ($vaxState->dose1_daily / $pop) * 100;
                $vaxState->secondDoseDailyPercent = ($vaxState->dose2_daily / $pop) * 100;

                $vaxState->firstDoseCumulPercent = ($vaxState->dose1_cumul / $pop) * 100;
                $vaxState->secondDoseCumulPercent = ($vaxState->dose2_cumul / $pop) * 100;
                return $vaxState;
            });
    }

    public function getVaxReg(string $filter = self::POP_FILTER['ALL']): Collection
    {
        return Cache::remember('VaxState.VaxRegState', $this->cacheSecond, function () {
            return VaxRegState::query()
                ->orderByDesc('date')
                ->take(16)
                ->orderBy('state')
                ->get();
        })
            ->map(function ($vaxRegState) use ($filter) {
                $pop = $this->getPop($filter)[$vaxRegState->state];
                $vaxRegState->registeredPrecent = ($vaxRegState->total / $pop) * 100;
                return $vaxRegState;
            });
    }

    /**
     * @param string $filter
     * @return mixed
     */
    public function getPop(string $filter = self::POP_FILTER['ALL']): mixed
    {
        return Cache::remember('Population', $this->cacheSecond, function () {
            return Population::all();
        })->pluck($filter, 'state');
    }
}
