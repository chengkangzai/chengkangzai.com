<?php

namespace App\Http\Livewire\CovidState;

use App\Http\Services\Covid\HealthCareService;
use App\Models\Covid\Hospital;
use App\Models\Covid\ICU;
use App\Models\Covid\PKRC;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class HealthCare extends Component
{
    public ICU $ICU;
    public Hospital $hospital;
    public PKRC|null $PKRC;

    public string $state = 'Johor';

    protected $listeners = ['CovidStateUpdate'];

    public bool $readyToLoad = false;

    public function mount()
    {
        $this->ICU = new ICU();
        $this->hospital = new Hospital();
        $this->PKRC = new PKRC();
    }

    public function render(HealthCareService $service): Factory|View|Application
    {
        if ($this->readyToLoad) {
            $this->initVariable($service);
        }

        return view('livewire.covid-state.health-care');
    }

    public function load()
    {
        $this->readyToLoad = true;
    }

    public function CovidStateUpdate(string $state)
    {
        $this->state = $state;
    }

    public function updatedState()
    {
        $this->emit("CovidStateUpdate", $this->state);
    }

    private function initVariable(HealthCareService $service): void
    {
        $this->ICU = $service->getICU()->firstWhere('state', $this->state);
        $this->hospital = $service->getHospital()->firstWhere('state', $this->state);
        $this->PKRC = $service->getPKRC()->firstWhere('state', $this->state);
    }
}
