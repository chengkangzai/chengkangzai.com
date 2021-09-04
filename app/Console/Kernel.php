<?php

namespace App\Console;

use App\Console\Commands\ImportCOVIDDataFromGithub;
use App\Console\Commands\ImportVaxDataFromGithub;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        ImportCOVIDDataFromGithub::class,
        ImportVaxDataFromGithub::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('import:covid')->hourly();
        $schedule->command('import:vaccine')->hourly();
        $schedule->command('backup:monitor')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
