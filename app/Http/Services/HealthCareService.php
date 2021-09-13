<?php

namespace App\Http\Services;

use App\Models\Covid\Hospital;
use App\Models\Covid\ICU;
use App\Models\Covid\PKRC;


class HealthCareService
{

    private int $cacheSecond;

    public function __construct()
    {
        $this->cacheSecond = 60;
    }

    public function getTotalOccupancyByState()
    {
        return $this->getICU()
            ->map(function ($icu) {
                $icuOccupy = $icu->icu_covid;
                $hospitalOccupy = $this->getHospital()->pluck('hosp_covid', 'state')[$icu['state']];
                $pkrcOccupy = $this->getPKRC()->pluck('pkrc_covid', 'state')->get($icu['state']);

                $icu->totalOccupy = $icuOccupy + $hospitalOccupy + $pkrcOccupy;
                return $icu;
            })
            ->pluck('totalOccupy', 'state');
    }

    public function getICU($orderBy = 'state', $orderDirection = 'asc')
    {
        return cache()->remember('HealthCare.ICU', $this->cacheSecond, function () use ($orderDirection, $orderBy) {
            return ICU::query()
                ->orderByDesc('date')
                ->take(16)
                ->orderBy($orderBy, $orderDirection)
                ->get()
                ->map(function ($icu) {
                    if (($icu->icu_covid ?? 0) !== 0 || ($icu->bed_icu_covid ?? 0) !== 0) {
                        $icu->covid_utilization = ($icu->icu_covid / $icu->bed_icu_covid) * 100;
                    }
                    return $icu;
                });
        });
    }

    public function getHospital($orderBy = 'state', $orderDirection = 'asc')
    {
        return cache()->remember('HealthCare.Hospital', $this->cacheSecond, function () use ($orderBy, $orderDirection) {
            return Hospital::query()
                ->orderByDesc('date')
                ->take(16)
                ->orderBy($orderBy, $orderDirection)
                ->get()
                ->map(function ($hospital) {
                    $hospital->covid_utilization = ($hospital->hosp_covid / $hospital->beds_covid) * 100;
                    return $hospital;
                });
        });
    }

    public function getPKRC($orderBy = 'state', $orderDirection = 'asc')
    {
        return cache()->remember('HealthCare.PKRC', $this->cacheSecond, function () use ($orderDirection, $orderBy) {
            return PKRC::query()
                ->orderByDesc('date')
                ->take(16)
                ->orderBy($orderBy, $orderDirection)
                ->get()
                ->map(function ($pkrc) {
                    $pkrc->covid_utilization = ($pkrc->pkrc_covid / $pkrc->beds) * 100;
                    return $pkrc;
                });
        });
    }

    public function getTotalCovidBedByState()
    {
        return $this->getICU()
            ->map(function ($icu) {
                $icuBed = $icu->bed_icu_covid;
                $hospitalBed = $this->getHospital()->pluck('beds_covid', 'state')[$icu['state']];
                $pkrcBed = $this->getPKRC()->pluck('beds', 'state')[$icu['state']] ?? 0;

                $icu->totalCovidBed = $icuBed + $hospitalBed + $pkrcBed;
                return $icu;
            })
            ->pluck('totalCovidBed', 'state');
    }

    public function getTotalUtilizationByState()
    {
        return $this->getICU()
            ->map(function ($icu) {
                $icuUtil = $icu->covid_utilization;
                $hospitalUtil = $this->getHospital()->pluck('covid_utilization', 'state')[$icu['state']];
                $pkrcUtil = $this->getICU()->pluck('covid_utilization', 'state')[$icu['state']] ?? 0;

                $icu->utilPrecent = ($icuUtil + $hospitalUtil + $pkrcUtil) / 3;
                return $icu;
            })
            ->pluck('utilPrecent', 'state');
    }


}
