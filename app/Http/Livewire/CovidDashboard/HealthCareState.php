<?php

namespace App\Http\Livewire\CovidDashboard;


use App\Http\Services\HealthCareService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class HealthCareState extends Component
{
    /**
     * Variable for rendering
     */
    public Collection $ICUs;
    public Collection $bed_ICU;
    public Collection $hospitals;
    public Collection $bed_covid;
    public Collection $PKRC;
    public Collection $bed_PKRC;
    public string $updated_at;
    /**
     * Calculated Value
     */
    public Collection $totalOccupancyByState;
    public Collection $totalCovidBedByState;
    public Collection $totalUtilizationByState;
    public Collection $icu_covid_util;
    public Collection $hospital_covid_util;
    public Collection $pkrc_covid_util;

    public function render(HealthCareService $healthCareService): Factory|View|Application
    {
        $icu = $healthCareService->getICU();
        $hospital = $healthCareService->getHospital();
        $pkrc = $healthCareService->getPKRC();

        $this->updated_at = $icu->first()->date->toDateString();

        $this->ICUs = $icu->pluck('icu_covid', 'state');
        $this->bed_ICU = $icu->pluck('bed_icu_covid', 'state');
        $this->icu_covid_util = $icu->pluck('covid_utilization', 'state');
        $this->hospitals = $hospital->pluck('hosp_covid', 'state');
        $this->bed_covid = $hospital->pluck('beds_covid', 'state');
        $this->hospital_covid_util = $hospital->pluck('covid_utilization', 'state');
        $this->PKRC = $pkrc->pluck('pkrc_covid', 'state');
        $this->bed_PKRC = $pkrc->pluck('beds', 'state');
        $this->pkrc_covid_util = $pkrc->pluck('covid_utilization', 'state');

        $this->totalOccupancyByState = $healthCareService->getTotalOccupancyByState()->pluck('totalOccupy', 'state');
        $this->totalCovidBedByState = $healthCareService->getTotalCovidBedByState()->pluck('totalCovidBed', 'state');
        $this->totalUtilizationByState = $healthCareService->getTotalUtilizationByState()->pluck('utilPrecent', 'state');

        return view('livewire.covid-dashboard.health-care-state');
    }
}
