<?php

namespace App\Console\Commands;

use App\Console\Services\ImportVaccineFromGithubService;
use App\Http\Services\WebHookService;
use App\Models\Covid\VaxMalaysia;
use App\Models\Covid\VaxRegMalaysia;
use App\Models\Covid\VaxState;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Throwable;

class ImportVaxDataFromGithub extends Command
{
    protected $signature = 'import:vaccine {--force}';

    protected $description = 'Import Vaccination Data From Github';

    private ImportVaccineFromGithubService $vaxService;

    public function __construct()
    {
        parent::__construct();
        $this->vaxService = app(ImportVaccineFromGithubService::class);
    }

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

            Cache::clear();
            if (app()->environment('production')) {
                app(WebHookService::class)->notifyInSpam(Carbon::now() . ' : Vaccine Data Successfully Inserted', WebHookService::COLOR['GREEN']);
            }
        } catch (Throwable|Exception $exception) {
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

    public function importVaxMalaysia()
    {
        $records = $this->vaxService->getVaxMalaysia();
        $this->inject($records, 'vax_malaysias', VaxMalaysia::class);
    }

    public function importVaxState()
    {
        $records = $this->vaxService->getVaxState();
        $this->inject($records, 'vax_states', VaxState::class);
    }

    public function importVaxRegState()
    {
        $records = $this->vaxService->getVaxRegState();
        $this->inject($records, 'vax_reg_states', VaxRegMalaysia::class);
    }

    public function importVaxRegMalaysia()
    {
        $records = $this->vaxService->getVaxRegMalaysia();
        $this->inject($records, 'vax_reg_malaysias', VaxRegMalaysia::class);

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
