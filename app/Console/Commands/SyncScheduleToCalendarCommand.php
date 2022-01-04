<?php

namespace App\Console\Commands;

use App\Jobs\AddAPUScheduleToCalenderJob;
use App\Models\ScheduleConfig;
use Illuminate\Console\Command;

class SyncScheduleToCalendarCommand extends Command
{
    protected $signature = 'calendar:sync';

    protected $description = 'run sync command to sync apu schedule to calendar';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(): int
    {
        $this->info('Starting sync schedule to calendar');
        $configs = ScheduleConfig::with('user')->get();

        $this->output->progressStart($configs->count());

        foreach ($configs as $config) {
            AddAPUScheduleToCalenderJob::dispatch($config->user, $config);
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
        $this->info('dispatch Sync schedule to job successfully');

        return self::SUCCESS;
    }
}
