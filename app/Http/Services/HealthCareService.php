<?php

namespace App\Http\Services;

use App\Models\Covid\Hospital;
use App\Models\Covid\ICU;
use App\Models\Covid\PKRC;
use Illuminate\Database\Eloquent\Collection;

class HealthCareService
{

    private int $cacheSecond;

    public function __construct()
    {
        $this->cacheSecond = 60;
    }

    public function getHospital($orderBy = 'state', $orderDirection = 'asc')
    {
        return cache()->remember('HealthCare.Hospital', $this->cacheSecond, function (){
            return Hospital::query()
                ->orderByDesc('date')
                ->take(16)
                ->get()
                ->map(function ($hospital) {
                    $hospital->covid_utilization = ($hospital->hosp_covid / $hospital->beds_covid) * 100;
                    return $hospital;
                });
        });
    }

    public function getICU($orderBy = 'state', $orderDirection = 'asc')
    {
        return cache()->remember('HealthCare.ICU', $this->cacheSecond, function (){
            return ICU::query()
                ->orderByDesc('date')
                ->take(16)
                ->get()
                ->map(function ($icu) {
                    if (($icu->icu_covid ?? 0) !== 0 || ($icu->bed_icu_covid ?? 0) !== 0) {
                        $icu->covid_utilization = ($icu->icu_covid / $icu->bed_icu_covid) * 100;
                    }
                    return $icu;
                });
        });
    }

    public function getPKRC($orderBy = 'state', $orderDirection = 'asc')
    {
        return cache()->remember('HealthCare.PKRC', $this->cacheSecond,function (){
            return PKRC::query()
                ->orderByDesc('date')
                ->take(16)
                ->get()
                ->map(function ($pkrc) {
                    $pkrc->covid_utilization = ($pkrc->pkrc_covid / $pkrc->beds) * 100;
                    return $pkrc;
                });
        });
    }

    public function getTotalOccupancyByState(Collection $icu, Collection $hospital, Collection $pkrc)
    {
        return $icu
            ->map(function ($icu) use ($hospital, $pkrc) {
                $icuOccupy = $icu->icu_covid;
                $hospitalOccupy = $hospital->pluck('hosp_covid', 'state')[$icu['state']];
                $pkrcOccupy = $pkrc->pluck('pkrc_covid', 'state')->get($icu['state']);

                $icu->totalOccupy = $icuOccupy + $hospitalOccupy + $pkrcOccupy;
                return $icu;
            })
            ->pluck('totalOccupy', 'state');
    }

    public function getTotalCovidBedByState(Collection $icu, Collection $hospital, Collection $pkrc)
    {
        return $icu
            ->map(function ($icu) use ($hospital, $pkrc) {
                $icuBed = $icu->bed_icu_covid;
                $hospitalBed = $hospital->pluck('beds_covid', 'state')[$icu['state']];
                $pkrcBed = $pkrc->pluck('beds', 'state')[$icu['state']] ?? 0;

                $icu->totalCovidBed = $icuBed + $hospitalBed + $pkrcBed;
                return $icu;
            })
            ->pluck('totalCovidBed', 'state');
    }

    public function getTotalUtilizationByState(Collection $icu, Collection $hospital, Collection $pkrc)
    {
        return $icu
            ->map(function ($icu) use ($hospital, $pkrc) {
                $icuUtil = $icu->covid_utilization;
                $hospitalUtil = $hospital->pluck('covid_utilization', 'state')[$icu['state']];
                $pkrcUtil = $pkrc->pluck('covid_utilization', 'state')[$icu['state']] ?? 0;

                $icu->utilPrecent = ($icuUtil + $hospitalUtil + $pkrcUtil) / 3;
                return $icu;
            })
            ->pluck('utilPrecent', 'state');
    }


}
