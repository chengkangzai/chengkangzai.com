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
                    'dose1_daily' => (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1],
                    'dose2_daily' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
                    'total_daily' => (!isset($dailyCase[3]) || $dailyCase[3] == '') ? 0 : $dailyCase[3],
                    'dose1_cumul' => (!isset($dailyCase[4]) || $dailyCase[4] == '') ? 0 : $dailyCase[4],
                    'dose2_cumul' => (!isset($dailyCase[5]) || $dailyCase[5] == '') ? 0 : $dailyCase[5],
                    'total_cumul' => (!isset($dailyCase[6]) || $dailyCase[6] == '') ? 0 : $dailyCase[6],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getVaxState(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['VAX_STATE'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = str_getcsv($record);
                return [
                    'date' => $dailyCase[0],
                    'state' => $dailyCase[1],
                    'dose1_daily' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
                    'dose2_daily' => (!isset($dailyCase[3]) || $dailyCase[3] == '') ? 0 : $dailyCase[3],
                    'total_daily' => (!isset($dailyCase[4]) || $dailyCase[4] == '') ? 0 : $dailyCase[4],
                    'dose1_cumul' => (!isset($dailyCase[5]) || $dailyCase[5] == '') ? 0 : $dailyCase[5],
                    'dose2_cumul' => (!isset($dailyCase[6]) || $dailyCase[6] == '') ? 0 : $dailyCase[6],
                    'total_cumul' => (!isset($dailyCase[7]) || $dailyCase[7] == '') ? 0 : $dailyCase[7],
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
