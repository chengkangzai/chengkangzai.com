<?php

namespace App\Console\Commands;

use App\Http\Services\ImportCovidFromGithubService;
use App\Http\Services\ImportVaccineFromGithubService;
use App\Http\Services\WebHookService;
use App\Models\Covid\VaxMalaysia;
use App\Models\Covid\VaxRegMalaysia;
use App\Models\Covid\VaxRegState;
use App\Models\Covid\VaxState;
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
    protected $signature = 'import:vaccine';

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
//            DB::transaction(function () {

                $this->line('');
                $this->warn('Truncating DB');
                $this->truncateDB();

                $this->line('');
                $this->info('Importing Vax Malaysia');
                $this->importVaxMalaysia();

                $this->line('');
                $this->info('Importing Vax per State');
                $this->importVaxState();

                $this->line('');
                $this->info('Importing Vax Reg per State');
                $this->importVaxRegState();

                $this->line('');
                $this->info('Importing Vax Reg Malaysia');
                $this->importVaxRegMalaysia();
//            });

            Cache::clear();
            if (app()->environment('production')) {
                app(WebHookService::class)->notifyInSpam(Carbon::now() . ' : Covid Data Successfully Inserted', WebHookService::COLOR['GREEN']);
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
        DB::table('vax_reg_malaysias')->truncate();
        DB::table('vax_reg_states')->truncate();
    }

    public function importVaxMalaysia()
    {
        $records = $this->vaxService->getVaxMalaysia();

        $this->withProgressBar($records, function ($records) {

            VaxMalaysia::insert($records);

        });
    }

    public function importVaxState()
    {
        $records = $this->vaxService->getVaxState();

        $this->withProgressBar($records, function ($records) {

            VaxState::insert($records);

        });
    }

    public function importVaxRegState()
    {
        $records = $this->vaxService->getVaxRegState();

        $this->withProgressBar($records, function ($records) {

            VaxRegState::insert($records);

        });
    }


    public function importVaxRegMalaysia()
    {
        $records = $this->vaxService->getVaxRegMalaysia();

        $this->withProgressBar($records, function ($records) {

            VaxRegMalaysia::insert($records);

        });
    }
}
