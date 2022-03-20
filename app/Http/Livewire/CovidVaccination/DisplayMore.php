<?php

namespace App\Http\Livewire\CovidVaccination;

use App\Models\Covid\VaxMalaysia;
use App\Models\Covid\VaxRegMalaysia;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class DisplayMore extends Component
{
    public bool $readyToLoad = false;

    public int $vaxDaysToShow = 7;
    public int $regDaysToShow = 7;

    public Collection $vaxs;
    public Collection $regs;

    public function mount()
    {
        $this->vaxs = collect();
        $this->regs = collect();
    }

    public function render(): Factory|View|Application
    {
        if ($this->readyToLoad) {
            $this->initVariable();
        }

        return view('livewire.covid-vaccination.display-more');
    }

    private function initVariable(): void
    {
        $this->vaxs = VaxMalaysia::latest()
            ->take($this->vaxDaysToShow)
            ->get()
            ->map(function (VaxMalaysia $vax) {
                $vax->daily_partial_adult = $vax->daily_partial - $vax->daily_partial_child - $vax->daily_partial_adol;
                $vax->daily_full_adult = $vax->daily_full - $vax->daily_full_child - $vax->daily_full_adol;

                $vax->cumul_partial_adult = $vax->cumul_partial - $vax->cumul_partial_child - $vax->cumul_partial_adol;
                $vax->cumul_full_adult = $vax->cumul_full - $vax->cumul_full_child - $vax->cumul_full_adol;

                return $vax;
            });

        $this->regs = VaxRegMalaysia::latest()
            ->take($this->regDaysToShow)
            ->get();
    }

    public function load()
    {
        $this->readyToLoad = true;
    }
}
