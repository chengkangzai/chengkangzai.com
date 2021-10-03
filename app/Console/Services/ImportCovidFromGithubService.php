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
                    $collect = new DeathsState();

                    $collect->date = $dailyCase[0];
                    $collect->state = self::takeIndex($dailyCase, 1);
                    $collect->deaths_new = self::takeIndex($dailyCase, 2);
                    $collect->deaths_bid = self::takeIndex($dailyCase, 3);
                    $collect->deaths_bid_dod = self::takeIndex($dailyCase, 4);
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
                return [
                    'date' => $dailyCase[0],
                    'rtk_ag' => self::takeIndex($dailyCase, 1),
                    'pcr' => self::takeIndex($dailyCase, 2),
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
                return [
                    'date' => $dailyCase[0],
                    'state' => self::takeIndex($dailyCase, 1),
                    'rtk_ag' => self::takeIndex($dailyCase, 2),
                    'pcr' => self::takeIndex($dailyCase, 3),
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
                return [
                    'cluster' => $dailyCase[0],
                    'state' => $dailyCase[1],
                    'district' => $dailyCase[2] ?? '',
                    'date_announced' => $dailyCase[3] ?? null,
                    'date_last_onset' => $dailyCase[4] ?? null,
                    'category' => $dailyCase[5] ?? '',
                    'status' => $dailyCase[6],
                    'cases_new' => $dailyCase[7],
                    'cases_total' => $dailyCase[8],
                    'cases_active' => $dailyCase[9],
                    'tests' => $dailyCase[10],
                    'icu' => $dailyCase[11],
                    'deaths' => $dailyCase[12],
                    'recovered' => $dailyCase[13],
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
                return [
                    'date' => $dailyCase[0],
                    'state' => $dailyCase[1],
                    'beds' => $dailyCase[2],
                    'beds_covid' => $dailyCase[3],
                    'beds_noncrit' => $dailyCase[4],
                    'admitted_pui' => $dailyCase[5],
                    'admitted_covid' => $dailyCase[6],
                    'admitted_total' => $dailyCase[7],
                    'discharged_pui' => $dailyCase[8],
                    'discharged_covid' => $dailyCase[9],
                    'discharged_total' => $dailyCase[10],
                    'hosp_covid' => $dailyCase[11],
                    'hosp_pui' => $dailyCase[12],
                    'hosp_noncovid' => $dailyCase[13],
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
                return [
                    'date' => $dailyCase[0],
                    'state' => $dailyCase[1],
                    'bed_icu' => $dailyCase[2],
                    'bed_icu_rep' => $dailyCase[3],
                    'bed_icu_total' => $dailyCase[4],
                    'bed_icu_covid' => $dailyCase[5],
                    'vent' => $dailyCase[6],
                    'vent_port' => $dailyCase[7],
                    'icu_covid' => $dailyCase[8],
                    'icu_pui' => $dailyCase[9],
                    'icu_noncovid' => $dailyCase[10],
                    'vent_covid' => $dailyCase[11],
                    'vent_pui' => $dailyCase[12],
                    'vent_noncovid' => $dailyCase[13],
                    'vent_used' => $dailyCase[14],
                    'vent_port_used' => $dailyCase[15],
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
                return [
                    'date' => $dailyCase[0],
                    'state' => $dailyCase[1],
                    'beds' => $dailyCase[2],
                    'admitted_pui' => $dailyCase[3],
                    'admitted_covid' => $dailyCase[4],
                    'admitted_total' => $dailyCase[5],
                    'discharge_pui' => $dailyCase[6],
                    'discharge_covid' => $dailyCase[7],
                    'discharge_total' => $dailyCase[8],
                    'pkrc_covid' => $dailyCase[9],
                    'pkrc_pui' => $dailyCase[10],
                    'pkrc_noncovid' => $dailyCase[11],
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
                return [
                    'state' => $dailyCase[0],
                    'idxs' => $dailyCase[1],
                    'pop' => $dailyCase[2],
                    'pop_18' => $dailyCase[3],
                    'pop_60' => $dailyCase[4],
                    'pop_12' => $dailyCase[5],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    private static function takeIndex(array $array, int $index): mixed
    {
        return (!isset($array[$index]) || $array[$index] == '') ? 0 : $array[$index];
    }
}
