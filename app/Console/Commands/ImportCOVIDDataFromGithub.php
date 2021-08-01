<?php

namespace App\Console\Commands;

use App\Http\Services\ImportCovidFromGithubService;
use App\Http\Services\WebHookService;
use Cache;
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
    public function __construct()
    {
        parent::__construct();
        $this->covidService = app(ImportCovidFromGithubService::class);
    }

    /**
     * Execute the console command.
     *
     * @return int
     * @throws Throwable
     */
    public function handle(): int
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
            $this->importCluster();
            $this->importHospitals();
            $this->importICU();
            $this->importPKRC();
            $this->importMalaysiaPopulation();

            Cache::clear();
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


    public function importCasesMalaysia(): int
    {
        $records = $this->covidService->getCasesMalaysia();

        if (DB::table('cases_malaysia')->count() == $records->count()) {
            $this->info('[CaseMalaysia] : ' . 'Not inject as the data is the same.');
            return 0;
        }

        DB::table('cases_malaysia')->truncate();

        $this->info('[CaseMalaysia] : ' . 'Injecting...');

        $this->withProgressBar($records, function ($records) {
            DB::table('cases_malaysia')->insert($records);
        });
        $this->line('');
        return 0;
    }

    public function importCasesState(): int
    {
        $records = $this->covidService->getCasesState();

        if (DB::table('cases_states')->count() == $records->count()) {
            $this->info('[CaseState] : ' . 'Not inject as the data is the same.');
            return 0;
        }

        DB::table('cases_states')->truncate();

        $this->info('[CaseState] : ' . 'Injecting...');

        $this->withProgressBar($records, function ($records) {
            DB::table('cases_states')->insert($records);
        });

        $this->line('');
        $this->info('[CaseState] : ' . 'Updating Cumulative...');

        $this->covidService->updateCumulativeCasesState();

        return 0;
    }

    public function importDeathMalaysia(): int
    {
        $records = $this->covidService->getDeathMalaysia();

        if (DB::table('deaths_malaysia')->count() == $records->count()) {
            $this->info('[DeathMalaysia] : ' . 'Not inject as the data is the same.');
            return 0;
        }

        DB::table('deaths_malaysia')->truncate();

        $this->info('[DeathMalaysia] : ' . 'Injecting...');

        $this->withProgressBar($records, function ($records) {
            DB::table('deaths_malaysia')->insert($records);
        });

        $this->line('');

        return 0;
    }

    public function importDeathState(): int
    {
        $records = $this->covidService->getDeathState();

        if (DB::table('deaths_states')->count() == $records->count()) {
            $this->info('[DeathState] : ' . 'Not inject as the data is the same.');
            return 0;
        }

        DB::table('deaths_states')->truncate();

        $this->info('[DeathState] : ' . 'Injecting...');

        $this->withProgressBar($records, function ($records) {
            DB::table('deaths_states')->insert($records);
        });

        $this->line('');
        $this->info('[DeathState] : ' . 'Updating Cumulative... ');
        $this->covidService->updateCumulativeDeathState();
        return 0;
    }

    public function importTestMalaysia(): int
    {
        $records = $this->covidService->getTestMalaysia();

        if (DB::table('test_malaysia')->count() == $records->count()) {
            $this->info('[TestMalaysia] : ' . 'Not inject as the data is the same.');
            return 0;
        }

        DB::table('test_malaysia')->truncate();

        $this->info('[TestMalaysia] : ' . 'Injecting...');

        $this->withProgressBar($records, function ($records) {
            DB::table('test_malaysia')->insert($records);
        });

        $this->line('');

        return 0;
    }

    public function importCluster(): int
    {
        $records = $this->covidService->getCluster();
        /**
         * Importing Cluster Data anyway as the previous data will be change without adding new cluster
         */
        DB::table('clusters')->truncate();

        $this->info('[Cluster] : ' . 'Injecting...');

        $this->withProgressBar($records, function ($records) {
            DB::table('clusters')->insert($records);
        });

        $this->line('');

        return 0;
    }

    public function importHospitals(): int
    {
        $records = $this->covidService->getHospitals();

        if (DB::table('hospitals')->count() == $records->count()) {
            $this->info('[Hospital] : ' . 'Not inject as the data is the same.');
            return 0;
        }

        DB::table('hospitals')->truncate();

        $this->info('[Hospital] : ' . 'Injecting...');

        $this->withProgressBar($records, function ($records) {
            DB::table('hospitals')->insert($records);
        });

        $this->line('');

        return 0;
    }

    public function importICU(): int
    {
        $records = $this->covidService->getICU();

        if (DB::table('icus')->count() == $records->count()) {
            $this->info('[ICU] : ' . 'Not inject as the data is the same.');
            return 0;
        }

        DB::table('icus')->truncate();

        $this->info('[ICU] : ' . 'Injecting...');

        $this->withProgressBar($records, function ($records) {
            DB::table('icus')->insert($records);
        });

        $this->line('');

        return 0;
    }

    public function importPKRC(): int
    {
        $records = $this->covidService->getPKRC();

        if (DB::table('PKRC')->count() == $records->count()) {
            $this->info('[PKRC] : ' . 'Not inject as the data is the same.');
            return 0;
        }

        DB::table('PKRC')->truncate();

        $this->info('[PKRC] : ' . 'Injecting...');

        $this->withProgressBar($records, function ($records) {
            DB::table('PKRC')->insert($records);
        });

        $this->line('');

        return 0;
    }

    public function importMalaysiaPopulation()
    {
        $records = $this->covidService->getMalaysiaPopulation();

        DB::table('populations')->truncate();

        $this->info('[Population] : ' . 'Injecting...');

        $this->withProgressBar($records, function ($records) {

            DB::table('populations')->insert($records);

        });
    }

}
