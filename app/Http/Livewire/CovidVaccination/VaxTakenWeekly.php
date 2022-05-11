<?php

namespace App\Http\Livewire\CovidVaccination;

use App\Models\Covid\VaxMalaysia;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class VaxTakenWeekly extends Component
{
    public bool $readyToLoad = false;
    public Collection $vaxs;
    public int $weekToLoad = 7;
    public int $weekToLoadMax;

    public function mount()
    {
        $this->vaxs = collect();
    }

    public function render(): Factory|View|Application
    {
        if ($this->readyToLoad) {
            $this->initVariable();
        }

        return view('livewire.covid-vaccination.vax-taken-weekly');
    }

    private function initVariable(): void
    {
        $this->vaxs = VaxMalaysia::query()
            ->get(['date', 'pfizer1', 'pfizer2', 'pfizer3', 'sinovac1', 'sinovac2', 'sinovac3', 'astra1', 'astra2', 'astra3', 'cansino', 'cansino3', 'sinopharm1', 'sinopharm2', 'sinopharm3'])
            ->sortByDesc('date')
            ->map(function (VaxMalaysia $vaxState) {
                $vaxState->weekYear = $vaxState->date->format('W / y');

                return $vaxState;
            })
            ->groupBy('weekYear')
            ->tap(function (Collection $vaxs) {
                $this->weekToLoadMax = $vaxs->count();
            })
            ->take($this->weekToLoad)
            ->map(function (Collection $vax) {
                return [
                    'weekYear' => $vax->first()->weekYear,
                    'pfizer1' => $vax->sum('pfizer1'),
                    'pfizer2' => $vax->sum('pfizer2'),
                    'pfizer3' => $vax->sum('pfizer3'),
                    'sinopharm1' => $vax->sum('sinopharm1'),
                    'sinopharm2' => $vax->sum('sinopharm2'),
                    'sinopharm3' => $vax->sum('sinopharm3'),
                    'sinovac1' => $vax->sum('sinovac1'),
                    'sinovac2' => $vax->sum('sinovac2'),
                    'sinovac3' => $vax->sum('sinovac3'),
                    'astra1' => $vax->sum('astra1'),
                    'astra2' => $vax->sum('astra2'),
                    'astra3' => $vax->sum('astra3'),
                    'cansino' => $vax->sum('cansino'),
                    'cansino3' => $vax->sum('cansino3'),
                ];
            });
    }

    public function load()
    {
        $this->readyToLoad = true;
    }
}
