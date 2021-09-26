<?php

namespace App\Http\Livewire\CovidDashboard;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Head extends Component
{
    public function render(): Factory|View|Application
    {
        return view('livewire.covid-dashboard.head');
    }
}
