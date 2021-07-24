<?php


namespace App\Http\Services;


use Http;
use Illuminate\Support\Collection;

class CovidService
{

    const url = [
        'CASES_MALAYSIA' => 'https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/cases_malaysia.csv',
        'CASES_STATE' => 'https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/cases_state.csv',
        'DEATH_MALAYSIA' => 'https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/deaths_malaysia.csv',
        'DEATH_STATE' => 'https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/cases_state.csv',
        'TEST_MALAYSIA' => 'https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/tests_malaysia.csv',
        'CLUSTER' => 'https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/clusters.csv',
        'HOSPITAL' => 'https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/hospital.csv',
        'ICU' => 'https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/icu.csv',
        'PKRC' => 'https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/pkrc.csv',
        'POPULATION' => 'https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/static/population.csv',
    ];

    public function getCasesMalaysia(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['CASES_MALAYSIA'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                return [
                    'date' => $dailyCase[0],
                    'cases_new' => (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1],
                    'cluster_import' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
                    'cluster_religious' => (!isset($dailyCase[3]) || $dailyCase[3] == '') ? 0 : $dailyCase[3],
                    'cluster_community' => (!isset($dailyCase[4]) || $dailyCase[4] == '') ? 0 : $dailyCase[4],
                    'cluster_highRisk' => (!isset($dailyCase[5]) || $dailyCase[5] == '') ? 0 : $dailyCase[5],
                    'cluster_education' => (!isset($dailyCase[6]) || $dailyCase[6] == '') ? 0 : $dailyCase[6],
                    'cluster_detentionCentre' => (!isset($dailyCase[7]) || $dailyCase[7] == '') ? 0 : $dailyCase[7],
                    'cluster_workplace' => (!isset($dailyCase[8]) || $dailyCase[8] == '') ? 0 : $dailyCase[8],
                ];
            });

    }

    public function getCasesState(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['CASES_STATE'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                return [
                    'date' => $dailyCase[0],
                    'state' => (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1],
                    'cases_new' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
                ];
            });
    }

    public function getDeathMalaysia()
    {
        return collect(explode(PHP_EOL, Http::get(self::url['DEATH_MALAYSIA'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                return [
                    'date' => $dailyCase[0],
                    'deaths_new' => (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1],
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
                ];
            });
    }

    public function getTestMalaysia()
    {
        return collect(explode(PHP_EOL, Http::get(self::url['TEST_MALAYSIA'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                return [
                    'date' => $dailyCase[0],
                    'rtk-ag' => (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1],
                    'pcr' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
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
                    'status' => (!isset($dailyCase[6]) || $dailyCase[6] == '') ? 0 : $dailyCase[6],
                    'cases_new' => (!isset($dailyCase[7]) || $dailyCase[7] == '') ? 0 : $dailyCase[7],
                    'cases_total' => (!isset($dailyCase[8]) || $dailyCase[8] == '') ? 0 : $dailyCase[8],
                    'cases_active' => (!isset($dailyCase[9]) || $dailyCase[9] == '') ? 0 : $dailyCase[9],
                    'tests' => (!isset($dailyCase[10]) || $dailyCase[10] == '') ? 0 : $dailyCase[10],
                    'icu' => (!isset($dailyCase[11]) || $dailyCase[11] == '') ? 0 : $dailyCase[11],
                    'deaths' => (!isset($dailyCase[12]) || $dailyCase[12] == '') ? 0 : $dailyCase[12],
                    'recovered' => (!isset($dailyCase[13]) || $dailyCase[13] == '') ? 0 : $dailyCase[13],
                ];
            })
            ->filter(function ($line) {
                return count($line) == 14; // Purge data that dont have proper formatting
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
                    'beds' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
                    'beds_noncrit' => (!isset($dailyCase[3]) || $dailyCase[3] == '') ? 0 : $dailyCase[3],
                    'admitted_pui' => (!isset($dailyCase[4]) || $dailyCase[4] == '') ? 0 : $dailyCase[4],
                    'admitted_covid' => (!isset($dailyCase[5]) || $dailyCase[5] == '') ? 0 : $dailyCase[5],
                    'admitted_total' => (!isset($dailyCase[6]) || $dailyCase[6] == '') ? 0 : $dailyCase[6],
                    'discharged_pui' => (!isset($dailyCase[7]) || $dailyCase[7] == '') ? 0 : $dailyCase[7],
                    'discharged_covid' => (!isset($dailyCase[8]) || $dailyCase[8] == '') ? 0 : $dailyCase[8],
                    'discharged_total' => (!isset($dailyCase[9]) || $dailyCase[9] == '') ? 0 : $dailyCase[9],
                    'hosp_covid' => (!isset($dailyCase[10]) || $dailyCase[10] == '') ? 0 : $dailyCase[10],
                    'hosp_pui' => (!isset($dailyCase[11]) || $dailyCase[11] == '') ? 0 : $dailyCase[11],
                    'hosp_noncovid' => (!isset($dailyCase[12]) || $dailyCase[12] == '') ? 0 : $dailyCase[12],
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
                    'bed_icu' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
                    'bed_icu_rep' => (!isset($dailyCase[3]) || $dailyCase[3] == '') ? 0 : $dailyCase[3],
                    'bed_icu_total' => (!isset($dailyCase[4]) || $dailyCase[4] == '') ? 0 : $dailyCase[4],
                    'bed_icu_covid' => (!isset($dailyCase[5]) || $dailyCase[5] == '') ? 0 : $dailyCase[5],
                    'vent' => (!isset($dailyCase[6]) || $dailyCase[6] == '') ? 0 : $dailyCase[6],
                    'vent_port' => (!isset($dailyCase[7]) || $dailyCase[7] == '') ? 0 : $dailyCase[7],
                    'icu_covid' => (!isset($dailyCase[8]) || $dailyCase[8] == '') ? 0 : $dailyCase[8],
                    'icu_pui' => (!isset($dailyCase[9]) || $dailyCase[9] == '') ? 0 : $dailyCase[9],
                    'icu_noncovid' => (!isset($dailyCase[10]) || $dailyCase[10] == '') ? 0 : $dailyCase[10],
                    'vent_covid' => (!isset($dailyCase[11]) || $dailyCase[11] == '') ? 0 : $dailyCase[11],
                    'vent_pui' => (!isset($dailyCase[12]) || $dailyCase[12] == '') ? 0 : $dailyCase[12],
                    'vent_noncovid' => (!isset($dailyCase[13]) || $dailyCase[13] == '') ? 0 : $dailyCase[13],
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
                    'beds' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
                    'admitted_pui' => (!isset($dailyCase[3]) || $dailyCase[3] == '') ? 0 : $dailyCase[3],
                    'admitted_covid' => (!isset($dailyCase[4]) || $dailyCase[4] == '') ? 0 : $dailyCase[4],
                    'admitted_total' => (!isset($dailyCase[5]) || $dailyCase[5] == '') ? 0 : $dailyCase[5],
                    'discharge_pui' => (!isset($dailyCase[6]) || $dailyCase[6] == '') ? 0 : $dailyCase[6],
                    'discharge_covid' => (!isset($dailyCase[7]) || $dailyCase[7] == '') ? 0 : $dailyCase[7],
                    'discharge_total' => (!isset($dailyCase[8]) || $dailyCase[8] == '') ? 0 : $dailyCase[8],
                    'pkrc_covid' => (!isset($dailyCase[9]) || $dailyCase[9] == '') ? 0 : $dailyCase[9],
                    'pkrc_pui' => (!isset($dailyCase[10]) || $dailyCase[10] == '') ? 0 : $dailyCase[10],
                    'pkrc_noncovid' => (!isset($dailyCase[11]) || $dailyCase[11] == '') ? 0 : $dailyCase[11],
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
                    'idxs' => (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1],
                    'pop' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
                    'pop_18' => (!isset($dailyCase[3]) || $dailyCase[3] == '') ? 0 : $dailyCase[3],
                    'pop_60' => (!isset($dailyCase[4]) || $dailyCase[4] == '') ? 0 : $dailyCase[4],
                ];
            });

    }


}
