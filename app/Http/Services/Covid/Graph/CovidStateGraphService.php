<?php

namespace App\Http\Services\Covid\Graph;

use Cache;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CovidStateGraphService
{
    public int|float $cacheSecond;

    public const FILTER = [
        'TWO_WEEK', 'ONE_MONTH', 'THREE_MONTH', 'SIX_MONTH', 'ONE_YEAR',
    ];

    public function __construct()
    {
        $this->cacheSecond = Carbon::now()->endOfHour()->diffInSeconds(Carbon::now());
    }

    public function getCases($state = 'Johor', $filter = self::FILTER['TWO_WEEK'])
    {
        return Cache::remember(__METHOD__ . $state . $filter, $this->cacheSecond, function () use ($filter, $state) {
            return DB::table('cases_states')->where('state', $state)->orderByDesc('date')->take($this->getDateScope($filter))->get()->sortBy('date');
        })
            ->map(function ($case) {
                $case->activeCase = $case->cases_cumulative - $case->cases_recovered_cumulative;

                return $case;
            });
    }

    public function getDeath($state = 'Johor', $filter = self::FILTER['TWO_WEEK'])
    {
        return Cache::remember(__METHOD__ . $state . $filter, $this->cacheSecond, function () use ($filter, $state) {
            return DB::table('deaths_states')->where('state', $state)->orderByDesc('date')->take($this->getDateScope($filter))->get()->sortBy('date');
        });
    }

    public function getHealthCare($state = 'Johor', $filter = self::FILTER['TWO_WEEK'])
    {
        $icu = Cache::remember(__METHOD__ . 'icu' . $state . $filter, $this->cacheSecond, function () use ($filter, $state) {
            return DB::table('icus')->where('state', $state)->orderByDesc('date')->take($this->getDateScope($filter))->get(['date', 'vent_covid', 'icu_covid']);
        });
        $hospitals = Cache::remember(__METHOD__ . 'hospitals' . $state . $filter, $this->cacheSecond, function () use ($filter, $state) {
            return DB::table('hospitals')->where('state', $state)->orderByDesc('date')->take($this->getDateScope($filter))->get(['hosp_covid', 'date']);
        });
        $PKRCS = Cache::remember(__METHOD__ . 'PKRCS' . $state . $filter, $this->cacheSecond, function () use ($filter, $state) {
            return DB::table('PKRC')->where('state', $state)->orderByDesc('date')->take($this->getDateScope($filter))->get(['pkrc_covid', 'date']);
        });

        return $this->formatHealthCare($this->getCases($state, $filter), $icu, $hospitals, $PKRCS);
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

    private function formatHealthCare($activeCase, $icu, $hospitals, $PKRCS)
    {
        return $activeCase->map(function ($activeCase) use ($icu, $hospitals, $PKRCS) {
            $collect = collect();
            $collect->cat5 = $icu->firstWhere('date', $activeCase->date)->vent_covid ?? 0;
            $collect->cat4 = $icu->firstWhere('date', $activeCase->date)->icu_covid ?? 0;
            $collect->cat3 = $hospitals->firstWhere('date', $activeCase->date)->hosp_covid ?? 0;
            $collect->cat2 = $PKRCS->firstWhere('date', $activeCase->date)->pkrc_covid ?? 0;
            $collect->active = $activeCase->cases_cumulative - $activeCase->cases_recovered_cumulative;
            $collect->cat1 = $collect->active - $collect->cat5 - $collect->cat4 - $collect->cat3 - $collect->cat2;

            $collect->date = Carbon::parse($activeCase->date)->toDateString();

            return $collect;
        });
    }
}
