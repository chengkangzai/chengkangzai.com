<?php

namespace App\Http\Livewire\CovidState;

use App\Http\Services\HealthCareService;
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
    public PKRC $PKRC;

    public string $state = 'Johor';

    protected $listeners = ['CovidStateUpdate'];

    public function render(HealthCareService $service): Factory|View|Application
    {
        $this->ICU = $service->getICU()->firstWhere('state', $this->state);
        $this->hospital = $service->getHospital()->firstWhere('state', $this->state);
        $this->PKRC = $service->getPKRC()->firstWhere('state', $this->state);

        return view('livewire.covid-state.health-care');
    }

    public function CovidStateUpdate(string $state)
    {
        $this->state = $state;
    }
}
