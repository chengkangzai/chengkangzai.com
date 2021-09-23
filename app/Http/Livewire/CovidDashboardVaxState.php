<?php

namespace App\Http\Livewire;

use App\Http\Services\VaxStateService;
use App\Models\Covid\Population;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class CovidDashboardVaxState extends Component
{
    public Collection $daily_partial;
    public Collection $daily_full;

    public Collection $cumul_partial;
    public Collection $cumul_full;

    public Collection $daily_partialPrecent;
    public Collection $daily_fullPrecent;

    public Collection $cumul_partialPrecent;
    public Collection $cumul_fullPrecent;

    public Collection $vaxReg;
    public Collection $vaxRegPrecent;

    public string $timestamp;
    public mixed $popFilter = 'ALL_POPULATION';

    #[NoReturn] public function render(VaxStateService $service): Factory|View|Application
    {
        $vax = $service->getVax(Population::POP_FILTER[$this->popFilter]);
        $vaxReg = $service->getVaxReg(Population::POP_FILTER[$this->popFilter]);

        $this->timestamp = $vax->first()->date->toDateString();

        $this->daily_partial = $vax->pluck('daily_partial', 'state');
        $this->cumul_partial = $vax->pluck('cumul_partial', 'state');
        $this->daily_partialPrecent = $vax->pluck('firstDoseDailyPercent', 'state');
        $this->cumul_partialPrecent = $vax->pluck('firstDoseCumulPercent', 'state');

        $this->daily_full = $vax->pluck('daily_full', 'state');
        $this->cumul_full = $vax->pluck('cumul_full', 'state');
        $this->daily_fullPrecent = $vax->pluck('secondDoseDailyPercent', 'state');
        $this->cumul_fullPrecent = $vax->pluck('secondDoseCumulPercent', 'state');

        $this->vaxReg = $vaxReg->pluck('total', 'state');
        $this->vaxRegPrecent = $vaxReg->pluck('registeredPrecent', 'state');

        return view('livewire.covid-dashboard-vax-state');
    }

    public function updatedPopFilter()
    {
        $this->emit("vaxPopulationUpdate", $this->popFilter);
    }
}
