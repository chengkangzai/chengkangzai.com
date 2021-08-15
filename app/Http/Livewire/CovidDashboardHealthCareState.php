<?php

namespace App\Http\Livewire;


use App\Http\Services\HealthCareService;
use Livewire\Component;

class CovidDashboardHealthCareState extends Component
{
    /**
     * Filter Section
     */
    public string $orderBy = 'state';
    public string $orderDirection = 'asc';
    /**
     * Variable for rendering
     */
    public $ICUs;
    public $bed_ICU;
    public $hospitals;
    public $bed_covid;
    public $PKRC;
    public $bed_PKRC;
    /**
     * Calculated Value
     */
    public $totalOccupancyByState;
    public $totalCovidBedByState;
    public $totalUlizationByState;
    public $icu_covid_util;
    public $hospital_covid_util;
    public $pkrc_covid_util;


    public function sort($filterBy)
    {
        //TODO: make this working
        // maybe do sort by after getting the collection ?
        // so that can cache the data to prevent constant querying.
        if ($this->orderDirection == 'asc') {
            $this->orderDirection = 'desc';
        } else {
            $this->orderDirection = 'asc';
        }

        switch ($filterBy) {
            case 'icu_covid':
                $this->orderBy = 'icu_covid / bed_icu_covid';
                break;
            case 'hospital_covid':
                $this->orderBy = 'hosp_covid / beds_covid';
                break;
            case 'pkrc_covid':
                $this->orderBy = 'pkrc_covid / beds';
                break;
            default:
                $this->orderBy = 'state';
        }
    }


    public function render(HealthCareService $healthCareService)
    {
        $icu = $healthCareService->getICU($this->orderBy, $this->orderDirection);
        $hospital = $healthCareService->getHospital($this->orderBy, $this->orderDirection);
        $pkrc = $healthCareService->getPKRC($this->orderBy, $this->orderDirection);

        $this->ICUs = $icu->pluck('icu_covid', 'state');
        $this->bed_ICU = $icu->pluck('bed_icu_covid', 'state');
        $this->icu_covid_util = $icu->pluck('covid_utilization', 'state');
        $this->hospitals = $hospital->pluck('hosp_covid', 'state');
        $this->bed_covid = $hospital->pluck('beds_covid', 'state');
        $this->hospital_covid_util = $hospital->pluck('covid_utilization', 'state');
        $this->PKRC = $pkrc->pluck('pkrc_covid', 'state');
        $this->bed_PKRC = $pkrc->pluck('beds', 'state');
        $this->pkrc_covid_util = $pkrc->pluck('covid_utilization', 'state');

        $this->totalOccupancyByState = $healthCareService->getTotalOccupancyByState($icu, $hospital, $pkrc);
        $this->totalCovidBedByState = $healthCareService->getTotalCovidBedByState($icu, $hospital, $pkrc);
        $this->totalUlizationByState = $healthCareService->getTotalUtilizationByState($icu, $hospital, $pkrc);

        return view('livewire.covid-dashboard-health-care-state');
    }
}
