<?php

namespace App\Http\Livewire;


use App\Http\Services\CasesMalaysiaService;
use Illuminate\Support\Collection;
use Livewire\Component;

class CovidDashboardAbout extends Component
{
    public Collection $timestamp;

    public function render(CasesMalaysiaService $service)
    {
        $this->timestamp = $service->getTimestamp();

        return view('livewire.covid-dashboard-about');
    }
}
