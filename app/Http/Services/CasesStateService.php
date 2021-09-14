<?php

namespace App\Http\Services;

use App\Models\Covid\CasesState;
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

    public function calcFatalityRate(): Collection
    {
        $deaths = $this->getDeath()->pluck('deaths_commutative', 'state');
        return $this->getCases()->map(function ($cases) use ($deaths) {
            $cases->fatalityRate = ($deaths[$cases->state] / $cases->cases_cumulative) * 100;
            return $cases;
        })->pluck('fatalityRate', 'state');
    }

    public function getDeath()
    {
        return Cache::remember('CasesState.Death', $this->cacheSecond, fn() => DeathsState::latestOne()->get());
    }

    public function getCases()
    {
        return Cache::remember('CasesState.Cases', $this->cacheSecond, fn() => CasesState::latestOne()->get())
            ->map(function ($cases) {
                $pop = $this->getPop()[$cases->state];
                $cases->newPercentage = ($cases->cases_new / $pop) * 100;
                $cases->cumPercentage = ($cases->cases_cumulative / $pop) * 100;
                return $cases;
            });
    }

    public function getTest()
    {
        return Cache::remember('CasesState.Test', $this->cacheSecond, function () {
            return TestState::where('date', $this->getTestDateShouldQuery())
                ->latestOne()
                ->get();
        })
            ->map(function ($test) {
                $test->totalTest = $test->rtk_ag + $test->pcr;
                return $test;
            });
    }

    public function calcPositiveRate(): Collection
    {
        $tests = $this->getTest()->pluck('totalTest', 'state');
        return $this->getCases()->map(function ($cases) use ($tests) {
            $cases->positiveRate = ($cases->cases_new / $tests[$cases->state]) * 100;
            return $cases;
        })->pluck('positiveRate', 'state');

    }

    private function getPop(): Collection
    {
        return Cache::remember('Population', $this->cacheSecond, fn() => Population::all())->pluck('pop', 'state');
    }

    private function getTestDateShouldQuery(): string
    {
        $dateOfTest = TestState::query()->orderByDesc('date')->take(1)->get()->first()->date;
        $dateOfCase = $this->getCases()->first()->date;

        if ($dateOfCase == $dateOfTest) {
            return $dateOfCase;
        }

        if ($dateOfTest < $dateOfCase) {
            return $dateOfTest;
        }
        return $dateOfCase;
    }


}
