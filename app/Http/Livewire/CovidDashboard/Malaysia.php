<?php

namespace App\Http\Livewire\CovidDashboard;


use App\Http\Services\CasesMalaysiaService;
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

    public int $clusterCount;
    public int|float $positiveRate;
    public int|float $fatalityRate;
    public int $positiveRateCase;

    protected $listeners = ['vaxPopulationUpdate'];

    public mixed $popFilter = 'ALL_POPULATION';

    public function render(CasesMalaysiaService $service): Factory|View|Application
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

        return view('livewire.covid-dashboard.malaysia');
    }

    /**
     * Listen to vaxPopulation
     */
    public function vaxPopulationUpdate(string $popFilter)
    {
        $this->popFilter = $popFilter;
    }
}