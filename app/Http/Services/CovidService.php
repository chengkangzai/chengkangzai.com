<?php


namespace App\Http\Services;


use App\Models\Covid\CasesMalaysia;
use App\Models\Covid\CasesState;
use App\Models\Covid\Cluster;
use App\Models\Covid\DeathsMalaysia;
use App\Models\Covid\DeathsState;
use App\Models\Covid\Population;
use App\Models\Covid\TestMalaysia;
use App\Models\Covid\VaxMalaysia;
use App\Models\Covid\VaxRegMalaysia;
use App\Models\Covid\VaxRegState;
use App\Models\Covid\VaxState;
use Illuminate\Support\Collection;

class CovidService
{

    public function __construct()
    {
        $secondOfCache = 60;
        $this->caseMalaysia = cache()->remember('caseMalaysia', $secondOfCache, fn() => CasesMalaysia::latestOne()->get()->first());
        $this->deathMalaysia = cache()->remember('deathMalaysia', $secondOfCache, fn() => DeathsMalaysia::latestOne()->get()->first());
        $this->population = cache()->remember('population', $secondOfCache, fn() => Population::all(['state', 'pop', 'pop_18']));
        $this->testedMalaysia = cache()->remember('testedMalaysia', $secondOfCache, fn() => TestMalaysia::latestOne()->get());
        $this->cluster_count = cache()->remember('cluster_count', $secondOfCache, fn() => Cluster::whereStatus('active')->count());
        $this->cluster = cache()->remember('cluster', $secondOfCache, fn() => Cluster::orderByDesc('id')->first());
        $this->vaxMalaysia = cache()->remember('vaxMalaysia', $secondOfCache, fn() => VaxMalaysia::latestOne()->get());
        $this->vaxState = cache()->remember('vaxState', $secondOfCache, fn() => VaxState::latestOne()->get());
        $this->vaxRegState = cache()->remember('vaxRegState', $secondOfCache, fn() => VaxRegState::latestOne()->get());
        $this->vaxRegMalaysia = cache()->remember('vaxRegMalaysia', $secondOfCache, fn() => VaxRegMalaysia::latestOne()->get());
    }

    public function getDashboardValue(): Collection
    {
        $collect = collect();

        $collect->new_cases = $this->caseMalaysia->cases_new;
        $collect->new_cases_cum = $this->caseMalaysia->cases_cumulative;
        $collect->new_death = $this->deathMalaysia->deaths_new;
        $collect->new_death_cum = $this->deathMalaysia->deaths_new_cumulative;

        $collect->active_cluster_count = $this->cluster_count;

        $collect->population_state = $this->population->pluck('pop_18', 'state');
        $collect->pop = $this->population->where('idxs', 0)->pluck('pop')->first();
        $collect->pop_18 = $this->population->where('idxs', 0)->pluck('pop_18')->first();

        $collect->new_test = $this->getTotalTest();
        $collect->positive_rate = $this->getPositiveRate();

        $collect->vax_1st_daily = $this->vaxMalaysia->pluck('dose1_daily')->sum();
        $collect->vax_2nd_daily = $this->vaxMalaysia->pluck('dose2_daily')->sum();

        $collect->vax_1st_cumulative = $this->vaxMalaysia->pluck('dose1_cumul')->sum();
        $collect->vax_2nd_cumulative = $this->vaxMalaysia->pluck('dose2_cumul')->sum();
        $collect->vax_total_cumulative = $this->vaxMalaysia->pluck('total_cumul')->sum();

        $collect->vax_state_1st = $this->vaxState->pluck('dose1_daily', 'state');
        $collect->vax_state_1st_cum = $this->vaxState->pluck('dose1_cumul', 'state');
        $collect->vax_state_2st = $this->vaxState->pluck('dose2_daily', 'state');
        $collect->vax_state_2st_cum = $this->vaxState->pluck('dose2_cumul', 'state');
        $collect->vax_state_cum = $this->vaxState->pluck('total_cumul', 'state');

        $collect->vax_reg_malaysia = $this->vaxRegMalaysia->first()->total;
        $collect->percentage_of_reg_malaysia = round(($this->vaxRegMalaysia->first()->total / $collect->pop) * 100);
        $collect->vax_reg_state = $this->vaxRegState->pluck('total', 'state');

        $collect->updated_at = $this->generateUpdatedAt();
        return $collect;
    }


    private function generateUpdatedAt(): Collection
    {
        $collect = collect();
        $collect->caseMalaysia = $this->caseMalaysia->date;
        $collect->deathMalaysia = $this->deathMalaysia->date;
        $collect->tested = $this->testedMalaysia->first()->date;
        $collect->cluster = $this->cluster->created_at;
        $collect->vaxState = $this->vaxState->first()->date;
        $collect->vaxMalaysia = $this->vaxMalaysia->first()->date;
        $collect->vaxReg = $this->vaxRegMalaysia->first()->date;
        return $collect;
    }

    private function getPositiveRate()
    {
        $dateOfTest = $this->testedMalaysia->first()->date;
        $dateOfCase = $this->caseMalaysia->date;

        $collect = collect();
        $collect->rate = 0;

        if ($dateOfCase == $dateOfTest) {
            $collect->rate = ($this->caseMalaysia->cases_new / $this->getTotalTest()) * 100;
            $collect->date = $dateOfCase;
        }

        if ($dateOfTest < $dateOfCase) {
            $testMalaysia = cache()->remember('covid.positive.testMalaysia',60,fn()=>TestMalaysia::where('date', $dateOfTest)->orderByDesc('id')->first());
            $totalTest = $testMalaysia->pcr + $testMalaysia->rtk_ag;
            $collect->rate = ($this->caseMalaysia->cases_new / $totalTest) * 100;
            $collect->date = $dateOfTest;
        }

        if ($dateOfCase < $dateOfTest) {
            $caseMalaysia = cache()->remember('covid.positive.caseMalaysia', 60, fn() => CasesMalaysia::where('date', $dateOfCase)->orderByDesc('id')->first());
            $collect->rate = ($caseMalaysia->cases_new / $this->getTotalTest()) * 100;
            $collect->date = $dateOfCase;
        }

        return $collect;
    }

    private function getTotalTest()
    {
        return $this->testedMalaysia->pluck('rtk_ag')->first() + $this->testedMalaysia->pluck('pcr')->first();
    }
}
