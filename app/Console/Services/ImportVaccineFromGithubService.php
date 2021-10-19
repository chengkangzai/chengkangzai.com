<?php


namespace App\Console\Services;


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
                $vax = str_getcsv($record);
                $i = 0;
                return [
                    'date' => $this->takeIndex($vax, $i++),
                    'daily_partial' => $this->takeIndex($vax, $i++),
                    'daily_full' => $this->takeIndex($vax, $i++),
                    'daily' => $this->takeIndex($vax, $i++),
                    'daily_partial_child' => $this->takeIndex($vax, $i++),
                    'daily_full_child' => $this->takeIndex($vax, $i++),
                    'daily_booster' => $this->takeIndex($vax, $i++),
                    'cumul_partial' => $this->takeIndex($vax, $i++),
                    'cumul_full' => $this->takeIndex($vax, $i++),
                    'cumul' => $this->takeIndex($vax, $i++),
                    'cumul_partial_child' => $this->takeIndex($vax, $i++),
                    'cumul_full_child' => $this->takeIndex($vax, $i++),
                    'cumul_booster' => $this->takeIndex($vax, $i++),
                    'pfizer1' => $this->takeIndex($vax, $i++),
                    'pfizer2' => $this->takeIndex($vax, $i++),
                    'sinovac1' => $this->takeIndex($vax, $i++),
                    'sinovac2' => $this->takeIndex($vax, $i++),
                    'astra1' => $this->takeIndex($vax, $i++),
                    'astra2' => $this->takeIndex($vax, $i++),
                    'cansino' => $this->takeIndex($vax, $i++),
                    'pending' => $this->takeIndex($vax, $i++),
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
                $vax = str_getcsv($record);
                $i = 0;
                return [
                    'date' => $this->takeIndex($vax, $i++),
                    'state' => $this->takeIndex($vax, $i++),
                    'daily_partial' => $this->takeIndex($vax, $i++),
                    'daily_full' => $this->takeIndex($vax, $i++),
                    'daily' => $this->takeIndex($vax, $i++),
                    'daily_partial_child' => $this->takeIndex($vax, $i++),
                    'daily_full_child' => $this->takeIndex($vax, $i++),
                    'daily_booster' => $this->takeIndex($vax, $i++),
                    'cumul_partial' => $this->takeIndex($vax, $i++),
                    'cumul_full' => $this->takeIndex($vax, $i++),
                    'cumul' => $this->takeIndex($vax, $i++),
                    'cumul_partial_child' => $this->takeIndex($vax, $i++),
                    'cumul_full_child' => $this->takeIndex($vax, $i++),
                    'cumul_booster' => $this->takeIndex($vax, $i++),
                    'pfizer1' => $this->takeIndex($vax, $i++),
                    'pfizer2' => $this->takeIndex($vax, $i++),
                    'sinovac1' => $this->takeIndex($vax, $i++),
                    'sinovac2' => $this->takeIndex($vax, $i++),
                    'astra1' => $this->takeIndex($vax, $i++),
                    'astra2' => $this->takeIndex($vax, $i++),
                    'cansino' => $this->takeIndex($vax, $i++),
                    'pending' => $this->takeIndex($vax, $i++),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getVaxRegMalaysia(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['VAX_REG_MALAYSIA'])))
            ->slice(1, -1)
            ->map(fn($record) => $this->formatVaxReg(str_getcsv($record)));
    }

    public function getVaxRegState(): Collection
    {
        return collect(explode(PHP_EOL, Http::get(self::url['VAX_REG_STATE'])))
            ->slice(1, -1)
            ->map(fn($record) => $this->formatVaxReg(str_getcsv($record)));
    }

    /**
     * @param array $array
     * @param int $index
     * @return mixed
     */
    private static function takeIndex(array $array, int $index): mixed
    {
        return (!isset($array[$index]) || $array[$index] == '') ? 0 : $array[$index];
    }

    private function formatVaxReg(array $array): array
    {
        $i = 0;
        return [
            'date' => $this->takeIndex($array, $i++),
            'state' => $this->takeIndex($array, $i++),
            'total' => $this->takeIndex($array, $i++),
            'phase2' => $this->takeIndex($array, $i++),
            'mysj' => $this->takeIndex($array, $i++),
            'call' => $this->takeIndex($array, $i++),
            'web' => $this->takeIndex($array, $i++),
            'children' => $this->takeIndex($array, $i++),
            'elderly' => $this->takeIndex($array, $i++),
            'comorb' => $this->takeIndex($array, $i++),
            'oku' => $this->takeIndex($array, $i++),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

}
