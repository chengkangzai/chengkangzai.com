<?php

namespace App\Http\Livewire;


use App\Http\Services\CasesMalaysiaService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CovidDashboardAbout extends Component
{
    public array $timestamp;

    public function render(CasesMalaysiaService $service): Factory|View|Application
    {
        $this->timestamp = $service->getTimestamp();

        return view('livewire.covid-dashboard-about');
    }
}
