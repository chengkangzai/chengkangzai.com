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

class CasesMalaysiaService
{

    private int $cacheSecond;

    public function __construct()
    {
        $this->cacheSecond = 60;
    }

    public function getCases()
    {
        return Cache::remember('CasesMalaysia.Cases', $this->cacheSecond, function () {
            return CasesMalaysia::query()
                ->orderByDesc('date')
                ->take(1)
                ->get()
                ->map(function ($cases) {
                    $pop = $this->getPop();
                    $cases->newPercentage = ($cases->cases_new / $pop) * 100;
                    $cases->cumPercentage = ($cases->cases_cumulative / $pop) * 100;
                    return $cases;
                })
                ->first();
        });
    }

    public function getDeath()
    {
        return Cache::remember('CasesMalaysia.Death', $this->cacheSecond, function () {
            return DeathsMalaysia::latestOne()->get()->first();
        });
    }

    public function getTest()
    {
        return Cache::remember('CasesMalaysia.Test', $this->cacheSecond, function () {
            return TestMalaysia::query()
                ->where('date', $this->getTestDateShouldQuery())
                ->orderByDesc('date')
                ->take(1)
                ->get()
                ->first();
        });
    }

    public function getClusterCount()
    {
        return Cache::remember('CasesMalaysia.ClusterCount', $this->cacheSecond, function () {
            return Cluster::whereStatus('active')->count();
        });
    }


    public function getVax()
    {
        return Cache::remember('CasesMalaysia.VaxMalaysia', $this->cacheSecond, function () {
            return VaxMalaysia::query()
                ->orderByDesc('date')
                ->take(1)
                ->get()
                ->map(function ($vaxMalaysia) {
                    $vaxMalaysia->firstDosePercent = ($vaxMalaysia->dose1_cumul / $this->getPop()) * 100;
                    $vaxMalaysia->secondDosePercent = ($vaxMalaysia->dose2_cumul / $this->getPop()) * 100;
                    return $vaxMalaysia;
                })
                ->first();
        });
    }

    public function getVaxReg()
    {
        return Cache::remember('CasesMalaysia.VaxRegMalaysia', $this->cacheSecond, function () {
            return VaxRegMalaysia::query()
                ->orderByDesc('date')
                ->take(1)
                ->get()
                ->map(function ($vaxRegMalaysia) {
                    $vaxRegMalaysia->registeredPrecent = ($vaxRegMalaysia->total / $this->getPop()) * 100;
                    return $vaxRegMalaysia;
                })
                ->first();
        });
    }

    public function calcFatalityRate(): float|int
    {
        return ($this->getDeath()->deaths_new_cumulative / $this->getCases()->cases_cumulative) * 100;
    }

    public function calcPositiveRate(): float|int
    {
        return ($this->getCases()->cases_new / $this->getTest()->totaltest) * 100;
    }

    public function getTimestamp()
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

    private function getTestDateShouldQuery(): string
    {
        $dateOfTest = TestMalaysia::query()->orderByDesc('date')->take(1)->get()->first()->date;
        $dateOfCase = CasesMalaysia::query()->orderByDesc('date')->take(1)->get()->first()->date;

        if ($dateOfCase == $dateOfTest) {
            return $dateOfCase;
        }

        if ($dateOfTest < $dateOfCase) {
            return $dateOfTest;
        }
        return $dateOfCase;
    }

    public function getPop()
    {
        return Cache::remember('Population', $this->cacheSecond, function () {
            return Population::all();
        })
            ->where('Idxs', 0)
            ->first()
            ->pop;
    }


}