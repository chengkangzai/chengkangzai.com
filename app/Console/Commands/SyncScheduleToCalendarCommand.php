<?php

namespace App\Console\Commands;

use App\Jobs\AddAPUScheduleToCalenderJob;
use App\Models\ScheduleConfig;
use Illuminate\Console\Command;

class SyncScheduleToCalendarCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calendar:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'run sync command to sync apu schedule to calendar';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
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
