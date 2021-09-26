<?php

namespace App\Http\Services\CovidState\Graph;

use App\Models\Covid\CasesMalaysia;
use App\Models\Covid\DeathsMalaysia;
use App\Models\Covid\Hospital;
use App\Models\Covid\ICU;
use App\Models\Covid\PKRC;
use Cache;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class CovidMalaysiaGraphService
{
    public int|float $cacheSecond;

    const FILTER = [
        'TWO_WEEK', 'ONE_MONTH', 'THREE_MONTH', 'SIX_MONTH'
    ];

    public function __construct()
    {
        $this->cacheSecond = Carbon::now()->endOfHour()->diffInSeconds(Carbon::now());
    }

    public function getCases($filter = self::FILTER['TWO_WEEK']): array|Collection
    {
        return Cache::remember(__METHOD__ . $filter, $this->cacheSecond, function () use ($filter) {
            return CasesMalaysia::orderByDesc('date')->take($this->getDateScope($filter))->get()->sortBy('date');
        });
    }

    public function getDeath($filter = self::FILTER['TWO_WEEK']): Collection
    {
        return Cache::remember(__METHOD__ . $filter, $this->cacheSecond, function () use ($filter) {
            return DeathsMalaysia::orderByDesc('date')->take($this->getDateScope($filter))->get()->sortBy('date');
        });
    }

    public function getHealthCare($filter = self::FILTER['TWO_WEEK'])
    {
        $icu = Cache::remember(__METHOD__ . 'icu' . $filter, $this->cacheSecond, function () use ($filter) {
            return ICU::orderByDesc('date')->take($this->getDateScope($filter) * 16)->get(['date', 'vent_covid', 'icu_covid']);
        });
        $hospitals = Cache::remember(__METHOD__ . 'hospitals' . $filter, $this->cacheSecond, function () use ($filter) {
            return Hospital::orderByDesc('date')->take($this->getDateScope($filter) * 16)->get(['hosp_covid', 'date']);
        });
        $PKRCS = Cache::remember(__METHOD__ . 'PKRCS' . $filter, $this->cacheSecond, function () use ($filter) {
            return PKRC::orderByDesc('date')->take($this->getDateScope($filter) * 16)->get(['pkrc_covid', 'date']);
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

    private function formatHealthCare(Collection|array $activeCase, array|Collection|\Illuminate\Support\Collection $icu, array|Collection|\Illuminate\Support\Collection $hospitals, array|Collection|\Illuminate\Support\Collection $PKRCS): \Illuminate\Support\Collection|Collection
    {
        return $activeCase->map(function ($activeCase) use ($icu, $hospitals, $PKRCS) {
            $collect = collect();
            $collect->cat5 = $icu->where('date', $activeCase->date)->sum('vent_covid') ?? 0;
            $collect->cat4 = $icu->where('date', $activeCase->date)->sum('icu_covid') ?? 0;
            $collect->cat3 = $hospitals->where('date', $activeCase->date)->sum('hosp_covid') ?? 0;
            $collect->cat2 = $PKRCS->where('date', $activeCase->date)->sum('pkrc_covid') ?? 0;
            $collect->cat1 = $activeCase->activeCase - $collect->cat5 - $collect->cat4 - $collect->cat3 - $collect->cat2;

            $collect->active = $activeCase->activeCase;
            $collect->date = $activeCase->date->toDateString();

            return $collect;
        });
    }

}
