<?php

namespace App\Console\Commands;

use App\Http\Services\ImportCovidFromGithubService;
use App\Http\Services\ImportVaccineFromGithubService;
use App\Http\Services\WebHookService;
use Cache;
use Carbon\Carbon;
use DB;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Contracts\Foundation\Application;
use Throwable;

class ImportVaxDataFromGithub extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:vaccine {--force}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Vaccination Data From Github';

    /**
     * @var ImportCovidFromGithubService|Application|mixed
     */
    private ImportVaccineFromGithubService $vaxService;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->vaxService = app(ImportVaccineFromGithubService::class);
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        try {
            if ($this->option('force')) {
                $this->truncateDB();
            }
            $this->importVaxMalaysia();
            $this->importVaxState();
            $this->importVaxRegState();
            $this->importVaxRegMalaysia();

            Cache::clear();
            if (app()->environment('production')) {
                app(WebHookService::class)->notifyInSpam(Carbon::now() . ' : Vaccine Data Successfully Inserted', WebHookService::COLOR['GREEN']);
            }
        } catch (Exception $exception) {
            if (app()->environment('production')) {
                app(WebHookService::class)->notifyInGeneral(Carbon::now() . ' : DAMN STH went WRONG during importing Vaccine : \n\n' . $exception->getMessage(), WebHookService::COLOR['RED']);
            }
        } catch (Throwable $exception) {
            if (app()->environment('production')) {
                app(WebHookService::class)->notifyInGeneral(Carbon::now() . ' : DAMN STH went WRONG during importing Vaccine : \n\n' . $exception->getMessage(), WebHookService::COLOR['RED']);
            }
        }

        return 0;
    }


    public function truncateDB()
    {
        DB::table('vax_malaysias')->truncate();
        DB::table('vax_states')->truncate();
        DB::table('vax_reg_states')->truncate();
        DB::table('vax_reg_malaysias')->truncate();
    }

    /**
     * @throws Throwable
     */
    public function importVaxMalaysia(): int
    {
        $records = $this->vaxService->getVaxMalaysia();

        if (DB::table('vax_malaysias')->count() == $records->count()) {
            $this->info('[VaxMalaysia] : ' . 'Not inject as the data is the same.');
            return 0;
        }

        DB::table('vax_malaysias')->truncate();

        $this->info('[VaxMalaysia] : ' . 'Injecting...');

        $this->withProgressBar($records, function ($records) {
            DB::table('vax_malaysias')->insert($records);
        });

        return 0;
    }

    public function importVaxState(): int
    {
        $records = $this->vaxService->getVaxState();

        if (DB::table('vax_states')->count() == $records->count()) {
            $this->info('[VaxState] : ' . 'Not inject as the data is the same.');
            return 0;
        }

        DB::table('vax_states')->truncate();

        $this->info('[VaxState] : ' . 'Injecting...');

        $this->withProgressBar($records, function ($records) {
            DB::table('vax_states')->insert($records);
        });

        return 0;
    }

    public function importVaxRegState(): int
    {
        $records = $this->vaxService->getVaxRegState();

        if (DB::table('vax_reg_states')->count() == $records->count()) {
            $this->info('[VaxRegState] : ' . 'Not inject as the data is the same.');
            return 0;
        }

        DB::table('vax_reg_states')->truncate();

        $this->info('[VaxRegState] : ' . 'Injecting...');

        $this->withProgressBar($records, function ($records) {
            DB::table('vax_reg_states')->insert($records);
        });

        return 0;
    }

    public function importVaxRegMalaysia(): int
    {
        $records = $this->vaxService->getVaxRegMalaysia();

        if (DB::table('vax_reg_malaysias')->count() == $records->count()) {
            $this->info('[VaxRegMalaysia] : ' . 'Not inject as the data is the same.');
            return 0;
        }

        DB::table('vax_reg_malaysias')->truncate();

        $this->info('[VaxRegMalaysia] : ' . 'Injecting...');

        $this->withProgressBar($records, function ($records) {
            DB::table('vax_reg_malaysias')->insert($records);
        });

        return 0;
    }
}
