<?php

namespace App\Http\Livewire\CovidDashboard;

use App\Http\Services\Covid\CasesMalaysiaService;
use App\Models\Covid\CasesMalaysia;
use App\Models\Covid\DeathsMalaysia;
use App\Models\Covid\Population;
use App\Models\Covid\TestMalaysia;
use App\Models\Covid\VaxMalaysia;
use App\Models\Covid\VaxRegMalaysia;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Malaysia extends Component
{
    public CasesMalaysia $cases;
    public DeathsMalaysia $death;
    public TestMalaysia $test;
    public VaxMalaysia $vax;
    public VaxRegMalaysia $vaxReg;
    public array $timestamp = [];

    public int $clusterCount = 0;
    public int|float $positiveRate = 0;
    public int|float $fatalityRate = 0;
    public int $positiveRateCase = 0;

    protected $listeners = ['vaxPopulationUpdate'];

    public mixed $popFilter = 'ABOVE_18';

    public bool $readyToLoad = false;

    public function mount()
    {
        $this->cases = new CasesMalaysia();
        $this->death = new DeathsMalaysia();
        $this->test = new TestMalaysia();
        $this->vax = new VaxMalaysia();
        $this->vaxReg = new VaxRegMalaysia();
    }

    public function render(CasesMalaysiaService $service): Factory|View|Application
    {
        if ($this->readyToLoad) {
            $this->initVariable($service);
        }

        return view('livewire.covid-dashboard.malaysia');
    }

    public function load()
    {
        $this->readyToLoad = true;
    }

    /**
     * Listen to vaxPopulation
     */
    public function vaxPopulationUpdate(string $popFilter)
    {
        $this->popFilter = $popFilter;
    }

    private function initVariable(CasesMalaysiaService $service): void
    {
        $this->cases = $service->getCases();
        $this->death = $service->getDeath();
        $this->test = $service->getTest();
        $this->vax = $service->getVax(Population::POP_FILTER[$this->popFilter]);
        $this->vaxReg = $service->getVaxReg(Population::POP_FILTER[$this->popFilter]);

        $this->clusterCount = $service->getClusterCount();
        $this->fatalityRate = $service->calcFatalityRate();

        $positiveRateCase = $service->calcPositiveRate();
        $this->positiveRate = $positiveRateCase->positiveRate;
        $this->positiveRateCase = $positiveRateCase->cases_new;
        $this->timestamp = $service->getTimestamp();
    }
}
