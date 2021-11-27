<?php

namespace App\Http\Services\Covid;

use App\Models\Covid\CasesState;
use App\Models\Covid\Cluster;
use App\Models\Covid\DeathsState;
use App\Models\Covid\Population;
use App\Models\Covid\TestState;
use Cache;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class CasesStateService
{

    private int $cacheSecond;

    public function __construct()
    {
        $this->cacheSecond = Carbon::now()->endOfHour()->diffInSeconds(Carbon::now());
    }

    public function getDeath(): Collection
    {
        return Cache::remember('CasesState.Death', $this->cacheSecond, fn() => DeathsState::latestOne()->get())
            ->map(function (DeathsState $deathsState) {
                $deathsState->date_diffWord = $this->getDiffForHumans($deathsState->date);
                return $deathsState;
            });
    }

    public function getCases(): Collection
    {
        return Cache::remember('CasesState.Cases', $this->cacheSecond, fn() => CasesState::latestOne()->get())
            ->map(function (CasesState $cases) {
                $pop = $this->getPop()[$cases->state];
                $cases->newPercentage = ($cases->cases_new / $pop) * 100;
                $cases->cumPercentage = ($cases->cases_cumulative / $pop) * 100;
                $cases->activeCasePercentage = ($cases->activeCase / $pop) * 100;
                $cases->date_diffWord = $this->getDiffForHumans($cases->date);
                return $cases;
            });
    }

    public function getTest(): Collection
    {
        return Cache::remember('CasesState.Test', $this->cacheSecond, function () {
            return TestState::where('date', $this->getTestDateShouldQuery())
                ->latestOne()
                ->get();
        })
            ->map(function ($test) {
                $test->totalTest = $test->rtk_ag + $test->pcr;
                $test->date_diffWord = $this->getDiffForHumans($test->date);
                return $test;
            });
    }

    public function calcPositiveRate(): Collection
    {
        $tests = $this->getTest()->pluck('totalTest', 'state');
        return Cache::remember(__METHOD__, $this->cacheSecond, function () {
            return CasesState::where('date', $this->getTestDateShouldQuery())->get();
        })
            ->map(function ($cases) use ($tests) {
                $cases->positiveRate = ($cases->cases_new / $tests[$cases->state]) * 100;
                return $cases;
            });
    }

    public function calcFatalityRate(): Collection
    {
        $deaths = $this->getDeath()->pluck('deaths_commutative', 'state');
        return $this->getCases()->map(function ($cases) use ($deaths) {
            $cases->fatalityRate = ($deaths[$cases->state] / $cases->cases_cumulative) * 100;
            return $cases;
        });
    }

    public function getClusterCount(string $state): int
    {
        return Cache::remember(__METHOD__ . $state, $this->cacheSecond, function () use ($state) {
            return Cluster::where('state', $state)->count();
        });
    }

    private function getPop(string $filter = Population::POP_FILTER['ALL_POPULATION']): Collection
    {
        return Cache::remember('Population', $this->cacheSecond, function () {
            return Population::all();
        })->pluck($filter, 'state');
    }

    private function getTestDateShouldQuery(): string
    {
        $dateOfTest = Cache::remember(__METHOD__, $this->cacheSecond, fn() => TestState::query()->orderByDesc('date')->take(1)->get()->first()->date);
        $dateOfCase = $this->getCases()->first()->date;

        if ($dateOfCase == $dateOfTest) {
            return $dateOfCase;
        }

        if ($dateOfTest < $dateOfCase) {
            return $dateOfTest;
        }

        return $dateOfCase;
    }


    private function getDiffForHumans($date): string
    {
        return Carbon::parse($date)->locale(app()->getLocale())->diffForHumans(['options' => Carbon::ONE_DAY_WORDS]);
    }

    public function getTimestamp(): array
    {
        $collect['cases'] = $this->getCases()->first()->date->toDateString();
        $collect['death'] = $this->getDeath()->first()->date->toDateString();
        $collect['test'] = $this->getTest()->first()->date->toDateString();
        $collect['cluster'] = Cache::remember(__METHOD__, $this->cacheSecond, fn() => Cluster::orderByDesc('id')->first()->created_at->toDateString());
        $collect['test_dateDiffWord'] = $this->getDiffForHumans($this->getTest()->last()->date);
        return $collect;
    }


}
