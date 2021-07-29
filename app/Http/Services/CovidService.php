<?php


namespace App\Http\Services;


use App\Models\Covid\CasesMalaysia;
use App\Models\Covid\CasesState;
use App\Models\Covid\Cluster;
use App\Models\Covid\DeathsMalaysia;
use App\Models\Covid\DeathsState;
use App\Models\Covid\Hospital;
use App\Models\Covid\ICU;
use App\Models\Covid\PKRC;
use App\Models\Covid\Population;
use App\Models\Covid\TestMalaysia;
use Illuminate\Support\Collection;

class CovidService
{

    public function __construct()
    {
        $this->caseMalaysia = cache()->remember('caseMalaysia', 60, fn() => CasesMalaysia::latestOne()->get()->first());
        $this->deathMalaysia = cache()->remember('deathMalaysia', 60, fn() => DeathsMalaysia::latestOne()->get()->first());
        $this->caseState = cache()->remember('caseState', 60, fn() => CasesState::latestOne()->get(['state', 'cases_new', 'cases_cumulative', 'date']));
        $this->deathState = cache()->remember('deathState', 60, fn() => DeathsState::latestOne()->get(['state', 'deaths_new', 'deaths_commutative', 'date']));
        $this->population = cache()->remember('population', 60, fn() => Population::all(['state', 'pop']));
        $this->ICU = cache()->remember('ICU', 60, fn() => ICU::latestOne()->get(['date', 'state', 'icu_covid']));
        $this->hospital = cache()->remember('hospital', 60, fn() => Hospital::latestOne()->get(['date', 'state', 'hosp_covid']));
        $this->pkrc = cache()->remember('pkrc', 60, fn() => PKRC::latestOne()->get(['date', 'state', 'pkrc_covid']));
        $this->testedMalaysia = cache()->remember('testedMalaysia', 60, fn() => TestMalaysia::latestOne()->get());
        $this->cluster_count = cache()->remember('cluster_count', 60, fn() => Cluster::whereStatus('active')->count());
        $this->cluster = cache()->remember('cluster', 60, fn() => Cluster::orderByDesc('id')->first());
    }

    public function getDashboardValue(): Collection
    {
        $collect = collect();

        $collect->new_cases = $this->caseMalaysia->cases_new;
        $collect->new_cases_cum = $this->caseMalaysia->cases_cumulative;
        $collect->new_death = $this->deathMalaysia->deaths_new;
        $collect->new_death_cum = $this->deathMalaysia->deaths_new_cumulative;

        $collect->new_cases_state = $this->caseState->pluck('cases_new', 'state');
        $collect->new_cases_state_cum = $this->caseState->pluck('cases_cumulative', 'state');
        $collect->newDeath_state = $this->deathState->pluck('deaths_new', 'state');
        $collect->newDeath_state_cum = $this->deathState->pluck('deaths_commutative', 'state');

        $collect->ICU = $this->ICU->pluck('icu_covid', 'state');
        $collect->hospital = $this->hospital->pluck('hosp_covid', 'state');
        $collect->PKRC = $this->pkrc->pluck('pkrc_covid', 'state');

        $collect->active_cluster_count = $this->cluster_count;

        $collect->population_state = $this->population->pluck('pop', 'state');
        $collect->pop = $this->population->where('idxs', 0)->pluck('pop')->first();

        $collect->new_test = $this->testedMalaysia->pluck('trk-ag')->sum() + $this->testedMalaysia->pluck('pcr')->sum();

        $collect->updated_at = $this->generateUpdatedAt();
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

    private function generateUpdatedAt(): Collection
    {
        $collect = collect();
        $collect->caseMalaysia = $this->caseMalaysia->date;
        $collect->caseState = $this->caseState->first()->date;
        $collect->deathMalaysia = $this->deathMalaysia->date;
        $collect->deathState = $this->deathState->first()->date;
        $collect->ICU = $this->ICU->first()->date;
        $collect->tested = $this->testedMalaysia->first()->date;
        $collect->cluster = $this->cluster->created_at;
        return $collect;
    }
}
