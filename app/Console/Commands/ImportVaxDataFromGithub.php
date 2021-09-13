<?php

namespace App\Console\Commands;

use App\Http\Services\ImportCovidFromGithubService;
use App\Http\Services\ImportVaccineFromGithubService;
use App\Http\Services\WebHookService;
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
     * @return void
     */
    public function handle()
    {
        try {
            if ($this->option('force')) {
                $this->line('Truncating DB...');
                $this->truncateDB();
            }
            $this->importVaxMalaysia();
            $this->importVaxState();
            $this->importVaxRegState();
            $this->importVaxRegMalaysia();

            cache()->clear();
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
    public function importVaxMalaysia()
    {
        $records = $this->vaxService->getVaxMalaysia();

        if (DB::table('vax_malaysias')->count() == $records->count()) {
            $this->info('[VaxMalaysia] : ' . 'Not inject as the data is the same.');
            return;
        }

        DB::table('vax_malaysias')->truncate();

        $this->info('[VaxMalaysia] : ' . 'Injecting...');

        $chunks = $records->chunk(500);

        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table('vax_malaysias')->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    public function importVaxState()
    {
        $records = $this->vaxService->getVaxState();

        if (DB::table('vax_states')->count() == $records->count()) {
            $this->info('[VaxState] : ' . 'Not inject as the data is the same.');
            return;
        }

        DB::table('vax_states')->truncate();

        $this->info('[VaxState] : ' . 'Injecting...');

        $chunks = $records->chunk(500);

        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table('vax_states')->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    public function importVaxRegState()
    {
        $records = $this->vaxService->getVaxRegState();

        if (DB::table('vax_reg_states')->count() == $records->count()) {
            $this->info('[VaxRegState] : ' . 'Not inject as the data is the same.');
            return;
        }

        DB::table('vax_reg_states')->truncate();

        $this->info('[VaxRegState] : ' . 'Injecting...');

        $chunks = $records->chunk(500);

        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table('vax_reg_states')->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }

    public function importVaxRegMalaysia()
    {
        $records = $this->vaxService->getVaxRegMalaysia();

        if (DB::table('vax_reg_malaysias')->count() == $records->count()) {
            $this->info('[VaxRegMalaysia] : ' . 'Not inject as the data is the same.');
            return;
        }

        DB::table('vax_reg_malaysias')->truncate();

        $this->info('[VaxRegMalaysia] : ' . 'Injecting...');

        $chunks = $records->chunk(500);

        $this->output->progressStart($chunks->count());

        foreach ($chunks as $chunk) {
            DB::table('vax_reg_malaysias')->insert($chunk->toArray());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
    }
}
