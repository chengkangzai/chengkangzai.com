<?php

namespace App\Http\Livewire\CovidDashboard;

use App\Http\Services\Covid\VaxStateService;
use App\Models\Covid\Population;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class VaxState extends Component
{
    public Collection $daily_partial;
    public Collection $daily_full;
    public Collection $daily_booster;
    public Collection $daily_booster2;

    public Collection $vaxReg;
    public Collection $vaxRegPrecent;

    public string $timestamp = '';
    public mixed $popFilter = 'ABOVE_18';

    public bool $readyToLoad = false;

    public function mount()
    {
        $array = ["Johor" => 0, "Kedah" => 0, "Kelantan" => 0, "Melaka" => 0, "Negeri Sembilan" => 0, "Pahang" => 0, "Pulau Pinang" => 0, "Perak" => 0, "Perlis" => 0, "Sabah" => 0, "Sarawak" => 0, "Selangor" => 0, "Terengganu" => 0, "W.P. Kuala Lumpur" => 0, "W.P. Labuan" => 0, "W.P. Putrajaya" => 0,];
        $this->daily_partial = collect($array);
        $this->daily_full = collect($array);
        $this->daily_booster = collect($array);
        $this->daily_booster2 = collect($array);
        $this->vaxReg = collect($array);
        $this->vaxRegPrecent = collect($array);
    }

    #[NoReturn]
 public function render(VaxStateService $service): Factory|View|Application
 {
     if ($this->readyToLoad) {
         $this->initVariable($service);
     }

     return view('livewire.covid-dashboard.vax-state');
 }

    public function load()
    {
        $this->readyToLoad = true;
    }

    public function updatedPopFilter()
    {
        $this->emit("vaxPopulationUpdate", $this->popFilter);
    }

    private function initVariable(VaxStateService $service): void
    {
        $vax = $service->getVax(Population::POP_FILTER[$this->popFilter]);
        $vaxReg = $service->getVaxReg(Population::POP_FILTER[$this->popFilter]);

        $this->timestamp = $vax->first()->date->toDateString();

        $this->daily_partial = $vax->pluck('daily_partial', 'state');
        $this->daily_full = $vax->pluck('daily_full', 'state');
        $this->daily_booster = $vax->pluck('daily_booster', 'state');
        $this->daily_booster2 = $vax->pluck('daily_booster2', 'state');

        $this->vaxReg = $vaxReg->pluck('total', 'state');
        $this->vaxRegPrecent = $vaxReg->pluck('registeredPrecent', 'state');
    }
}
