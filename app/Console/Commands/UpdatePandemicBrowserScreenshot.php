<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Browsershot\Browsershot;
use Spatie\Browsershot\Exceptions\CouldNotTakeBrowsershot;

class UpdatePandemicBrowserScreenshot extends Command
{
    protected $signature = 'take:screenshot';

    protected $description = 'Take Screenshot of Pandemic Page';

    public function handle(): int
    {
        $this->info('Taking screenshot...');
        try {
            Browsershot::url('https://chengkangzai.com.test/pandemic##covid-stat')
                ->select('#covid-stat')
                ->windowSize(1920, 1080)
                ->waitUntilNetworkIdle()
                ->save(public_path('src/ss_pandemic.png'));
        } catch (CouldNotTakeBrowsershot $e) {
            $this->error($e->getMessage());
            return self::FAILURE;
        }
        $this->info('Screenshot taken!');
        return self::SUCCESS;
    }
}
