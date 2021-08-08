<?php

namespace App\Http\Livewire;

use App\Http\Services\CovidService;
use Livewire\Component;

class CovidComponent extends Component
{
    public $dashboardValue;

    public function mount(CovidService $covidService)
    {
        $this->dashboardValue = $covidService->getDashboardValue();
    }
}
