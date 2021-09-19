<?php

namespace App\Http\Services\CovidState\Graph;

use App\Models\Covid\CasesState;
use App\Models\Covid\DeathsState;
use App\Models\Covid\Hospital;
use App\Models\Covid\ICU;
use App\Models\Covid\PKRC;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class CovidStateGraphService
{
    public int|float $cacheSecond;

    const FILTER = [
        'TWO_WEEK', 'ONE_MONTH', 'THREE_MONTH', 'SIX_MONTH', 'ONE_YEAR'
    ];

    public function __construct()
    {
        $this->cacheSecond = Carbon::now()->endOfHour()->diffInSeconds(Carbon::now());
    }

    public function getCases($state = 'Johor', $filter = self::FILTER['TWO_WEEK']): array|Collection
    {
        return CasesState::where('state', $state)->orderByDesc('date')->take($this->getDateScope($filter))->get()->sortBy('date');
    }

    public function getDeath($state = 'Johor', $filter = self::FILTER['TWO_WEEK']): Collection
    {
        return DeathsState::where('state', $state)->orderByDesc('date')->take($this->getDateScope($filter))->get()->sortBy('date');
    }

    public function getHealthCare($state = 'Johor', $filter = self::FILTER['TWO_WEEK'])
    {
        $icu = ICU::where('state', $state)->orderByDesc('date')->take($this->getDateScope($filter) + 20)->get(['date', 'vent_covid', 'icu_covid']);
        $hospitals = Hospital::where('state', $state)->orderByDesc('date')->take($this->getDateScope($filter) + 20)->get(['hosp_covid', 'date']);
        $PKRCS = PKRC::where('state', $state)->orderByDesc('date')->take($this->getDateScope($filter) + 20)->get(['pkrc_covid', 'date']);
        $activeCase = $this->getCases($state, $filter);
        return $activeCase->map(function ($activeCase) use ($icu, $hospitals, $PKRCS) {
            $collect = collect();
            $collect->cat5 = $icu->firstWhere('date', $activeCase->date)->vent_covid ?? 0;
            $collect->cat4 = $icu->firstWhere('date', $activeCase->date)->icu_covid ?? 0;
            $collect->cat3 = $hospitals->firstWhere('date', $activeCase->date)->hosp_covid ?? 0;
            $collect->cat2 = $PKRCS->firstWhere('date', $activeCase->date)->pkrc_covid ?? 0;
            $collect->cat1 = $activeCase->activeCase - $collect->cat5 - $collect->cat4 - $collect->cat3 - $collect->cat2;

            $collect->active = $activeCase->activeCase;
            $collect->date = $activeCase->date->toDateString();

            return $collect;
        });
    }

    private function getDateScope(string $filter = self::FILTER['TWO_WEEK']): int
    {
        return match ($filter) {
            'ONE_MONTH' => 30,
            'THREE_MONTH' => 90,
            'SIX_MONTH' => 180,
            'ONE_YEAR' => 365,
            default => 14,
        };
    }
}
