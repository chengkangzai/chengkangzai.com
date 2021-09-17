<?php

namespace App\Http\Livewire\CovidState;

use App\Http\Services\CasesStateService;
use App\Http\Services\VaxStateService;
use App\Models\Covid\CasesState;
use App\Models\Covid\Cluster;
use App\Models\Covid\DeathsState;
use App\Models\Covid\TestState;
use App\Models\Covid\VaxRegState;
use App\Models\Covid\VaxState;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Dashboard extends Component
{
    public TestState $test;
    public CasesState $cases;
    public DeathsState $death;
    public VaxState $vax;
    public VaxRegState $vaxReg;
    public int $activeClusterCount;

    public float $positiveRate;
    public float $fatalityRate;

    public string $state = 'Johor';

    protected $listeners = ['CovidStateUpdate'];

    public function render(CasesStateService $casesStateService, VaxStateService $vaxStateService): Factory|View|Application
    {
        $this->cases = $casesStateService->getCases()->firstWhere('state', $this->state);
        $this->death = $casesStateService->getDeath()->firstWhere('state', $this->state);
        $this->test = $casesStateService->getTest()->firstWhere('state', $this->state);

        $this->vax = $vaxStateService->getVax()->firstWhere('state', $this->state);
        $this->vaxReg = $vaxStateService->getVaxReg()->firstWhere('state', $this->state);

        $this->fatalityRate = $casesStateService->calcFatalityRate()->firstWhere('state', $this->state)->fatalityRate;
        $this->positiveRate = $casesStateService->calcPositiveRate()->firstWhere('state', $this->state)->positiveRate;

        $this->activeClusterCount = Cluster::where('state', $this->state)->count();

        return view('livewire.covid-state.dashboard');
    }

    public function CovidStateUpdate(string $state)
    {
        $this->state = $state;
    }
}
