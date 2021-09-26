<?php

namespace App\Http\Livewire\CovidDashboard\Graph;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class ActiveCaseVsHealthCare extends Component
{
    public Collection $date;
    public Collection $activeCase;

    public Collection $cat1;
    public Collection $cat2;
    public Collection $cat3;
    public Collection $cat4;
    public Collection $cat5;


    public function render(): Factory|View|Application
    {
        return view('livewire.covid-dashboard.graph.active-case-vs-health-care');
    }
}
