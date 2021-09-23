<?php

namespace App\Http\Services;

use App\Models\Covid\CasesMalaysia;
use App\Models\Covid\Cluster;
use App\Models\Covid\DeathsMalaysia;
use App\Models\Covid\Population;
use App\Models\Covid\TestMalaysia;
use App\Models\Covid\VaxMalaysia;
use App\Models\Covid\VaxRegMalaysia;
use Cache;
use Carbon\Carbon;

class CasesMalaysiaService
{

    private int $cacheSecond;

    public function __construct()
    {
        $this->cacheSecond = Carbon::now()->endOfHour()->diffInSeconds(Carbon::now());
    }

    public function getClusterCount()
    {
        return Cache::remember('CasesMalaysia.ClusterCount', $this->cacheSecond, fn() => Cluster::whereStatus('active')->count());
    }

    public function calcFatalityRate(): float|int
    {
        return ($this->getDeath()->deaths_new_cumulative / $this->getCases()->cases_cumulative) * 100;
    }

    public function getDeath()
    {
        return Cache::remember('CasesMalaysia.Death', $this->cacheSecond, fn() => DeathsMalaysia::latestOne()->get()->first());
    }

    public function getCases()
    {
        return Cache::remember('CasesMalaysia.Cases', $this->cacheSecond, fn() => CasesMalaysia::latestOne()->get())
            ->map(function (CasesMalaysia $cases) {
                $pop = $this->getPop();
                $cases->newPercentage = ($cases->cases_new / $pop) * 100;
                $cases->cumPercentage = ($cases->cases_cumulative / $pop) * 100;
                $cases->activeCasePercentage = ($cases->activeCase / $pop) * 100;
                return $cases;
            })
            ->first();
    }

    public function calcPositiveRate()
    {
        $tests = $this->getTest();
        return Cache::remember(__METHOD__, $this->cacheSecond, function () {
            return CasesMalaysia::where('date', $this->getTestDateShouldQuery())->get();
        })
            ->map(function ($cases) use ($tests) {
                $cases->positiveRate = ($cases->cases_new / $tests->totalTest) * 100;
                return $cases;
            })
            ->first();
    }

    public function getTest()
    {
        return Cache::remember('CasesMalaysia.Test', $this->cacheSecond, fn() => TestMalaysia::where('date', $this->getTestDateShouldQuery())->first());
    }

    private function getTestDateShouldQuery(): string
    {
        $dateOfTest = Cache::remember(__METHOD__, $this->cacheSecond, fn() => TestMalaysia::orderByDesc('date')->take(1)->get()->first()->date);
        $dateOfCase = $this->getCases()->date;

        if ($dateOfCase == $dateOfTest) {
            return $dateOfCase;
        }

        if ($dateOfTest < $dateOfCase) {
            return $dateOfTest;
        }
        return $dateOfCase;
    }

    public function getVax(string $filter = Population::POP_FILTER['ALL_POPULATION'])
    {
        return Cache::remember('CasesMalaysia.VaxMalaysia', $this->cacheSecond, fn() => VaxMalaysia::latestOne()->get())
            ->map(function (VaxMalaysia $vaxMalaysia) use ($filter) {
                $pop = $this->getPop($filter);
                $vaxMalaysia->firstDosePercent = ($vaxMalaysia->cumul_partial / $pop) * 100;
                $vaxMalaysia->secondDosePercent = ($vaxMalaysia->cumul_full / $pop) * 100;

                $vaxMalaysia->firstDoseCumulPercent = ($vaxMalaysia->daily_partial / $pop) * 100;
                $vaxMalaysia->secondDoseCumulPercent = ($vaxMalaysia->daily_full / $pop) * 100;
                return $vaxMalaysia;
            })
            ->first();
    }

    public function getVaxReg(string $filter = Population::POP_FILTER['ALL_POPULATION'])
    {
        return Cache::remember('CasesMalaysia.VaxRegMalaysia', $this->cacheSecond, fn() => VaxRegMalaysia::latestOne()->get())
            ->map(function ($vaxRegMalaysia) use ($filter) {
                $vaxRegMalaysia->registeredPrecent = ($vaxRegMalaysia->total / $this->getPop($filter)) * 100;
                return $vaxRegMalaysia;
            })
            ->first();
    }

    public function getTimestamp(): array
    {
        $collect['cases'] = $this->getCases()->date->toDateString();
        $collect['death'] = $this->getDeath()->date->toDateString();
        $collect['test'] = $this->getTest()->date->toDateString();
        $collect['cluster'] = Cache::remember('CasesMalaysia.ClusterTimestamp', $this->cacheSecond, fn() => Cluster::orderByDesc('id')->first()->created_at->toDateString());
        $collect['vax'] = $this->getVax()->date->toDateString();
        $collect['vaxReg'] = $this->getVaxReg()->date->toDateString();
        return $collect;
    }

    public function getPop(string $filter = Population::POP_FILTER['ALL_POPULATION'])
    {
        return Cache::remember('Population', $this->cacheSecond, fn() => Population::all())
            ->where('Idxs', 0)
            ->first()
            ->$filter;
    }
}
