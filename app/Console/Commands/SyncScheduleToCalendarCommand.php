<?php

namespace App\Console\Commands;

use App\Console\Services\CalendarService;
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
    protected $description = 'run sync command to sync';
    private CalendarService $calenderService;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->calenderService = new CalendarService();
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Starting sync schedule to calendar');
        $configs = ScheduleConfig::all();

        $this->output->progressStart($configs->count());

        foreach ($configs as $config) {
            $this->calenderService->addEvent($config, $config->user()->get()->first());
            $this->output->progressAdvance();
        }

        $this->output->progressFinish();
        $this->info('Sync schedule to calendar successfully');

        return 0;
    }
}
