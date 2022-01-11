<?php


namespace App\Console\Services;


use GuzzleHttp\Client;
use GuzzleHttp\Promise\Utils;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use JetBrains\PhpStorm\ArrayShape;

class ImportVaccineFromGithubService
{
    const baseUrl = 'https://raw.githubusercontent.com/CITF-Malaysia/citf-public/main';

    const url = [
        'VAX_MALAYSIA' => self::baseUrl . '/vaccination/vax_malaysia.csv',
        'VAX_STATE' => self::baseUrl . '/vaccination/vax_state.csv',
        'VAX_REG_MALAYSIA' => self::baseUrl . '/registration/vaxreg_malaysia.csv',
        'VAX_REG_STATE' => self::baseUrl . '/registration/vaxreg_state.csv',
    ];

    private array $recordHolder;

    public function __construct()
    {
        $client = new Client();
        $promises = [];

        foreach (array_keys(self::url) as $url) {
            $promises[$url] = $client->getAsync(self::url[$url]);
        }
        $responses = Utils::settle($promises)->wait();
        foreach ($responses as $key => $response) {
            $this->recordHolder[$key] = collect(explode(PHP_EOL, $response['value']->getBody()))->splice(1, -1);
        }
    }

    public function getVaxMalaysia(): Collection
    {
        $record = $this->getRecord('VAX_MALAYSIA');
        if ($record['exists']) {
            return collect([]);
        }
        return $record['content']
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
        $record = $this->getRecord('VAX_STATE');
        if ($record['exists']) {
            return collect([]);
        }
        return $record['content']
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
        $record = $this->getRecord('VAX_REG_MALAYSIA');
        if ($record['exists']) {
            return collect([]);
        }
        return $record['content']
            ->map(fn($record) => $this->formatVaxReg(str_getcsv($record)));
    }

    public function getVaxRegState(): Collection
    {
        $record = $this->getRecord('VAX_REG_STATE');
        if ($record['exists']) {
            return collect([]);
        }
        return $record['content']
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

    #[ArrayShape(['content' => "\Illuminate\Support\Collection", 'exists' => "bool"])]
    private function getRecord(string $mode): array
    {
        $csv = $this->recordHolder[$mode];
        $hash = sha1($csv);
        $exists = true;
        if (!(Cache::has($mode) && Cache::get($mode) == $hash)) {
            Cache::put($mode, $hash, now()->addDay());
            $exists = false;
        }

        return [
            'content' => collect(explode(PHP_EOL, $csv))->slice(1, -1),
            'exists' => $exists
        ];
    }

    public function clearCache()
    {
        $cacheKey = array_keys(self::url);
        foreach ($cacheKey as $key) {
            Cache::forget($key);
        }
    }
}
