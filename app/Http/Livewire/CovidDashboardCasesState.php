<?php

namespace App\Http\Livewire;


use App\Http\Services\CasesStateService;

class CovidDashboardCasesState extends CovidComponent
{
    public $updated_at;

    public $newCase;
    public $newDeath;
    public $cumCase;
    public $cumCasePrecentage;
    public $cumDeath;
    public $fatalityRate;
    public $tests;
    public $positiveRate;
    public $newRecovered;
    public $cumRecovered;

    public function render(CasesStateService $service)
    {
        $cases = $service->getCases();
        $death = $service->getDeath();
        $tests = $service->getTest();

        $this->updated_at = $cases->first()->date->toDateString();

        $this->newCase = $cases->pluck('cases_new', 'state');
        $this->cumCase = $cases->pluck('cases_cumulative', 'state');
        $this->cumCasePrecentage = $cases->pluck('cumPercentage', 'state');

        $this->newRecovered = $cases->pluck('cases_recovered', 'state');
        $this->cumRecovered = $cases->pluck('cases_recovered_cumulative', 'state');

        $this->newDeath = $death->pluck('deaths_new', 'state');
        $this->cumDeath = $death->pluck('deaths_commutative', 'state');
        $this->fatalityRate = $service->calcFatalityRate();

        $this->tests = $tests->pluck('totaltest', 'state');
        $this->positiveRate = $service->calcPositiveRate();


        return view('livewire.covid-dashboard-cases-state');
    }
}
