<?php

namespace App\Http\Services;

use App\Models\Covid\Population;
use App\Models\Covid\VaxRegState;
use App\Models\Covid\VaxState;
use Cache;
use Illuminate\Support\Collection;

class VaxStateService
{

    private int $cacheSecond;

    public function __construct()
    {
        $this->cacheSecond = 60;
    }

    public function getVax(): Collection
    {
        return Cache::remember('VaxState.VaxState', $this->cacheSecond, function () {
            return VaxState::query()
                ->orderByDesc('date')
                ->take(16)
                ->orderBy('state')
                ->get()
                ->map(function ($vaxState) {
                    $pop = $this->getPop()[$vaxState->state];
                    $vaxState->firstDoseDailyPercent = ($vaxState->dose1_daily / $pop) * 100;
                    $vaxState->secondDoseDailyPercent = ($vaxState->dose2_daily / $pop) * 100;

                    $vaxState->firstDoseCumulPercent = ($vaxState->dose1_cumul / $pop) * 100;
                    $vaxState->secondDoseCumulPercent = ($vaxState->dose2_cumul / $pop) * 100;
                    return $vaxState;
                });
        });
    }

    public function getPop()
    {
        return Cache::remember('Population', $this->cacheSecond, function () {
            return Population::all();
        })
            ->pluck('pop', 'state');
    }

    public function getVaxReg(): Collection
    {
        return Cache::remember('VaxState.VaxRegState', $this->cacheSecond, function () {
            return VaxRegState::query()
                ->orderByDesc('date')
                ->take(16)
                ->orderBy('state')
                ->get()
                ->map(function ($vaxRegState) {
                    $vaxRegState->registeredPrecent = ($vaxRegState->total / $this->getPop()[$vaxRegState->state]) * 100;
                    return $vaxRegState;
                });
        });
    }


}
