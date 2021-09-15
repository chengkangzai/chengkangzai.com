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
use Illuminate\Support\Collection;

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
            ->map(function ($cases) {
                $pop = $this->getPop();
                $cases->newPercentage = ($cases->cases_new / $pop) * 100;
                $cases->cumPercentage = ($cases->cases_cumulative / $pop) * 100;
                return $cases;
            })
            ->first();
    }

    public function calcPositiveRate(): float|int
    {
        return ($this->getCases()->cases_new / $this->getTest()->totaltest) * 100;
    }

    public function getTest()
    {
        return Cache::remember('CasesMalaysia.Test', $this->cacheSecond, fn() => TestMalaysia::where('date', $this->getTestDateShouldQuery())->first());
    }

    private function getTestDateShouldQuery(): string
    {
        $dateOfTest = TestMalaysia::query()->orderByDesc('date')->take(1)->get()->first()->date;
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
            ->map(function ($vaxMalaysia) use ($filter) {
                $pop = $this->getPop($filter);
                $vaxMalaysia->firstDosePercent = ($vaxMalaysia->dose1_cumul / $pop) * 100;
                $vaxMalaysia->secondDosePercent = ($vaxMalaysia->dose2_cumul / $pop) * 100;
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

    public function getTimestamp(): Collection
    {
        $collect = collect();
        $collect->cases = $this->getCases()->date->toDateString();
        $collect->death = $this->getDeath()->date->toDateString();
        $collect->test = $this->getTest()->date->toDateString();
        $collect->cluster = Cache::remember('CasesMalaysia.ClusterTimestamp', $this->cacheSecond, fn() => Cluster::orderByDesc('id')->first()->created_at->toDateString());
        $collect->vax = $this->getVax()->date->toDateString();
        $collect->vaxReg = $this->getVaxReg()->date->toDateString();

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
