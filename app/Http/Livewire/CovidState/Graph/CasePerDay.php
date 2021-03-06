<?php

namespace App\Http\Livewire\CovidState\Graph;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class CasePerDay extends Component
{
    public Collection $date;
    public Collection $confirmCase;
    public Collection $recoveredCase;

    public function render(): Factory|View|Application
    {
        return view('livewire.covid-state.graph.case-per-day');
    }
}
