<?php

namespace App\Console\Commands;

use App\Models\ScheduleConfig;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\GoogleCalendar\Event;

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
    public function handle()
    {
        //one month before, one month after
        $event = Event::get(Carbon::now()->subMonth(), Carbon::now()->addMonth());

        $config = ScheduleConfig::all();
//TODO


    }
}
