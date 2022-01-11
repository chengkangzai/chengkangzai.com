<?php


namespace App\Console\Services;


use App\Models\Covid\CasesState;
use App\Models\Covid\DeathsState;
use App\Models\Covid\Population;
use Http;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use JetBrains\PhpStorm\ArrayShape;

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
        $record = $this->getRecord('CASES_MALAYSIA');
        if ($record['exists']) {
            return collect([]);
        }

        global $cumCasesMalaysia;
        global $cumRecoveredMalaysia;
        return $record['content']
            ->map(function ($record) use (&$cumCasesMalaysia, &$cumRecoveredMalaysia) {
                $item = str_getcsv(str_replace("\"", "", $record));
                $new_cases = self::takeIndex($item, 1);
                $cumCasesMalaysia = $cumCasesMalaysia + $new_cases;
                $new_recovered = self::takeIndex($item, 3);
                $cumRecoveredMalaysia = $new_recovered + $cumRecoveredMalaysia;
                $i = 0;
                return [
                    'date' => self::takeIndex($item, $i++),
                    'cases_new' => self::takeIndex($item, $i++),
                    'cases_import' => self::takeIndex($item, $i++),
                    'cases_recovered' => self::takeIndex($item, $i++),
                    'cases_active' => self::takeIndex($item, $i++),
                    'cases_cluster' => self::takeIndex($item, $i++),
                    'cases_pvax' => self::takeIndex($item, $i++),
                    'cases_fvax' => self::takeIndex($item, $i++),
                    'cases_child' => self::takeIndex($item, $i++),
                    'cases_adolescent' => self::takeIndex($item, $i++),
                    'cases_adult' => self::takeIndex($item, $i++),
                    'cases_elderly' => self::takeIndex($item, $i++),
                    'cluster_import' => self::takeIndex($item, $i++),
                    'cluster_religious' => self::takeIndex($item, $i++),
                    'cluster_community' => self::takeIndex($item, $i++),
                    'cluster_highRisk' => self::takeIndex($item, $i++),
                    'cluster_education' => self::takeIndex($item, $i++),
                    'cluster_detentionCentre' => self::takeIndex($item, $i++),
                    'cluster_workplace' => self::takeIndex($item, $i++),
                    'cases_cumulative' => $cumCasesMalaysia,
                    'cases_recovered_cumulative' => $cumRecoveredMalaysia,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });

    }

    public function getCasesState(): Collection
    {
        $record = $this->getRecord('CASES_STATE');
        if ($record['exists']) {
            return collect([]);
        }
        $data = $record['content']
            ->map(function ($record) {
                $item = explode(',', $record);
                $case = new CasesState();
                $i = 0;
                $case->date = self::takeIndex($item, $i++);
                $case->state = self::takeIndex($item, $i++);
                $case->cases_new = self::takeIndex($item, $i++);
                $case->cases_import = self::takeIndex($item, $i++);
                $case->cases_recovered = self::takeIndex($item, $i++);
                $case->cases_active = self::takeIndex($item, $i++);
                $case->cases_cluster = self::takeIndex($item, $i++);
                $case->cases_pvax = self::takeIndex($item, $i++);
                $case->cases_fvax = self::takeIndex($item, $i++);
                $case->cases_child = self::takeIndex($item, $i++);
                $case->cases_adolescent = self::takeIndex($item, $i++);
                $case->cases_adult = self::takeIndex($item, $i++);
                $case->cases_elderly = self::takeIndex($item, $i++);

                $case->cases_cumulative = 0;
                $case->cases_recovered_cumulative = 0;
                return $case;
            });
        return $this->calcCumulativeCasesState($data);
    }

    private function calcCumulativeCasesState(Collection $collection): Collection
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
        $record = $this->getRecord('DEATH_MALAYSIA');
        if ($record['exists']) {
            return collect([]);
        }
        global $cumDeathMalaysia;
        global $cumBidMalaysia;
        global $cumBidDodMalaysia;
        return $record['content']
            ->map(function ($record) use ($cumBidDodMalaysia, &$cumDeathMalaysia, &$cumBidMalaysia) {
                $item = explode(',', $record);
                $cumDeathMalaysia = $cumDeathMalaysia + self::takeIndex($item, 1);
                $cumBidMalaysia = $cumBidMalaysia + self::takeIndex($item, 2);
                $cumBidDodMalaysia = $cumBidDodMalaysia + self::takeIndex($item, 3);
                $i = 0;
                return [
                    'date' => self::takeIndex($item, $i++),
                    'deaths_new' => self::takeIndex($item, $i++),
                    'deaths_bid' => self::takeIndex($item, $i++),
                    'deaths_bid_dod' => self::takeIndex($item, $i++),
                    'deaths_pvax' => self::takeIndex($item, $i++),
                    'deaths_fvax' => self::takeIndex($item, $i++),
                    'deaths_tat' => self::takeIndex($item, $i++),
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
        $record = $this->getRecord('DEATH_STATE');
        if ($record['exists']) {
            return collect([]);
        }
        $data = $record['content']
            ->map(function ($record) {
                $item = explode(',', $record);
                $i = 0;

                $collect = new DeathsState();
                $collect->date = self::takeIndex($item, $i++);
                $collect->state = self::takeIndex($item, $i++);
                $collect->deaths_new = self::takeIndex($item, $i++);
                $collect->deaths_bid = self::takeIndex($item, $i++);
                $collect->deaths_bid_dod = self::takeIndex($item, $i++);
                $collect->deaths_pvax = self::takeIndex($item, $i++);
                $collect->deaths_fvax = self::takeIndex($item, $i++);
                $collect->deaths_tat = self::takeIndex($item, $i++);
                return $collect;
            });

        return $this->calcCumulativeDeathState($data);
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
        $record = $this->getRecord('TEST_MALAYSIA');
        if ($record['exists']) {
            return collect([]);
        }

        return $record['content']
            ->map(function ($record) {
                $item = explode(',', $record);
                $i = 0;
                return [
                    'date' => self::takeIndex($item, $i++),
                    'rtk_ag' => self::takeIndex($item, $i++),
                    'pcr' => self::takeIndex($item, $i++),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getTestState(): Collection
    {
        $record = $this->getRecord('TEST_STATE');
        if ($record['exists']) {
            return collect([]);
        }

        return $record['content']
            ->map(function ($record) {
                $item = explode(',', $record);
                $i = 0;
                return [
                    'date' => self::takeIndex($item, $i++),
                    'state' => self::takeIndex($item, $i++),
                    'rtk_ag' => self::takeIndex($item, $i++),
                    'pcr' => self::takeIndex($item, $i++),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getCluster(): Collection
    {
        $record = $this->getRecord('CLUSTER');
        if ($record['exists']) {
            return collect([]);
        }
        return $record['content']
            ->map(function ($record) {
                $item = str_getcsv($record);
                $i = 0;
                return [
                    'cluster' => self::takeIndex($item, $i++),
                    'state' =>
                        collect(explode(',', self::takeIndex($item, $i++)))
                            ->map(fn($number) => Population::STATE[$number])
                            ->implode(','),
                    'district' => self::takeIndex($item, $i++),
                    'date_announced' => self::takeIndex($item, $i++, 'string'),
                    'date_last_onset' => self::takeIndex($item, $i++, 'string'),
                    'category' => self::takeIndex($item, $i++),
                    'status' => self::takeIndex($item, $i++),
                    'cases_new' => self::takeIndex($item, $i++),
                    'cases_total' => self::takeIndex($item, $i++),
                    'cases_active' => self::takeIndex($item, $i++),
                    'tests' => self::takeIndex($item, $i++),
                    'icu' => self::takeIndex($item, $i++),
                    'deaths' => self::takeIndex($item, $i++),
                    'recovered' => self::takeIndex($item, $i++),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getHospitals(): Collection
    {
        $record = $this->getRecord('HOSPITAL');
        if ($record['exists']) {
            return collect([]);
        }
        return $record['content']
            ->map(function ($record) {
                $item = explode(',', $record);
                $i = 0;
                return [
                    'date' => self::takeIndex($item, $i++),
                    'state' => self::takeIndex($item, $i++),
                    'beds' => self::takeIndex($item, $i++),
                    'beds_covid' => self::takeIndex($item, $i++),
                    'beds_noncrit' => self::takeIndex($item, $i++),
                    'admitted_pui' => self::takeIndex($item, $i++),
                    'admitted_covid' => self::takeIndex($item, $i++),
                    'admitted_total' => self::takeIndex($item, $i++),
                    'discharged_pui' => self::takeIndex($item, $i++),
                    'discharged_covid' => self::takeIndex($item, $i++),
                    'discharged_total' => self::takeIndex($item, $i++),
                    'hosp_covid' => self::takeIndex($item, $i++),
                    'hosp_pui' => self::takeIndex($item, $i++),
                    'hosp_noncovid' => self::takeIndex($item, $i++),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getICU(): Collection
    {
        $record = $this->getRecord('ICU');
        if ($record['exists']) {
            return collect([]);
        }
        return $record['content']
            ->map(function ($record) {
                $item = explode(',', $record);
                $i = 0;
                return [
                    'date' => self::takeIndex($item, $i++),
                    'state' => self::takeIndex($item, $i++),
                    'bed_icu' => self::takeIndex($item, $i++),
                    'bed_icu_rep' => self::takeIndex($item, $i++),
                    'bed_icu_total' => self::takeIndex($item, $i++),
                    'bed_icu_covid' => self::takeIndex($item, $i++),
                    'vent' => self::takeIndex($item, $i++),
                    'vent_port' => self::takeIndex($item, $i++),
                    'icu_covid' => self::takeIndex($item, $i++),
                    'icu_pui' => self::takeIndex($item, $i++),
                    'icu_noncovid' => self::takeIndex($item, $i++),
                    'vent_covid' => self::takeIndex($item, $i++),
                    'vent_pui' => self::takeIndex($item, $i++),
                    'vent_noncovid' => self::takeIndex($item, $i++),
                    'vent_used' => self::takeIndex($item, $i++),
                    'vent_port_used' => self::takeIndex($item, $i++),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getPKRC(): Collection
    {
        $record = $this->getRecord('PKRC');
        if ($record['exists']) {
            return collect([]);
        }
        return $record['content']
            ->map(function ($record) {
                $item = explode(',', $record);
                $i = 0;
                return [
                    'date' => self::takeIndex($item, $i++),
                    'state' => self::takeIndex($item, $i++),
                    'beds' => self::takeIndex($item, $i++),
                    'admitted_pui' => self::takeIndex($item, $i++),
                    'admitted_covid' => self::takeIndex($item, $i++),
                    'admitted_total' => self::takeIndex($item, $i++),
                    'discharge_pui' => self::takeIndex($item, $i++),
                    'discharge_covid' => self::takeIndex($item, $i++),
                    'discharge_total' => self::takeIndex($item, $i++),
                    'pkrc_covid' => self::takeIndex($item, $i++),
                    'pkrc_pui' => self::takeIndex($item, $i++),
                    'pkrc_noncovid' => self::takeIndex($item, $i++),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            });
    }

    public function getMalaysiaPopulation(): Collection
    {
        $record = $this->getRecord('POPULATION');
        if ($record['exists']) {
            return collect([]);
        }
        return $record['content']
            ->map(function ($record) {
                $item = explode(',', $record);
                $i = 0;
                return [
                    'state' => self::takeIndex($item, $i++),
                    'idxs' => self::takeIndex($item, $i++),
                    'pop' => self::takeIndex($item, $i++),
                    'pop_18' => self::takeIndex($item, $i++),
                    'pop_60' => self::takeIndex($item, $i++),
                    'pop_12' => self::takeIndex($item, $i++),
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


    #[ArrayShape(['content' => "\Illuminate\Support\Collection", 'exists' => "bool"])]
    private function getRecord(string $mode): array
    {
        $csv = Http::get(self::url[$mode])->body();
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
