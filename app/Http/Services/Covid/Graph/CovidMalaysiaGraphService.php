<?php

namespace App\Http\Services\Covid\Graph;

use Cache;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CovidMalaysiaGraphService
{
    public int|float $cacheSecond;

    public const FILTER = [
        'TWO_WEEK', 'ONE_MONTH', 'THREE_MONTH', 'SIX_MONTH',
    ];

    public function __construct()
    {
        $this->cacheSecond = Carbon::now()->endOfHour()->diffInSeconds(Carbon::now());
    }

    public function getCases($filter = self::FILTER['TWO_WEEK'])
    {
        return Cache::remember(__METHOD__ . $filter, $this->cacheSecond, function () use ($filter) {
            return DB::table('cases_malaysia')->orderByDesc('date')->take($this->getDateScope($filter))->get()->sortBy('date');
        })
            ->map(function ($case) {
                $case->activeCase=($case->cases_cumulative - $case->cases_recovered_cumulative);

                return $case;
            });
    }

    public function getDeath($filter = self::FILTER['TWO_WEEK'])
    {
        return Cache::remember(__METHOD__ . $filter, $this->cacheSecond, function () use ($filter) {
            return DB::table('deaths_malaysia')->orderByDesc('date')->take($this->getDateScope($filter))->get()->sortBy('date');
        });
    }

    public function getHealthCare($filter = self::FILTER['TWO_WEEK'])
    {
        $icu = Cache::remember(__METHOD__ . 'icu' . $filter, $this->cacheSecond, function () use ($filter) {
            return DB::table('icus')->orderByDesc('date')->take($this->getDateScope($filter) * 16)->get(['date', 'vent_covid', 'icu_covid']);
        });
        $hospitals = Cache::remember(__METHOD__ . 'hospitals' . $filter, $this->cacheSecond, function () use ($filter) {
            return DB::table('hospitals')->orderByDesc('date')->take($this->getDateScope($filter) * 16)->get(['hosp_covid', 'date']);
        });
        $PKRCS = Cache::remember(__METHOD__ . 'PKRCS' . $filter, $this->cacheSecond, function () use ($filter) {
            return DB::table('PKRC')->orderByDesc('date')->take($this->getDateScope($filter) * 16)->get(['pkrc_covid', 'date']);
        });

        return $this->formatHealthCare($this->getCases($filter), $icu, $hospitals, $PKRCS);
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
            $collect->cat5 = $icu->where('date', $activeCase->date)->sum('vent_covid') ?? 0;
            $collect->cat4 = $icu->where('date', $activeCase->date)->sum('icu_covid') ?? 0;
            $collect->cat3 = $hospitals->where('date', $activeCase->date)->sum('hosp_covid') ?? 0;
            $collect->cat2 = $PKRCS->where('date', $activeCase->date)->sum('pkrc_covid') ?? 0;
            $collect->active = ($activeCase->cases_cumulative - $activeCase->cases_recovered_cumulative);
            $collect->cat1 = $collect->active - $collect->cat5 - $collect->cat4 - $collect->cat3 - $collect->cat2;

            $collect->date = Carbon::parse($activeCase->date)->toDateString();

            return $collect;
        });
    }
}
