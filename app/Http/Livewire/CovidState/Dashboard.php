<?php

namespace App\Http\Livewire\CovidState;

use App\Http\Services\CasesStateService;
use App\Http\Services\VaxStateService;
use App\Models\Covid\CasesState;
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
    public int $activeClusterCount = 0;

    public float $positiveRate = 0;
    public float $fatalityRate = 0;
    public int $positiveRateCase = 0;

    public string $state = 'Johor';

    protected $listeners = ['CovidStateUpdate'];

    public bool $readyToLoad = false;

    public function mount()
    {
        $this->test = new TestState();
        $this->cases = new CasesState();
        $this->death = new DeathsState();
        $this->vax = new VaxState();
        $this->vaxReg = new VaxRegState();
    }

    public function render(CasesStateService $casesStateService, VaxStateService $vaxStateService): Factory|View|Application
    {
        if ($this->readyToLoad) {
            $this->initVariable($casesStateService, $vaxStateService);
        }

        return view('livewire.covid-state.dashboard');
    }

    public function load()
    {
        $this->readyToLoad = true;
    }

    public function CovidStateUpdate(string $state)
    {
        $this->state = $state;
    }

    private function initVariable(CasesStateService $casesStateService, VaxStateService $vaxStateService): void
    {
        $this->cases = $casesStateService->getCases()->firstWhere('state', $this->state);
        $this->death = $casesStateService->getDeath()->firstWhere('state', $this->state);
        $this->test = $casesStateService->getTest()->firstWhere('state', $this->state);

        $this->vax = $vaxStateService->getVax()->firstWhere('state', $this->state);
        $this->vaxReg = $vaxStateService->getVaxReg()->firstWhere('state', $this->state);

        $this->fatalityRate = $casesStateService->calcFatalityRate()->firstWhere('state', $this->state)->fatalityRate;
        $positiveRateCase = $casesStateService->calcPositiveRate()->firstWhere('state', $this->state);
        $this->positiveRate = $positiveRateCase->positiveRate;
        $this->positiveRateCase = $positiveRateCase->cases_new;

        $this->activeClusterCount = $casesStateService->getClusterCount($this->state);
    }
}
