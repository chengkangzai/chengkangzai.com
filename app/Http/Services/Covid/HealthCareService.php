<?php

namespace App\Http\Services\Covid;

use App\Models\Covid\Hospital;
use App\Models\Covid\ICU;
use App\Models\Covid\PKRC;
use Carbon\Carbon;


class HealthCareService
{

    private int $cacheSecond;

    public function __construct()
    {
        $this->cacheSecond = Carbon::now()->endOfHour()->diffInSeconds(Carbon::now());
    }

    public function getICU()
    {
        return cache()->remember('HealthCare.ICU', $this->cacheSecond, fn() => ICU::latestOne()->get())
            ->map(function (ICU $icu) {
                if (($icu->icu_covid ?? 0) !== 0 || ($icu->bed_icu_covid ?? 0) !== 0) {
                    $icu->covid_utilization = ($icu->icu_covid / $icu->bed_icu_covid) * 100;
                }
                $icu->overall_utilization = $icu->getOverallUtilisationAttribute();
                $icu->vent_utilization = $icu->getVentilationUtilisationAttribute();
                return $icu;
            });
    }

    public function getHospital()
    {
        return cache()->remember('HealthCare.Hospital', $this->cacheSecond, fn() => Hospital::latestOne()->get())
            ->map(function (Hospital $hospital) {
                $hospital->covid_utilization = $hospital->getCovidUtilisationAttribute();
                $hospital->overall_utilization = $hospital->getOverallUtilisationAttribute();
                return $hospital;
            });
    }

    public function getPKRC()
    {
        return cache()->remember('HealthCare.PKRC', $this->cacheSecond, fn() => PKRC::latestOne()->get())
            ->map(function (PKRC $pkrc) {
                $pkrc->covid_utilization = $pkrc->getOverallUtilisationAttribute();
                return $pkrc;
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
            });
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
            });
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
            });
    }


}
