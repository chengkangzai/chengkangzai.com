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
                $vax = str_getcsv($record);
                return [
                    'date' => $vax[0],
                    'daily_partial' => $this->takeIndex($vax, 1),
                    'daily_full' => $this->takeIndex($vax, 2),
                    'daily' => $this->takeIndex($vax, 3),
                    'daily_partial_child' => $this->takeIndex($vax, 4),
                    'daily_full_child' => $this->takeIndex($vax, 5),
                    'cumul_partial' => $this->takeIndex($vax, 6),
                    'cumul_full' => $this->takeIndex($vax, 7),
                    'cumul' => $this->takeIndex($vax, 8),
                    'cumul_partial_child' => $this->takeIndex($vax, 9),
                    'cumul_full_child' => $this->takeIndex($vax, 10),
                    'pfizer1' => $this->takeIndex($vax, 11),
                    'pfizer2' => $this->takeIndex($vax, 12),
                    'sinovac1' => $this->takeIndex($vax, 13),
                    'sinovac2' => $this->takeIndex($vax, 14),
                    'astra1' => $this->takeIndex($vax, 15),
                    'astra2' => $this->takeIndex($vax, 16),
                    'cansino' => $this->takeIndex($vax, 17),
                    'pending' => $this->takeIndex($vax, 18),
                ];
            });
    }

    public function getVaxState(): Collection
    {
        //TODO
        return collect(explode(PHP_EOL, Http::get(self::url['VAX_STATE'])))
            ->slice(1, -1)
            ->map(function ($record) {
                $vax = str_getcsv($record);
                return [
                    'date' => $vax[0],
                    'state' => $vax[1],
                    'daily_partial' => $this->takeIndex($vax, 2),
                    'daily_full' => $this->takeIndex($vax, 3),
                    'daily' => $this->takeIndex($vax, 4),
                    'daily_partial_child' => $this->takeIndex($vax, 5),
                    'daily_full_child' => $this->takeIndex($vax, 6),
                    'cumul_partial' => $this->takeIndex($vax, 7),
                    'cumul_full' => $this->takeIndex($vax, 8),
                    'cumul' => $this->takeIndex($vax, 9),
                    'cumul_partial_child' => $this->takeIndex($vax, 10),
                    'cumul_full_child' => $this->takeIndex($vax, 11),
                    'pfizer1' => $this->takeIndex($vax, 12),
                    'pfizer2' => $this->takeIndex($vax, 13),
                    'sinovac1' => $this->takeIndex($vax, 14),
                    'sinovac2' => $this->takeIndex($vax, 15),
                    'astra1' => $this->takeIndex($vax, 16),
                    'astra2' => $this->takeIndex($vax, 17),
                    'cansino' => $this->takeIndex($vax, 18),
                    'pending' => $this->takeIndex($vax, 19),
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
        return [
            'date' => $array[0],
            'state' => $array[1],
            'total' => $this->takeIndex($array, 2),
            'phase2' => $this->takeIndex($array, 3),
            'mysj' => $this->takeIndex($array, 4),
            'call' => $this->takeIndex($array, 5),
            'web' => $this->takeIndex($array, 6),
            'children' => $this->takeIndex($array, 7),
            'elderly' => $this->takeIndex($array, 8),
            'comorb' => $this->takeIndex($array, 9),
            'oku' => $this->takeIndex($array, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

}
