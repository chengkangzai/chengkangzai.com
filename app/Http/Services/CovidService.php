<?php


namespace App\Http\Services;


use App\Models\Covid\CasesMalaysia;
use App\Models\Covid\CasesState;
use App\Models\Covid\DeathsMalaysia;
use App\Models\Covid\DeathsState;
use App\Models\Covid\Hospital;
use App\Models\Covid\ICU;
use App\Models\Covid\PKRC;
use App\Models\Covid\Population;
use Illuminate\Support\Collection;

class CovidService
{

    public function __construct()
    {
        $this->caseMalaysia = CasesMalaysia::latestOne()->get()->first();
        $this->deathMalaysia = DeathsMalaysia::latestOne()->get()->first();
        $this->caseState = CasesState::latestOne()->get(['state', 'cases_new', 'cases_cumulative']);
        $this->deathState = DeathsState::latestOne()->get(['state', 'deaths_new', 'deaths_commutative']);
        $this->population = Population::all(['state', 'pop']);
        $this->ICU = ICU::latestOne()->get();
        $this->hospital = Hospital::latestOne()->get()->dd();
        $this->pkrc = PKRC::latestOne()->get();
    }

    public function getDashboardValue(): Collection
    {
        $collect = collect();

        $collect->new_cases = $this->caseMalaysia->cases_new;
        $collect->new_cases_cum = $this->caseMalaysia->cases_cumulative;
        $collect->new_cases_updated_at = $this->caseMalaysia->date;
        $collect->new_death = $this->deathMalaysia->deaths_new;
        $collect->new_death_cum = $this->deathMalaysia->deaths_new_cumulative;
        $collect->new_death_updated_at = $this->deathMalaysia->date;

//        $collect->active_case = $this->activeCase();
//        $collect->recovered_case = $this->recoveredCase();
//        $collect->in_treatment = $this->inTreatment();
        $collect->icu_malaysia = $this->ICU->pluck('icu_covid', 'state')->sum();
        $collect->ventilator_malaysia = $this->ICU->pluck('vent_covid')->sum();
        $collect->icu_malaysia_updated_at = $this->ICU->pluck('date')->first();

        $collect->new_cases_state = $this->caseState->pluck('cases_new', 'state');
        $collect->new_cases_state_cum = $this->caseState->pluck('cases_cumulative', 'state');
        $collect->newDeath_state = $this->deathState->pluck('deaths_new', 'state');
        $collect->newDeath_state_cum = $this->deathState->pluck('deaths_commutative', 'state');

//        $collect->icu_covid;


        $collect->population_state = $this->population->pluck('pop', 'state');
        $collect->pop = $this->population->where('idxs', 0)->pluck('pop')->first();

        return $collect;
    }

    private function activeCase()
    {
        //Need to find those are not identify in cluster
//        $clusterCount = Cluster::select('cases_active')->where('status', 'active')->get()->pluck('cases_active')->sum();
//        $hospitalCount = Hospital::LatestOne()->select('hosp_covid')->get()->pluck('hosp_covid')->sum();
//        $pkrcCount = PKRC::LatestOne()->get()->map(fn($record) => $record->pkrc_covid + $record->pkrc_pui)->sum();
//        $icuCount = $this->ICU->map(fn($record) => $record->icu_covid + $record->vent_covid)->sum();
//        return $clusterCount + $hospitalCount + $pkrcCount + $icuCount;
    }

    private function recoveredCase(): int
    {
        return 0; //TODO
    }

    private function inTreatment(): int
    {
        return 0; //TODO
    }


}
