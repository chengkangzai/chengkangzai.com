<?php

namespace App\Http\Services;

use App\Models\Covid\CasesState;
use App\Models\Covid\DeathsState;
use App\Models\Covid\Population;
use App\Models\Covid\TestState;
use Ramsey\Collection\Collection;

class CasesStateService
{

    private int $cacheSecond;
    public \Illuminate\Support\Collection $population;

    public function __construct()
    {
        $this->cacheSecond = 60;
        $this->population = Population::pluck('pop', 'state');
    }

    public function getCases()
    {
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
    }

    public function getDeath()
    {
        return DeathsState::query()
            ->orderByDesc('date')
            ->take(16)
            ->orderBy('state')
            ->get()
            ->map(function ($death) {
                $death->cumPercentage = ($death->deaths_commutative / $this->population[$death->state]) * 100;
                return $death;
            });
    }

    public function getTest()
    {
        return TestState::query()
            ->orderByDesc('date')
            ->take(16)
            ->orderBy('state')
            ->get()
            ->map(function ($test) {
                $test->totaltest = $test->rtk_ag + $test->pcr;
                return $test;
            });

    }


    public function calcPositiveRate(Collection $cases, Collection $tests)
    {

    }


}
