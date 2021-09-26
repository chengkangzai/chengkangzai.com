<?php

namespace App\Http\Livewire\CovidDashboard;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class Graph extends Component
{

    public string $filter = 'TWO_WEEK';

    protected $listeners = ['CovidStateUpdate'];

    public Collection $date;
    public Collection $confirmCase;
    public Collection $recoveredCase;
    public Collection $deathCase;
    public Collection $activeCase;
    public Collection $bidCase;

    public Collection $cat1;
    public Collection $cat2;
    public Collection $cat3;
    public Collection $cat4;
    public Collection $cat5;

    public Collection $cumRecoveredCase;
    public Collection $cumDeathCase;

    public function render(): Factory|View|Application
    {
        return view('livewire.covid-dashboard.graph');
    }
}
