<?php

namespace App\Http\Livewire;


use App\Http\Services\CasesMalaysiaService;
use App\Models\Covid\CasesMalaysia;
use App\Models\Covid\DeathsMalaysia;
use App\Models\Covid\TestMalaysia;
use App\Models\Covid\VaxMalaysia;
use App\Models\Covid\VaxRegMalaysia;
use Livewire\Component;

class CovidDashboardMalaysia extends Component
{

    public CasesMalaysia $cases;
    public DeathsMalaysia $death;
    public TestMalaysia $test;
    public VaxMalaysia $vax;
    public VaxRegMalaysia $vaxReg;

    public int $clusterCount;
    public int|float $positiveRate;
    public int|float $fatalityRate;

    public function render(CasesMalaysiaService $service)
    {
        $this->cases = $service->getCases();
        $this->death = $service->getDeath();
        $this->test = $service->getTest();
        $this->vax = $service->getVax();
        $this->vaxReg = $service->getVaxReg();

        $this->clusterCount = $service->getClusterCount();
        $this->positiveRate = $service->calcPositiveRate();
        $this->fatalityRate = $service->calcFatalityRate();

        return view('livewire.covid-dashboard-malaysia');
    }
}
