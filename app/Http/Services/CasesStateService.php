<?php

namespace App\Http\Services;

use App\Models\Covid\CasesState;
use App\Models\Covid\DeathsState;
use App\Models\Covid\Population;
use App\Models\Covid\TestState;
use Cache;
use Illuminate\Support\Collection;

class CasesStateService
{

    private int $cacheSecond;
    public Collection $population;

    public function __construct()
    {
        $this->cacheSecond = 60;
        $this->population = Population::pluck('pop', 'state');
    }

    public function getCases()
    {
        return Cache::remember('CasesState.Cases', $this->cacheSecond, function () {
            return CasesState::query()
                ->orderByDesc('date')
                ->take(16)
                ->orderBy('state')
                ->get()
                ->map(function ($cases) {
                    $cases->newPercentage = ($cases->cases_new / $this->population[$cases->state]) * 100;
                    $cases->cumPercentage = ($cases->cases_cumulative / $this->population[$cases->state]) * 100;
                    return $cases;
                });
        });
    }

    public function getDeath()
    {
        return Cache::remember('CasesState.Death', $this->cacheSecond, function () {
            return DeathsState::query()
                ->orderByDesc('date')
                ->take(16)
                ->orderBy('state')
                ->get();
        });
    }

    public function getTest()
    {
        return Cache::remember('CasesState.Test', $this->cacheSecond, function () {
            return TestState::query()
                ->whereDate('date', $this->getTestDateShouldQuery())
                ->orderByDesc('date')
                ->take(16)
                ->orderBy('state')
                ->get()
                ->map(function ($test) {
                    $test->totaltest = $test->rtk_ag + $test->pcr;
                    return $test;
                });
        });

    }

    public function calcFatalityRate(Collection $cases, Collection $deaths): Collection
    {
        $deaths = $deaths->pluck('deaths_commutative', 'state');
        return $cases->map(function ($cases) use ($deaths) {
            $cases->fatalityRate = ($deaths[$cases->state] / $cases->cases_cumulative) * 100;
            return $cases;
        })->pluck('fatalityRate', 'state');
    }

    public function calcPositiveRate(Collection $cases, Collection $tests): Collection
    {
        $tests = $tests->pluck('totaltest', 'state');
        return $cases->map(function ($cases) use ($tests) {
            $cases->positiveRate = ($cases->cases_new / $tests[$cases->state]) * 100;
            return $cases;
        })->pluck('positiveRate', 'state');

    }

    private function getTestDateShouldQuery(): string
    {
        $dateOfTest = TestState::query()->orderByDesc('date')->take(1)->get()->first()->date;
        $dateOfCase = CasesState::query()->orderByDesc('date')->take(1)->get()->first()->date;

        if ($dateOfCase == $dateOfTest) {
            return $dateOfCase;
        }

        if ($dateOfTest < $dateOfCase) {
            return $dateOfTest;
        }
        return $dateOfCase;
    }


}
