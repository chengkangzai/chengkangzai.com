<?php

namespace App\Console\Commands;

use App\Console\Services\ImportVaccineFromGithubService;
use App\Console\Services\InjestStation;
use App\Models\Covid\VaxMalaysia;
use App\Models\Covid\VaxRegMalaysia;
use App\Models\Covid\VaxState;
use App\Notifications\ImportTaskFailedNotification;
use App\Notifications\ImportTaskSuccessNotification;
use App\Notifications\Notifiable\SuperAdminNotifiable;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Notification;
use Throwable;

class ImportVaxDataFromGithub extends Command
{
    protected $signature = 'import:vaccine {--force}';

    protected $description = 'Import Vaccination Data From Github';

    private ImportVaccineFromGithubService $vaxService;
    private array $modelArray;
    private InjestStation $injestStation;

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        try {
            $time = microtime(true);
            $this->info('Initiating ...');
            $this->vaxService = new ImportVaccineFromGithubService();
            $this->injestStation = new InjestStation($this);

            if ($this->option('force')) {
                $this->line('Truncating DB...');
                $this->truncateDB();
                $this->line('Forgetting Cache...');
                $this->vaxService->clearCache();
            }
            $this->importVaxMalaysia();
            $this->importVaxState();
            $this->importVaxRegState();
            $this->importVaxRegMalaysia();

            $runTime = microtime(true) - $time;
            $this->info('Importing vaccine data from Github completed in ' . $runTime . ' seconds');
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
        $this->injestStation->inject($records, $tableName, $modelName);
        $this->modelArray[] = $modelName;
    }
}
