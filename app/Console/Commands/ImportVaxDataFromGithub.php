<?php

namespace App\Console\Commands;

use App\Console\Services\ImportVaccineFromGithubService;
use App\Models\Covid\VaxMalaysia;
use App\Models\Covid\VaxRegMalaysia;
use App\Models\Covid\VaxState;
use App\Notifications\ImportTaskFailedNotification;
use App\Notifications\ImportTaskSuccessNotification;
use App\Notifications\Notifiable\SuperAdminNotifiable;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Notification;
use Throwable;

class ImportVaxDataFromGithub extends Command
{
    protected $signature = 'import:vaccine {--force}';

    protected $description = 'Import Vaccination Data From Github';

    private ImportVaccineFromGithubService $vaxService;
    private array $modelArray;

    public function __construct()
    {
        parent::__construct();
        $this->vaxService = app(ImportVaccineFromGithubService::class);
    }

    public function handle()
    {
        try {
            $time = microtime(true);
            if ($this->option('force')) {
                $this->line('Truncating DB...');
                $this->truncateDB();
            }
            $this->importVaxMalaysia();
            $this->importVaxState();
            $this->importVaxRegState();
            $this->importVaxRegMalaysia();

            Cache::clear();
            $runTime = microtime(true) - $time;
            $this->line('Importing vaccine data from Github completed in ' . $runTime . ' seconds');
            if (app()->environment('production')) {
                Notification::send(new SuperAdminNotifiable(), new ImportTaskSuccessNotification(ImportVaxDataFromGithub::class, $this->modelArray, $runTime));
            }
        } catch (Throwable|Exception $exception) {
            if (app()->environment('production')) {
                $runTime = microtime(true) - $time;
                Notification::send(new SuperAdminNotifiable(), new ImportTaskFailedNotification($exception, $runTime));
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

        $this->modelArray[] = $modelName;
        $this->output->progressFinish();
    }
}
