<?php

namespace App\Http\Livewire\CovidVaccination;

use App\Models\Covid\VaxState;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class FullVaxByMonth extends Component
{
    public bool $readyToLoad = false;

    public Collection $vaxs;

    public function mount()
    {
        $this->vaxs = collect();
    }

    public function render(): Factory|View|Application
    {
        if ($this->readyToLoad) {
            $this->initVariable();
        }

        return view('livewire.covid-vaccination.full-vax-by-month');
    }

    private function initVariable(): void
    {
        $this->vaxs = VaxState::query()
            ->get(['date', 'state', 'cumul_full'])
            ->map(function (VaxState $vaxState) {
                $vaxState->monthYear = $vaxState->date->format('M Y');
                return $vaxState;
            })
            ->sortByDesc('date')
            ->groupBy('monthYear')
            ->map(function ($vax) {
                return $vax
                    ->groupBy('state')
                    ->map(function ($state) {
                        return $state->sum('cumul_full');
                    });
            });
    }

    public function load()
    {
        $this->readyToLoad = true;
    }
}
