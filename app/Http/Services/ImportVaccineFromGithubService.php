<?php


namespace App\Http\Services;


use Http;
use Illuminate\Support\Collection;

class ImportVaccineFromGithubService
{
    const baseUrl = 'https://raw.githubusercontent.com/CITF-Malaysia/citf-public/main';

    const url = [
        'VAX_MALAYSIA' => self::baseUrl . '/vaccination/vax_malaysia.csv',
        'VAX_STATE' => self::baseUrl . '/vaccination/vax_state.csv',
        'VAX_REG_MALAYSIA' => self::baseUrl . '/registration/vaxreg_malaysia.csv',
        'VAX_REG_STATE' => self::baseUrl . '/registration/vaxreg_state.csv',
    ];

    public function getVaxMalaysia(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['VAX_MALAYSIA'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = str_getcsv($record);
                return [
                    'date' => $dailyCase[0],
                    'daily_partial' => (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1], //daily_partial
                    'daily_full' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2], //daily_full
                    'daily' => (!isset($dailyCase[3]) || $dailyCase[3] == '') ? 0 : $dailyCase[3], //daily
                    'daily_partial_child' => (!isset($dailyCase[4]) || $dailyCase[4] == '') ? 0 : $dailyCase[4],
                    'daily_full_child' => (!isset($dailyCase[5]) || $dailyCase[5] == '') ? 0 : $dailyCase[5],
                    'cumul_partial' => (!isset($dailyCase[6]) || $dailyCase[6] == '') ? 0 : $dailyCase[6],
                    'cumul_full' => (!isset($dailyCase[7]) || $dailyCase[7] == '') ? 0 : $dailyCase[7],
                    'cumul' => (!isset($dailyCase[8]) || $dailyCase[8] == '') ? 0 : $dailyCase[8],
                    'cumul_partial_child' => (!isset($dailyCase[9]) || $dailyCase[9] == '') ? 0 : $dailyCase[9],
                    'cumul_full_child' => (!isset($dailyCase[10]) || $dailyCase[10] == '') ? 0 : $dailyCase[10],
                    'pfizer1' => (!isset($dailyCase[11]) || $dailyCase[11] == '') ? 0 : $dailyCase[11],
                    'pfizer2' => (!isset($dailyCase[12]) || $dailyCase[12] == '') ? 0 : $dailyCase[12],
                    'sinovac1' => (!isset($dailyCase[13]) || $dailyCase[13] == '') ? 0 : $dailyCase[13],
                    'sinovac2' => (!isset($dailyCase[14]) || $dailyCase[14] == '') ? 0 : $dailyCase[14],
                    'astra1' => (!isset($dailyCase[15]) || $dailyCase[15] == '') ? 0 : $dailyCase[15],
                    'astra2' => (!isset($dailyCase[16]) || $dailyCase[16] == '') ? 0 : $dailyCase[16],
                    'cansino' => (!isset($dailyCase[17]) || $dailyCase[17] == '') ? 0 : $dailyCase[17],
                    'pending' => (!isset($dailyCase[18]) || $dailyCase[18] == '') ? 0 : $dailyCase[18],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getVaxState(): Collection
    {
        //TODO
        return collect(explode(PHP_EOL, Http::get(self::url['VAX_STATE'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = str_getcsv($record);
                return [
                    'date' => $dailyCase[0],
                    'state' => $dailyCase[1],
                    'daily_partial' => (!isset($dailyCase[1 + 1]) || $dailyCase[1 + 1] == '') ? 0 : $dailyCase[1 + 1], //daily_partial
                    'daily_full' => (!isset($dailyCase[2 + 1]) || $dailyCase[2 + 1] == '') ? 0 : $dailyCase[2 + 1], //daily_full
                    'daily' => (!isset($dailyCase[3 + 1]) || $dailyCase[3 + 1] == '') ? 0 : $dailyCase[3 + 1], //daily
                    'daily_partial_child' => (!isset($dailyCase[4 + 1]) || $dailyCase[4 + 1] == '') ? 0 : $dailyCase[4 + 1],
                    'daily_full_child' => (!isset($dailyCase[5 + 1]) || $dailyCase[5 + 1] == '') ? 0 : $dailyCase[5 + 1],
                    'cumul_partial' => (!isset($dailyCase[6 + 1]) || $dailyCase[6 + 1] == '') ? 0 : $dailyCase[6 + 1],
                    'cumul_full' => (!isset($dailyCase[7 + 1]) || $dailyCase[7 + 1] == '') ? 0 : $dailyCase[7 + 1],
                    'cumul' => (!isset($dailyCase[8 + 1]) || $dailyCase[8 + 1] == '') ? 0 : $dailyCase[8 + 1],
                    'cumul_partial_child' => (!isset($dailyCase[9 + 1]) || $dailyCase[9 + 1] == '') ? 0 : $dailyCase[9 + 1],
                    'cumul_full_child' => (!isset($dailyCase[10 + 1]) || $dailyCase[10 + 1] == '') ? 0 : $dailyCase[10 + 1],
                    'pfizer1' => (!isset($dailyCase[11 + 1]) || $dailyCase[11 + 1] == '') ? 0 : $dailyCase[11 + 1],
                    'pfizer2' => (!isset($dailyCase[12 + 1]) || $dailyCase[12 + 1] == '') ? 0 : $dailyCase[12 + 1],
                    'sinovac1' => (!isset($dailyCase[13 + 1]) || $dailyCase[13 + 1] == '') ? 0 : $dailyCase[13 + 1],
                    'sinovac2' => (!isset($dailyCase[14 + 1]) || $dailyCase[14 + 1] == '') ? 0 : $dailyCase[14 + 1],
                    'astra1' => (!isset($dailyCase[15 + 1]) || $dailyCase[15 + 1] == '') ? 0 : $dailyCase[15 + 1],
                    'astra2' => (!isset($dailyCase[16 + 1]) || $dailyCase[16 + 1] == '') ? 0 : $dailyCase[16 + 1],
                    'cansino' => (!isset($dailyCase[17 + 1]) || $dailyCase[17 + 1] == '') ? 0 : $dailyCase[17 + 1],
                    'pending' => (!isset($dailyCase[18 + 1]) || $dailyCase[18 + 1] == '') ? 0 : $dailyCase[18 + 1],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getVaxRegMalaysia(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['VAX_REG_MALAYSIA'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = str_getcsv($record);
                return [
                    'date' => $dailyCase[0],
                    'state' => $dailyCase[1],
                    'total' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
                    'phase2' => (!isset($dailyCase[3]) || $dailyCase[3] == '') ? 0 : $dailyCase[3],
                    'mysj' => (!isset($dailyCase[4]) || $dailyCase[4] == '') ? 0 : $dailyCase[4],
                    'call' => (!isset($dailyCase[5]) || $dailyCase[5] == '') ? 0 : $dailyCase[5],
                    'web' => (!isset($dailyCase[6]) || $dailyCase[6] == '') ? 0 : $dailyCase[6],
                    'children' => (!isset($dailyCase[7]) || $dailyCase[7] == '') ? 0 : $dailyCase[7],
                    'elderly' => (!isset($dailyCase[8]) || $dailyCase[8] == '') ? 0 : $dailyCase[8],
                    'comorb' => (!isset($dailyCase[9]) || $dailyCase[9] == '') ? 0 : $dailyCase[9],
                    'oku' => (!isset($dailyCase[10]) || $dailyCase[10] == '') ? 0 : $dailyCase[10],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getVaxRegState(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['VAX_REG_STATE'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = str_getcsv($record);
                return [
                    'date' => $dailyCase[0],
                    'state' => $dailyCase[1],
                    'total' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
                    'phase2' => (!isset($dailyCase[3]) || $dailyCase[3] == '') ? 0 : $dailyCase[3],
                    'mysj' => (!isset($dailyCase[4]) || $dailyCase[4] == '') ? 0 : $dailyCase[4],
                    'call' => (!isset($dailyCase[5]) || $dailyCase[5] == '') ? 0 : $dailyCase[5],
                    'web' => (!isset($dailyCase[6]) || $dailyCase[6] == '') ? 0 : $dailyCase[6],
                    'children' => (!isset($dailyCase[7]) || $dailyCase[7] == '') ? 0 : $dailyCase[7],
                    'elderly' => (!isset($dailyCase[8]) || $dailyCase[8] == '') ? 0 : $dailyCase[8],
                    'comorb' => (!isset($dailyCase[9]) || $dailyCase[9] == '') ? 0 : $dailyCase[9],
                    'oku' => (!isset($dailyCase[10]) || $dailyCase[10] == '') ? 0 : $dailyCase[10],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

}
