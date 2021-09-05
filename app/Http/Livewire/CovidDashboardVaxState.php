<?php

namespace App\Http\Livewire;

use App\Http\Services\VaxStateService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class CovidDashboardVaxState extends Component
{
    public Collection $dose1_daily;
    public Collection $dose2_daily;

    public Collection $dose1_cumul;
    public Collection $dose2_cumul;

    public Collection $dose1_dailyPrecent;
    public Collection $dose2_dailyPrecent;

    public Collection $dose1_cumulPrecent;
    public Collection $dose2_cumulPrecent;

    public Collection $vaxReg;
    public Collection $vaxRegPrecent;

    public string $timestamp;

    #[NoReturn] public function render(VaxStateService $service): Factory|View|Application
    {
        $vax = $service->getVax();
        $vaxReg = $service->getVaxReg();

        $this->timestamp = $vax->first()->date->toDateString();

        $this->dose1_daily = $vax->pluck('dose1_daily', 'state');
        $this->dose1_cumul = $vax->pluck('dose1_cumul', 'state');
        $this->dose1_dailyPrecent = $vax->pluck('firstDoseDailyPercent', 'state');
        $this->dose1_cumulPrecent = $vax->pluck('firstDoseCumulPercent', 'state');

        $this->dose2_daily = $vax->pluck('dose2_daily', 'state');
        $this->dose2_cumul = $vax->pluck('dose2_cumul', 'state');
        $this->dose2_dailyPrecent = $vax->pluck('firstDoseDailyPercent', 'state');
        $this->dose2_cumulPrecent = $vax->pluck('secondDoseCumulPercent', 'state');

        $this->vaxReg = $vaxReg->pluck('total', 'state');
        $this->vaxRegPrecent = $vaxReg->pluck('registeredPrecent', 'state');

        return view('livewire.covid-dashboard-vax-state');
    }
}
