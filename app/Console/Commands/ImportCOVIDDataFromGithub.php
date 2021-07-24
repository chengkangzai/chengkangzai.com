<?php

namespace App\Console\Commands;

use App\Http\Services\CovidService;
use App\Http\Services\WebHookService;
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
use DB;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Contracts\Foundation\Application;
use Throwable;

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
     * @var CovidService|Application|mixed
     */
    private CovidService $covidService;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->covidService = app(CovidService::class);
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        try {
            DB::transaction(function () {
                $this->line('');
                $this->warn('Truncating DB');
                $this->truncateDB();

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

                $this->line('');
                $this->info('importing.. Cluster');
                $this->importCluster();

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
            });

            if (app()->environment('production')) {
                app(WebHookService::class)->notifyInSpam('Covid Data Successfully Inserted', WebHookService::COLOR['GREEN']);
            }
        } catch (Exception $exception) {
            if (app()->environment('production')) {
                app(WebHookService::class)->notifyInGeneral('DAMN STH went WRONG : \n\n' . $exception->getMessage(), WebHookService::COLOR['RED']);
            }
        } catch (Throwable $e) {
            if (app()->environment('production')) {
                app(WebHookService::class)->notifyInGeneral('DAMN STH went WRONG : \n\n' . $e->getMessage(), WebHookService::COLOR['RED']);
            }
        }

        return 0;
    }

    public function truncateDB()
    {
        DB::table('cases_malaysia')->truncate();
        DB::table('cases_states')->truncate();
        DB::table('deaths_malaysia')->truncate();
        DB::table('deaths_states')->truncate();
        DB::table('test_malaysia')->truncate();
        DB::table('clusters')->truncate();
        DB::table('hospitals')->truncate();
        DB::table('icus')->truncate();
        DB::table('PKRC')->truncate();
        DB::table('populations')->truncate();
    }


    public function importCasesMalaysia()
    {
        $records = $this->covidService->getCasesMalaysia();

        $this->withProgressBar($records, function ($records) {

            CasesMalaysia::insert($records);

        });

    }

    public function importCasesState()
    {
        $records = $this->covidService->getCasesState();

        $this->withProgressBar($records, function ($records) {

            CasesState::insert($records);

        });
    }

    public function importDeathMalaysia()
    {
        $records = $this->covidService->getDeathMalaysia();

        $this->withProgressBar($records, function ($records) {

            DeathsMalaysia::insert($records);

        });
    }

    public function importDeathState()
    {
        $records = $this->covidService->getDeathState();

        $this->withProgressBar($records, function ($records) {

            DeathsState::insert($records);

        });

    }

    public function importTestMalaysia()
    {
        $records = $this->covidService->getTestMalaysia();

        $this->withProgressBar($records, function ($records) {

            TestMalaysia::insert($records);

        });
    }

    public function importCluster()
    {
        $records = $this->covidService->getCluster();

        $this->withProgressBar($records, function ($records) {

            Cluster::insert($records);

        });
    }

    public function importHospitals()
    {
        $records = $this->covidService->getHospitals();

        $this->withProgressBar($records, function ($records) {

            Hospital::insert($records);

        });
    }

    public function importICU()
    {
        $records = $this->covidService->getICU();

        $this->withProgressBar($records, function ($records) {

            ICU::insert($records);

        });
    }

    public function importPKRC()
    {
        $records = $this->covidService->getPKRC();

        $this->withProgressBar($records, function ($records) {

            PKRC::insert($records);

        });
    }

    public function importMalaysiaPopulation()
    {
        $records = $this->covidService->getMalaysiaPopulation();

        $this->withProgressBar($records, function ($records) {

            Population::insert($records);

        });
    }

}
