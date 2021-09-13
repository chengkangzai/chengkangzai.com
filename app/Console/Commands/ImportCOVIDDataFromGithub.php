<?php

namespace App\Console\Commands;

use App\Http\Services\ImportCovidFromGithubService;
use App\Http\Services\WebHookService;
use App\Models\Covid\DeathsState;
use Artisan;
use Carbon\Carbon;
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
    protected $signature = 'import:covid {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Covid Cases From Github';

    /**
     * @var ImportCovidFromGithubService|Application|mixed
     */
    private ImportCovidFromGithubService $covidService;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ImportCovidFromGithubService $service)
    {
        parent::__construct();
        $this->covidService = $service;
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        try {
            if ($this->option('force')) {
                $this->line('Truncating DB...');
                $this->truncateDB();
            }
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
            $this->importMalaysiaPopulation();

            Artisan::call('cache:clear');
            if (app()->environment('production')) {
                app(WebHookService::class)->notifyInSpam(Carbon::now() . ' : Covid Data Successfully Inserted', WebHookService::COLOR['GREEN']);
            }
        } catch (Exception $exception) {
            if (app()->environment('production')) {
                app(WebHookService::class)->notifyInGeneral(Carbon::now() . ' : DAMN STH went WRONG during importing covid data: \n\n' . $exception->getMessage(), WebHookService::COLOR['RED']);
            }
        } catch (Throwable $exception) {
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

        if (DB::table('cases_malaysia')->count() == $records->count()) {
            $this->info('[CaseMalaysia] : ' . 'Not inject as the data is the same.');
            return;
        }

        DB::table('cases_malaysia')->truncate();

        $this->info('[CaseMalaysia] : ' . 'Injecting...');

        $chunks = $records->chunk(500);
        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table('cases_malaysia')->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    public function importCasesState()
    {
        $records = $this->covidService->getCasesState();

        if (DB::table('cases_states')->count() == $records->count()) {
            $this->info('[CaseState] : ' . 'Not inject as the data is the same.');
            return;
        }

        DB::table('cases_states')->truncate();

        $this->info('[CaseState] : ' . 'Injecting...');

        $chunks = $records->chunk(500);

        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table('cases_states')->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    public function importDeathMalaysia()
    {
        $records = $this->covidService->getDeathMalaysia();

        if (DB::table('deaths_malaysia')->count() == $records->count()) {
            $this->info('[DeathMalaysia] : ' . 'Not inject as the data is the same.');
            return;
        }

        DB::table('deaths_malaysia')->truncate();

        $this->info('[DeathMalaysia] : ' . 'Injecting...');

        $chunks = $records->chunk(500);

        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table('deaths_malaysia')->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    public function importDeathState()
    {
        $records = $this->covidService->getDeathState();

        if (DB::table('deaths_states')->count() == $records->count()) {
            $this->info('[DeathState] : ' . 'Not inject as the data is the same.');
            return;
        }

        DB::table('deaths_states')->truncate();

        $this->info('[DeathState] : ' . 'Injecting...');

        $chunks = $records->chunk(500);

        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table('deaths_states')->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    public function importTestMalaysia()
    {
        $records = $this->covidService->getTestMalaysia();

        if (DB::table('test_malaysia')->count() == $records->count()) {
            $this->info('[TestMalaysia] : ' . 'Not inject as the data is the same.');
            return;
        }

        DB::table('test_malaysia')->truncate();

        $this->info('[TestMalaysia] : ' . 'Injecting...');

        $chunks = $records->chunk(500);

        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table('test_malaysia')->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    private function importTestState()
    {
        $records = $this->covidService->getTestState();

        if (DB::table('test_states')->count() == $records->count()) {
            $this->info('[TestState] : ' . 'Not inject as the data is the same.');
            return;
        }

        DB::table('test_states')->truncate();

        $this->info('[TestState] : ' . 'Injecting...');

        $chunks = $records->chunk(500);

        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table('test_states')->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    public function importCluster()
    {
        $records = $this->covidService->getCluster();

        if (DB::table('clusters')->count() == $records->count()) {
            $this->info('[Cluster] : ' . 'Not inject as the data is the same.');
            return;
        }
        DB::table('clusters')->truncate();

        $this->info('[Cluster] : ' . 'Injecting...');

        $chunks = $records->chunk(500);

        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table('clusters')->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    public function importHospitals()
    {
        $records = $this->covidService->getHospitals();

        if (DB::table('hospitals')->count() == $records->count()) {
            $this->info('[Hospital] : ' . 'Not inject as the data is the same.');
            return;
        }

        DB::table('hospitals')->truncate();

        $this->info('[Hospital] : ' . 'Injecting...');

        $chunks = $records->chunk(500);

        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table('hospitals')->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    public function importICU()
    {
        $records = $this->covidService->getICU();

        if (DB::table('icus')->count() == $records->count()) {
            $this->info('[ICU] : ' . 'Not inject as the data is the same.');
            return;
        }

        DB::table('icus')->truncate();

        $this->info('[ICU] : ' . 'Injecting...');

        $chunks = $records->chunk(500);

        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table('icus')->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    public function importPKRC()
    {
        $records = $this->covidService->getPKRC();

        if (DB::table('PKRC')->count() == $records->count()) {
            $this->info('[PKRC] : ' . 'Not inject as the data is the same.');
            return;
        }

        DB::table('PKRC')->truncate();

        $this->info('[PKRC] : ' . 'Injecting...');

        $chunks = $records->chunk(500);

        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table('PKRC')->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    public function importMalaysiaPopulation()
    {
        $records = $this->covidService->getMalaysiaPopulation();

        DB::table('populations')->truncate();

        $this->info('[Population] : ' . 'Injecting...');

        $chunks = $records->chunk(500);

        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table('populations')->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

}
