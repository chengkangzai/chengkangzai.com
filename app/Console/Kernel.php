<?php

namespace App\Console;

use App\Console\Commands\GenerateSiteMap;
use App\Console\Commands\SyncScheduleToCalendarCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Spatie\Backup\Commands\BackupCommand;
use Spatie\Backup\Commands\CleanupCommand;
use Spatie\Backup\Commands\MonitorCommand;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        //
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command(BackupCommand::class)->daily()->at('03:00');
        $schedule->command(CleanupCommand::class)->daily()->at('03:00');
        $schedule->command(MonitorCommand::class)->daily()->at('03:00');

        $schedule->command(GenerateSiteMap::class)->daily();

        $schedule->command(SyncScheduleToCalendarCommand::class)->saturdays()->at('06:00');
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
