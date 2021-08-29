<?php

namespace App\Http\Livewire;


use App\Http\Services\CasesStateService;

class CovidDashboardCasesState extends CovidComponent
{

    public $cases;
    public $death;
    public $tests;

    public $newCase;
    public $newDeath;
    public $cumCase;
    public $cumCasePrecentage;
    public $cumDeath;
    public $cumDeathPrecentage;

    public function render(CasesStateService $service)
    {
        $this->cases = $service->getCases();
        $this->death = $service->getDeath();
        $this->tests = $service->getTest();

        $this->newCase = $this->cases->pluck('cases_new', 'state');
        $this->cumCase = $this->cases->pluck('cases_cumulative', 'state');
        $this->cumCasePrecentage = $this->cases->pluck('cumPercentage', 'state');

        $this->newDeath = $this->death->pluck('deaths_new', 'state');
        $this->cumDeath = $this->death->pluck('deaths_commutative', 'state');
        $this->cumDeathPrecentage = $this->death->pluck('cumPercentage', 'state');


        return view('livewire.covid-dashboard-cases-state');
    }
}
