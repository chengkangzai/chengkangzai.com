<?php

namespace App\Console;

use App\Console\Commands\ImportCOVIDDataFromGithub;
use App\Console\Commands\ImportVaxDataFromGithub;
use App\Console\Commands\SyncScheduleToCalendarCommand;
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
        ImportVaxDataFromGithub::class,
        SyncScheduleToCalendarCommand::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('import:covid')->hourly()->between('06:00', '00:00');
        $schedule->command('import:vaccine')->hourly()->between('06:00', '00:00');

        $schedule->command('backup:run')->daily()->at('03:00');
        $schedule->command('backup:clean')->daily()->at('03:00');
        $schedule->command('backup:monitor')->daily()->at('03:00');

        $schedule->command('sitemap:generate')->daily();

        $schedule->command('schedule:sync')->daily();
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
