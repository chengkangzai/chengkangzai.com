<?php

namespace App\Console\Commands;

use App;
use App\Console\Services\ImportPandemicService;
use App\Console\Services\InjestStation;
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
use App\Models\Covid\VaxMalaysia;
use App\Models\Covid\VaxRegMalaysia;
use App\Models\Covid\VaxRegState;
use App\Models\Covid\VaxState;
use App\Notifications\ImportTaskFailedNotification;
use App\Notifications\ImportTaskSuccessNotification;
use App\Notifications\Notifiable\SuperAdminNotifiable;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;

class ImportPandemicDataCommand extends Command
{
    protected $signature = 'import:pandemic {--force : Truncate existing data before importing}';

    protected $description = 'Import All Malaysia Pandemic Data From Github';
    private array $models;

    public function __construct()
    {
        parent::__construct();

        $this->models = [
            CasesMalaysia::class,
            CasesState::class,
            DeathsState::class,
            DeathsMalaysia::class,
            TestMalaysia::class,
            TestState::class,
            Cluster::class,
            Hospital::class,
            ICU::class,
            PKRC::class,
            Population::class,
            VaxMalaysia::class,
            VaxState::class,
            VaxRegMalaysia::class,
            VaxRegState::class,
        ];
    }

    public function handle(): int
    {
        try {
            $time = microtime(true);
            $injectStation = new InjestStation($this);

            if ($this->option('force')) {
                $confirm = $this->confirm('Are you sure you want to truncate existing data?', false);
                if ($confirm) {
                    ImportPandemicService::clearCache();
                    $injectStation->truncate($this->models);
                } else {
                    $this->info('Import cancelled');

                    return self::INVALID;
                }
            }

            $this->info('Getting data from Github...');
            $service = new ImportPandemicService();

            foreach ($this->models as $model) {
                $record = $service->factory($model);
                $injectStation->inject($record, $model);
            }
            $runTime = microtime(true) - $time;
            $this->info("Import completed in {$runTime} seconds");

            if (App::isProduction()) {
                Notification::send(new SuperAdminNotifiable(), new ImportTaskSuccessNotification(self::class, $this->models, $runTime));
            }
        } catch (Exception $e) {
            $this->error($e->getMessage());
            if (App::isProduction()) {
                Notification::send(new SuperAdminNotifiable(), new ImportTaskFailedNotification($e->getMessage()));
            }

            return self::INVALID;
        }


        return self::SUCCESS;
    }
}
