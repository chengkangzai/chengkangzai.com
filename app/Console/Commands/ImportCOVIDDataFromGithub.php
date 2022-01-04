<?php

namespace App\Console\Commands;

use App\Console\Services\ImportCovidFromGithubService;
use App\Http\Services\WebHookService;
use App\Models\Covid\CasesMalaysia;
use App\Models\Covid\CasesState;
use App\Models\Covid\Cluster;
use App\Models\Covid\DeathsMalaysia;
use App\Models\Covid\DeathsState;
use App\Models\Covid\Hospital;
use App\Models\Covid\ICU;
use App\Models\Covid\PKRC;
use App\Models\Covid\Population;
use App\Models\Covid\TestMalaysia;
use App\Models\Covid\TestState;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Throwable;

class ImportCOVIDDataFromGithub extends Command
{
    protected $signature = 'import:covid {--force}';

    protected $description = 'Import Covid Cases From Github';

    private ImportCovidFromGithubService $covidService;

    public function __construct(ImportCovidFromGithubService $service)
    {
        parent::__construct();
        $this->covidService = $service;
    }

    public function handle()
    {
        try {
            if ($this->option('force')) {
                $this->line('Truncating DB...');
                $this->truncateDB();
            }
            $this->importMalaysiaPopulation();
            $this->importCasesMalaysia();
            $this->importCasesState();
            $this->importDeathMalaysia();
            $this->importDeathState();
            $this->importTestMalaysia();
            $this->importTestState();
            $this->importCluster();
            $this->importHospitals();
            $this->importICU();
            $this->importPKRC();

            Cache::clear();
            if (app()->environment('production')) {
                app(WebHookService::class)->notifyInSpam(Carbon::now() . ' : Covid Data Successfully Inserted', WebHookService::COLOR['GREEN']);
            }
        } catch (Throwable|Exception $exception) {
            if (app()->environment('production')) {
                app(WebHookService::class)->notifyInGeneral(Carbon::now() . ' : DAMN STH went WRONG during importing covid data: \n\n' . $exception->getMessage(), WebHookService::COLOR['RED']);
            }
        }
    }

    public function truncateDB()
    {
        DB::table('cases_malaysia')->truncate();
        DB::table('cases_states')->truncate();
        DB::table('deaths_malaysia')->truncate();
        DB::table('deaths_states')->truncate();
        DB::table('test_malaysia')->truncate();
        DB::table('test_states')->truncate();
        DB::table('clusters')->truncate();
        DB::table('hospitals')->truncate();
        DB::table('icus')->truncate();
        DB::table('PKRC')->truncate();
        DB::table('populations')->truncate();
    }

    public function importCasesMalaysia()
    {
        $records = $this->covidService->getCasesMalaysia();
        $this->inject($records, 'cases_malaysia', CasesMalaysia::class);
    }

    public function importCasesState()
    {
        $records = $this->covidService->getCasesState();
        $this->inject($records, 'cases_states', CasesState::class);
    }

    public function importDeathMalaysia()
    {
        $records = $this->covidService->getDeathMalaysia();
        $this->inject($records, 'deaths_malaysia', DeathsMalaysia::class);
    }

    public function importDeathState()
    {
        $records = $this->covidService->getDeathState();
        $this->inject($records, 'deaths_states', DeathsState::class);
    }

    public function importTestMalaysia()
    {
        $records = $this->covidService->getTestMalaysia();
        $this->inject($records, 'test_malaysia', TestMalaysia::class);
    }

    private function importTestState()
    {
        $records = $this->covidService->getTestState();
        $this->inject($records, 'test_states', TestState::class);
    }

    public function importCluster()
    {
        $records = $this->covidService->getCluster();
        $this->inject($records, 'clusters', Cluster::class);
    }

    public function importHospitals()
    {
        $records = $this->covidService->getHospitals();
        $this->inject($records, 'hospitals', Hospital::class);
    }

    public function importICU()
    {
        $records = $this->covidService->getICU();

        $this->inject($records, 'icus', ICU::class);
    }

    public function importPKRC()
    {
        $records = $this->covidService->getPKRC();
        $this->inject($records, 'PKRC', PKRC::class);
    }

    public function importMalaysiaPopulation()
    {
        $records = $this->covidService->getMalaysiaPopulation();
        $this->inject($records, 'populations', Population::class);
    }

    private function inject(Collection $records, string $tableName, string $modelName): void
    {
        if (DB::table($tableName)->count() == $records->count()) {
            $this->info("[$modelName] : Not inject as the data is the same.");
            return;
        }

        DB::table($tableName)->truncate();

        $this->info("[$modelName] : Injecting...");

        $chunks = $records->chunk(500);

        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table($tableName)->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

}
