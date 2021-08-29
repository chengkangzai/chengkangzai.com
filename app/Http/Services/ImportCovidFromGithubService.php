<?php


namespace App\Http\Services;


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
        'CLUSTER' => self::baseUrl . '/epidemic/clusters.csv',
        'HOSPITAL' => self::baseUrl . '/epidemic/hospital.csv',
        'ICU' => self::baseUrl . '/epidemic/icu.csv',
        'PKRC' => self::baseUrl . '/epidemic/pkrc.csv',
        'POPULATION' => self::baseUrl . '/static/population.csv',
    ];

    public function __construct()
    {
        $this->temp = 0;
    }

    public function getCasesMalaysia(): Collection
    {
        global $cumCasesMalaysia;
        return collect(explode(PHP_EOL, Http::get(self::url['CASES_MALAYSIA'])))
            ->slice(1, -1)
            ->map(function ($record) use (&$cumCasesMalaysia) {
                $dailyCase = str_getcsv(str_replace("\"", "", $record));
                $new_cases = (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1];
                $cumCasesMalaysia = $cumCasesMalaysia + $new_cases;
                return [
                    'date' => $dailyCase[0],
                    'cases_new' => $new_cases,
                    'cases_import' => $dailyCase[2] ?? 0,
                    'cases_recovered' => $dailyCase[3] ?? 0,
                    'cluster_import' => (!isset($dailyCase[4]) || $dailyCase[4] == '') ? 0 : $dailyCase[4],
                    'cluster_religious' => (!isset($dailyCase[5]) || $dailyCase[5] == '') ? 0 : $dailyCase[5],
                    'cluster_community' => (!isset($dailyCase[6]) || $dailyCase[6] == '') ? 0 : $dailyCase[6],
                    'cluster_highRisk' => (!isset($dailyCase[7]) || $dailyCase[7] == '') ? 0 : $dailyCase[7],
                    'cluster_education' => (!isset($dailyCase[8]) || $dailyCase[8] == '') ? 0 : $dailyCase[8],
                    'cluster_detentionCentre' => (!isset($dailyCase[9]) || $dailyCase[9] == '') ? 0 : $dailyCase[9],
                    'cluster_workplace' => (!isset($dailyCase[10]) || $dailyCase[10] == '') ? 0 : $dailyCase[10],
                    'cases_cumulative' => $cumCasesMalaysia,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });

    }

    public function getCasesState(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['CASES_STATE'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                $state = (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1];
                $new_cases = (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2];
                $cases_import = (!isset($dailyCase[3]) || $dailyCase[3] == '') ? 0 : $dailyCase[3];
                $cases_recovered = (!isset($dailyCase[4]) || $dailyCase[4] == '') ? 0 : $dailyCase[4];
                return [
                    'date' => $dailyCase[0],
                    'state' => $state,
                    'cases_new' => $new_cases,
                    'cases_import' => $cases_import,
                    'cases_recovered' => $cases_recovered,
                    'cases_cumulative' => 0,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getDeathMalaysia(): Collection
    {
        global $cumDeathMalaysia;
        return collect(explode(PHP_EOL, Http::get(self::url['DEATH_MALAYSIA'])))
            ->slice(1, -1)
            ->map(function ($record) use (&$cumDeathMalaysia) {
                $dailyCase = explode(',', $record);
                $newDeath = (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1];
                $bidDeath = (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2];
                $cumDeathMalaysia = $cumDeathMalaysia + $newDeath;
                return [
                    'date' => $dailyCase[0],
                    'deaths_new' => $newDeath,
                    'deaths_bid' => $bidDeath,
                    'deaths_new_cumulative' => $cumDeathMalaysia,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getDeathState(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['DEATH_STATE'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                return [
                    'date' => $dailyCase[0],
                    'state' => (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1],
                    'deaths_new' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
                    'deaths_bid' => (!isset($dailyCase[3]) || $dailyCase[3] == '') ? 0 : $dailyCase[3],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getTestMalaysia(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['TEST_MALAYSIA'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                return [
                    'date' => $dailyCase[0],
                    'rtk_ag' => (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1],
                    'pcr' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
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
                    'district' => $dailyCase[2] ?? 'null',
                    'date_announced' => $dailyCase[3] ?? null,
                    'date_last_onset' => $dailyCase[4] ?? null,
                    'category' => $dailyCase[5] ?? 'null',
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
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }


    public function updateCumulativeCasesState()
    {
        $totalCase = CasesState::all();

        foreach (CasesState::STATE as $state) {
            $cum = 0;
            $cases = $totalCase->filter(fn($case) => $case->state == $state);
            foreach ($cases as $case) {
                $cum = $cum + $case->cases_new;
                $case->cases_cumulative = $cum;
                $case->save();
            }
        }
    }

    public function updateCumulativeDeathState()
    {
        $totalDeath = DeathsState::all();

        foreach (DeathsState::STATE as $state) {
            $cum = 0;
            $cases = $totalDeath->filter(fn($death) => $death->state == $state);
            foreach ($cases as $case) {
                $cum = $cum + $case->deaths_new;
                $case->deaths_commutative = $cum;
                $case->push();
            }
        }
    }
}
