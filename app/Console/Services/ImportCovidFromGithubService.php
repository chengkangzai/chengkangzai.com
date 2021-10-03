<?php


namespace App\Console\Services;


use App\Models\Covid\CasesState;
use App\Models\Covid\DeathsState;
use Http;
use Illuminate\Support\Collection;

class ImportCovidFromGithubService
{
    const baseUrl = 'https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main';

    const url = [
        'CASES_MALAYSIA' => self::baseUrl . '/epidemic/cases_malaysia.csv',
        'CASES_STATE' => self::baseUrl . '/epidemic/cases_state.csv',
        'DEATH_MALAYSIA' => self::baseUrl . '/epidemic/deaths_malaysia.csv',
        'DEATH_STATE' => self::baseUrl . '/epidemic/deaths_state.csv',
        'TEST_MALAYSIA' => self::baseUrl . '/epidemic/tests_malaysia.csv',
        'TEST_STATE' => self::baseUrl . '/epidemic/tests_state.csv',
        'CLUSTER' => self::baseUrl . '/epidemic/clusters.csv',
        'HOSPITAL' => self::baseUrl . '/epidemic/hospital.csv',
        'ICU' => self::baseUrl . '/epidemic/icu.csv',
        'PKRC' => self::baseUrl . '/epidemic/pkrc.csv',
        'POPULATION' => self::baseUrl . '/static/population.csv',
    ];


    public function getCasesMalaysia(): Collection
    {
        global $cumCasesMalaysia;
        global $cumRecoveredMalaysia;
        return collect(explode(PHP_EOL, Http::get(self::url['CASES_MALAYSIA'])))
            ->slice(1, -1)
            ->map(function ($record) use (&$cumCasesMalaysia, &$cumRecoveredMalaysia) {
                $dailyCase = str_getcsv(str_replace("\"", "", $record));
                $new_cases = self::takeIndex($dailyCase, 1);
                $cumCasesMalaysia = $cumCasesMalaysia + $new_cases;
                $new_recovered = self::takeIndex($dailyCase, 3);
                $cumRecoveredMalaysia = $new_recovered + $cumRecoveredMalaysia;
                $i = 0;
                return [
                    'date' => self::takeIndex($dailyCase, $i++),
                    'cases_new' => self::takeIndex($dailyCase, $i++),
                    'cases_import' => self::takeIndex($dailyCase, $i++),
                    'cases_recovered' => self::takeIndex($dailyCase, $i++),
                    'cases_active' => self::takeIndex($dailyCase, $i++),
                    'cases_cluster' => self::takeIndex($dailyCase, $i++),
                    'cases_pvax' => self::takeIndex($dailyCase, $i++),
                    'cases_fvax' => self::takeIndex($dailyCase, $i++),
                    'cases_child' => self::takeIndex($dailyCase, $i++),
                    'cases_adolescent' => self::takeIndex($dailyCase, $i++),
                    'cases_adult' => self::takeIndex($dailyCase, $i++),
                    'cases_elderly' => self::takeIndex($dailyCase, $i++),
                    'cluster_import' => self::takeIndex($dailyCase, $i++),
                    'cluster_religious' => self::takeIndex($dailyCase, $i++),
                    'cluster_community' => self::takeIndex($dailyCase, $i++),
                    'cluster_highRisk' => self::takeIndex($dailyCase, $i++),
                    'cluster_education' => self::takeIndex($dailyCase, $i++),
                    'cluster_detentionCentre' => self::takeIndex($dailyCase, $i++),
                    'cluster_workplace' => self::takeIndex($dailyCase, $i++),
                    'cases_cumulative' => $cumCasesMalaysia,
                    'cases_recovered_cumulative' => $cumRecoveredMalaysia,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });

    }

    public function getCasesState(): Collection
    {
        return $this->calcCumulativeCasesState(
            collect(explode(PHP_EOL, Http::get(self::url['CASES_STATE'])))
                ->slice(1, -1)
                ->map(function ($record) {
                    $dailyCase = explode(',', $record);
                    $collect = new CasesState();
                    $i = 0;
                    $collect->date = self::takeIndex($dailyCase, $i++);
                    $collect->state = self::takeIndex($dailyCase, $i++);
                    $collect->cases_new = self::takeIndex($dailyCase, $i++);
                    $collect->cases_import = self::takeIndex($dailyCase, $i++);
                    $collect->cases_recovered = self::takeIndex($dailyCase, $i++);
                    $collect->cases_active = self::takeIndex($dailyCase, $i++);
                    $collect->cases_cluster = self::takeIndex($dailyCase, $i++);
                    $collect->cases_pvax = self::takeIndex($dailyCase, $i++);
                    $collect->cases_fvax = self::takeIndex($dailyCase, $i++);
                    $collect->cases_child = self::takeIndex($dailyCase, $i++);
                    $collect->cases_adolescent = self::takeIndex($dailyCase, $i++);
                    $collect->cases_adult = self::takeIndex($dailyCase, $i++);
                    $collect->cases_elderly = self::takeIndex($dailyCase, $i++);

                    $collect->cases_cumulative = 0;
                    $collect->cases_recovered_cumulative = 0;
                    return $collect;
                })
        );
    }

    public function calcCumulativeCasesState(Collection $collection): Collection
    {
        foreach (CasesState::STATE as $state) {
            $cumCase = 0;
            $cumRecovered = 0;
            $cases = $collection->filter(fn($case) => $case->state == $state);
            foreach ($cases as $case) {
                $cumCase = $cumCase + $case->cases_new;
                $case->cases_cumulative = $cumCase;

                $cumRecovered = $cumRecovered + $case->cases_recovered;
                $case->cases_recovered_cumulative = $cumRecovered;
            }
        }
        return $collection;
    }

    public function getDeathMalaysia(): Collection
    {
        global $cumDeathMalaysia;
        global $cumBidMalaysia;
        global $cumBidDodMalaysia;
        return collect(explode(PHP_EOL, Http::get(self::url['DEATH_MALAYSIA'])))
            ->slice(1, -1)
            ->map(function ($record) use ($cumBidDodMalaysia, &$cumDeathMalaysia, &$cumBidMalaysia) {
                $dailyCase = explode(',', $record);
                $newDeath = self::takeIndex($dailyCase, 1);
                $bidDeath = self::takeIndex($dailyCase, 2);
                $bidDodDeath = self::takeIndex($dailyCase, 3);
                $cumDeathMalaysia = $cumDeathMalaysia + $newDeath;
                $cumBidMalaysia = $cumBidMalaysia + $bidDeath;
                $cumBidDodMalaysia = $cumBidDodMalaysia + $bidDodDeath;
                return [
                    'date' => $dailyCase[0],
                    'deaths_new' => $newDeath,
                    'deaths_bid' => $bidDeath,
                    'deaths_bid_dod' => $bidDodDeath,
                    'deaths_new_cumulative' => $cumDeathMalaysia,
                    'deaths_bid_cumulative' => $cumBidMalaysia,
                    'deaths_bid_dod_cumulative' => $cumBidDodMalaysia,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getDeathState(): Collection
    {
        return $this->calcCumulativeDeathState(
            collect(explode(PHP_EOL, Http::get(self::url['DEATH_STATE'])))
                ->slice(1, -1)
                ->map(function ($record) {
                    $dailyCase = explode(',', $record);
                    $i = 0;

                    $collect = new DeathsState();
                    $collect->date = self::takeIndex($dailyCase, $i++);
                    $collect->state = self::takeIndex($dailyCase, $i++);
                    $collect->deaths_new = self::takeIndex($dailyCase, $i++);
                    $collect->deaths_bid = self::takeIndex($dailyCase, $i++);
                    $collect->deaths_bid_dod = self::takeIndex($dailyCase, $i++);
                    return $collect;
                })
        );
    }

    public function calcCumulativeDeathState(Collection $collection): Collection
    {
        foreach (DeathsState::STATE as $state) {
            $cum = 0;
            $cumBid = 0;
            $cumBidDod = 0;
            $cases = $collection->filter(fn($death) => $death->state == $state);
            foreach ($cases as $case) {
                $cum = $cum + $case->deaths_new;
                $case->deaths_commutative = $cum;

                $cumBid = $cumBid + $case->deaths_bid;
                $case->deaths_bid_cumulative = $cumBid;

                $cumBidDod = $cumBidDod + $case->deaths_bid_dod;
                $case->deaths_bid_dod_cumulative = $cumBidDod;
            }
        }
        return $collection;
    }

    public function getTestMalaysia(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['TEST_MALAYSIA'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                $i = 0;
                return [
                    'date' => self::takeIndex($dailyCase, $i++),
                    'rtk_ag' => self::takeIndex($dailyCase, $i++),
                    'pcr' => self::takeIndex($dailyCase, $i++),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getTestState(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['TEST_STATE'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                $i = 0;
                return [
                    'date' => self::takeIndex($dailyCase, $i++),
                    'state' => self::takeIndex($dailyCase, $i++),
                    'rtk_ag' => self::takeIndex($dailyCase, $i++),
                    'pcr' => self::takeIndex($dailyCase, $i++),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getCluster(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['CLUSTER'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = str_getcsv($record);
                $i = 0;
                return [
                    'cluster' => self::takeIndex($dailyCase, $i++),
                    'state' => self::takeIndex($dailyCase, $i++),
                    'district' => self::takeIndex($dailyCase, $i++),
                    'date_announced' => self::takeIndex($dailyCase, $i++, 'string'),
                    'date_last_onset' => self::takeIndex($dailyCase, $i++, 'string'),
                    'category' => self::takeIndex($dailyCase, $i++),
                    'status' => self::takeIndex($dailyCase, $i++),
                    'cases_new' => self::takeIndex($dailyCase, $i++),
                    'cases_total' => self::takeIndex($dailyCase, $i++),
                    'cases_active' => self::takeIndex($dailyCase, $i++),
                    'tests' => self::takeIndex($dailyCase, $i++),
                    'icu' => self::takeIndex($dailyCase, $i++),
                    'deaths' => self::takeIndex($dailyCase, $i++),
                    'recovered' => self::takeIndex($dailyCase, $i++),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            })
            ->filter(function ($line) {
                return count($line) == 16; // Purge data that dont have proper formatting
            })
            ->filter(function ($line) {
                return explode(' ', $line['cluster'])[0] == 'Kluster'; //Get Only With Prefix Cluster
            });
    }

    public function getHospitals(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['HOSPITAL'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                $i = 0;
                return [
                    'date' => self::takeIndex($dailyCase, $i++),
                    'state' => self::takeIndex($dailyCase, $i++),
                    'beds' => self::takeIndex($dailyCase, $i++),
                    'beds_covid' => self::takeIndex($dailyCase, $i++),
                    'beds_noncrit' => self::takeIndex($dailyCase, $i++),
                    'admitted_pui' => self::takeIndex($dailyCase, $i++),
                    'admitted_covid' => self::takeIndex($dailyCase, $i++),
                    'admitted_total' => self::takeIndex($dailyCase, $i++),
                    'discharged_pui' => self::takeIndex($dailyCase, $i++),
                    'discharged_covid' => self::takeIndex($dailyCase, $i++),
                    'discharged_total' => self::takeIndex($dailyCase, $i++),
                    'hosp_covid' => self::takeIndex($dailyCase, $i++),
                    'hosp_pui' => self::takeIndex($dailyCase, $i++),
                    'hosp_noncovid' => self::takeIndex($dailyCase, $i++),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getICU(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['ICU'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                $i = 0;
                return [
                    'date' => self::takeIndex($dailyCase, $i++),
                    'state' => self::takeIndex($dailyCase, $i++),
                    'bed_icu' => self::takeIndex($dailyCase, $i++),
                    'bed_icu_rep' => self::takeIndex($dailyCase, $i++),
                    'bed_icu_total' => self::takeIndex($dailyCase, $i++),
                    'bed_icu_covid' => self::takeIndex($dailyCase, $i++),
                    'vent' => self::takeIndex($dailyCase, $i++),
                    'vent_port' => self::takeIndex($dailyCase, $i++),
                    'icu_covid' => self::takeIndex($dailyCase, $i++),
                    'icu_pui' => self::takeIndex($dailyCase, $i++),
                    'icu_noncovid' => self::takeIndex($dailyCase, $i++),
                    'vent_covid' => self::takeIndex($dailyCase, $i++),
                    'vent_pui' => self::takeIndex($dailyCase, $i++),
                    'vent_noncovid' => self::takeIndex($dailyCase, $i++),
                    'vent_used' => self::takeIndex($dailyCase, $i++),
                    'vent_port_used' => self::takeIndex($dailyCase, $i++),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getPKRC(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['PKRC'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                $i = 0;
                return [
                    'date' => self::takeIndex($dailyCase, $i++),
                    'state' => self::takeIndex($dailyCase, $i++),
                    'beds' => self::takeIndex($dailyCase, $i++),
                    'admitted_pui' => self::takeIndex($dailyCase, $i++),
                    'admitted_covid' => self::takeIndex($dailyCase, $i++),
                    'admitted_total' => self::takeIndex($dailyCase, $i++),
                    'discharge_pui' => self::takeIndex($dailyCase, $i++),
                    'discharge_covid' => self::takeIndex($dailyCase, $i++),
                    'discharge_total' => self::takeIndex($dailyCase, $i++),
                    'pkrc_covid' => self::takeIndex($dailyCase, $i++),
                    'pkrc_pui' => self::takeIndex($dailyCase, $i++),
                    'pkrc_noncovid' => self::takeIndex($dailyCase, $i++),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getMalaysiaPopulation(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['POPULATION'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                $i = 0;
                return [
                    'state' => self::takeIndex($dailyCase, $i++),
                    'idxs' => self::takeIndex($dailyCase, $i++),
                    'pop' => self::takeIndex($dailyCase, $i++),
                    'pop_18' => self::takeIndex($dailyCase, $i++),
                    'pop_60' => self::takeIndex($dailyCase, $i++),
                    'pop_12' => self::takeIndex($dailyCase, $i++),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    private static function takeIndex(array $array, int $index, $mode = 'number'): mixed
    {
        $defaultReturn = $mode == 'string' ? '' : 0;
        return (!isset($array[$index]) || $array[$index] == '') ? $defaultReturn : $array[$index];
    }
}
