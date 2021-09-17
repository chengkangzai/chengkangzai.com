<?php

namespace App\Http\Livewire\CovidState;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Head extends Component
{
    public string $state = 'Johor';

    public function render(): Factory|View|Application
    {
        return view('livewire.covid-state.head');
    }

    public function updatedState()
    {
        $this->emit("CovidStateUpdate", $this->state);
    }
}
