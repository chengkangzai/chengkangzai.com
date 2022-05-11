<?php

namespace App\Http\Livewire\CovidDashboard;

use App\Http\Services\Covid\Graph\CovidMalaysiaGraphService;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class Graph extends Component
{
    public string $filter = 'TWO_WEEK';

    public Collection $date;
    public Collection $confirmCase;
    public Collection $recoveredCase;
    public Collection $deathCase;
    public Collection $dodCase;
    public Collection $activeCase;
    public Collection $bidCase;

    public Collection $cat1;
    public Collection $cat2;
    public Collection $cat3;
    public Collection $cat4;
    public Collection $cat5;

    public Collection $cumRecoveredCase;
    public Collection $cumDeathCase;

    public function render(CovidMalaysiaGraphService $service): Factory|View|Application
    {
        $cases = $service->getCases($this->filter);
        $deaths = $service->getDeath($this->filter);
        $healthCareCategory = $service->getHealthCare($this->filter);

        $this->initCasesVariable($cases, $deaths);
        $this->initHealthCareVariable($healthCareCategory);

        $this->notifyChild();

        return view('livewire.covid-dashboard.graph');
    }

    public function notifyChild()
    {
        $this->dispatchBrowserEvent('CovidMalaysiaUpdate', [
            'date' => $this->date,
            'confirmCase' => $this->confirmCase,
            'recoveredCase' => $this->recoveredCase,
            'deathCase' => $this->deathCase,
            'bidCase' => $this->bidCase,
            'dodCase' => $this->dodCase,
            'activeCase' => $this->activeCase,
            'cat1' => $this->cat1,
            'cat2' => $this->cat2,
            'cat3' => $this->cat3,
            'cat4' => $this->cat4,
            'cat5' => $this->cat5,
            'cumRecoveredCase' => $this->cumRecoveredCase,
            'cumDeathCase' => $this->cumDeathCase,
        ]);
    }

    public function initHealthCareVariable(Collection $healthCareCategory): void
    {
        $this->cat1 = $healthCareCategory->pluck('cat1');
        $this->cat2 = $healthCareCategory->pluck('cat2');
        $this->cat3 = $healthCareCategory->pluck('cat3');
        $this->cat4 = $healthCareCategory->pluck('cat4');
        $this->cat5 = $healthCareCategory->pluck('cat5');
    }

    public function initCasesVariable(Collection $cases, Collection $deaths): void
    {
        $this->date = $cases->pluck('date')->map(fn ($date) => Carbon::parse($date)->toDateString());
        $this->confirmCase = $cases->pluck('cases_new');
        $this->recoveredCase = $cases->pluck('cases_recovered');
        $this->cumRecoveredCase = $cases->pluck('cases_recovered_cumulative');
        $this->deathCase = $deaths->pluck('deaths_new');
        $this->cumDeathCase = $deaths->pluck('deaths_new_cumulative');
        $this->bidCase = $deaths->pluck('deaths_bid');
        $this->dodCase = $deaths->pluck('deaths_bid_dod');
        $this->activeCase = $cases->pluck('activeCase');
    }
}
