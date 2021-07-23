<?php

namespace App\Console\Commands;

use App\Models\CasesMalaysia;
use App\Models\CasesState;
use App\Models\Cluster;
use App\Models\DeathsMalaysia;
use App\Models\DeathsState;
use App\Models\Hospital;
use App\Models\ICU;
use App\Models\PKRC;
use App\Models\Population;
use App\Models\TestMalaysia;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ImportCOVIDDataFromGithub extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'covid:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Covid Cases From Github';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $this->line('');
        $this->info('importing.. CasesMalaysia');
        $this->importCasesMalaysia();

        $this->line('');
        $this->info('importing.. CasesState');
        $this->importCasesState();

        $this->line('');
        $this->info('importing.. DeathMalaysia');
        $this->importDeathMalaysia();

        $this->line('');
        $this->info('importing.. DeathState');
        $this->importDeathState();

        $this->line('');
        $this->info('importing.. TestMalaysia');
        $this->importTestMalaysia();
        //TODO
//        $this->line('');
//        $this->info('importing.. Cluster');
//        $this->importCluster();

        $this->line('');
        $this->info('importing.. Hospitals');
        $this->importHospitals();

        $this->line('');
        $this->info('importing.. ICU');
        $this->importICU();

        $this->line('');
        $this->info('importing.. PKRC');
        $this->importPKRC();

        $this->line('');
        $this->info('importing.. Population');
        $this->importMalaysiaPopulation();


        return 0;
    }

    public function importCasesMalaysia()
    {

        $raw = Http::get('https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/cases_malaysia.csv');
        $records = collect(explode(PHP_EOL, $raw))
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

        $records->chunk(1000);

        $bar = $this->output->createProgressBar(count($records));
        $bar->start();

        $records->each(function ($record) use ($bar) {
            CasesMalaysia::insert($record);
            $bar->advance();
        });
        $bar->finish();
    }

    public function importCasesState()
    {
        $raw = Http::get('https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/cases_state.csv');
        $records = collect(explode(PHP_EOL, $raw))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                return [
                    'date' => $dailyCase[0],
                    'state' => (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1],
                    'cases_new' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
                ];
            });

        $records->chunk(5000);

        $bar = $this->output->createProgressBar(count($records));
        $bar->start();

        $records->each(function ($record) use ($bar) {
            CasesState::insert($record);
            $bar->advance();
        });

        $bar->finish();
    }

    public function importDeathMalaysia()
    {
        $raw = Http::get('https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/deaths_malaysia.csv');
        $records = collect(explode(PHP_EOL, $raw))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                return [
                    'date' => $dailyCase[0],
                    'deaths_new' => (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1],
                ];
            });

        $records->chunk(100);

        $bar = $this->output->createProgressBar(count($records));
        $bar->start();

        $records->each(function ($record) use ($bar) {
            DeathsMalaysia::insert($record);
            $bar->advance();
        });
        $bar->finish();
    }

    public function importDeathState()
    {
        $raw = Http::get('https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/deaths_state.csv');
        $records = collect(explode(PHP_EOL, $raw))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                return [
                    'date' => $dailyCase[0],
                    'state' => (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1],
                    'deaths_new' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
                ];
            });

        $records->chunk(5000);

        $bar = $this->output->createProgressBar(count($records));
        $bar->start();

        $records->each(function ($record) use ($bar) {
            DeathsState::insert($record);
            $bar->advance();
        });
        $bar->finish();
    }

    public function importTestMalaysia()
    {
        $raw = Http::get('https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/tests_malaysia.csv');
        $records = collect(explode(PHP_EOL, $raw))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                return [
                    'date' => $dailyCase[0],
                    'rtk-ag' => (!isset($dailyCase[1]) || $dailyCase[1] == '') ? 0 : $dailyCase[1],
                    'pcr' => (!isset($dailyCase[2]) || $dailyCase[2] == '') ? 0 : $dailyCase[2],
                ];
            });

        $records->chunk(100);

        $bar = $this->output->createProgressBar(count($records));
        $bar->start();

        $records->each(function ($record) use ($bar) {
            TestMalaysia::insert($record);
            $bar->advance();
        });
        $bar->finish();
    }

    public function importCluster()
    {
        $raw = Http::get('https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/clusters.csv');
        $records = collect(explode(PHP_EOL, $raw))
            ->slice(1, -1)
            ->map(function ($record) {
                $dailyCase = explode(',', $record);
                echo $dailyCase[1];
                return [
                    'cluster' => $dailyCase[0],
                    'state' => $dailyCase[1],
                    'district' => $dailyCase[2] ?? 'null',
                    'date_announced' => Carbon::parse($dailyCase[3]),
                    'date_last_onset' => Carbon::parse($dailyCase[4]),
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
            });

        $records->chunk(5000);

        $bar = $this->output->createProgressBar(count($records));
        $bar->start();

        $records->each(function ($record) use ($bar) {
            Cluster::insert($record);
            $bar->advance();
        });
        $bar->finish();
    }

    public function importHospitals()
    {
        $raw = Http::get('https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/hospital.csv');
        $records = collect(explode(PHP_EOL, $raw))
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

        $records->chunk(5000);

        $bar = $this->output->createProgressBar(count($records));
        $bar->start();

        $records->each(function ($record) use ($bar) {
            Hospital::insert($record);
            $bar->advance();
        });
        $bar->finish();
    }

    public function importICU()
    {
        $raw = Http::get('https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/hospital.csv');
        $records = collect(explode(PHP_EOL, $raw))
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

        $records->chunk(5000);

        $bar = $this->output->createProgressBar(count($records));
        $bar->start();

        $records->each(function ($record) use ($bar) {
            ICU::insert($record);
            $bar->advance();
        });
        $bar->finish();

    }

    public function importPKRC()
    {
        $raw = Http::get('https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/epidemic/hospital.csv');
        $records = collect(explode(PHP_EOL, $raw))
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

        $records->chunk(5000);

        $bar = $this->output->createProgressBar(count($records));
        $bar->start();

        $records->each(function ($record) use ($bar) {
            PKRC::insert($record);
            $bar->advance();
        });
        $bar->finish();
    }

    public function importMalaysiaPopulation()
    {
        $raw = Http::get('https://raw.githubusercontent.com/MoH-Malaysia/covid19-public/main/static/population.csv');
        $records = collect(explode(PHP_EOL, $raw))
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

        $records->chunk(5000);

        $bar = $this->output->createProgressBar(count($records));
        $bar->start();

        $records->each(function ($record) use ($bar) {
            Population::insert($record);
            $bar->advance();
        });
        $bar->finish();

    }

}
