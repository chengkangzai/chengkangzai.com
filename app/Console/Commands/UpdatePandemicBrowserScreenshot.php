<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Browsershot\Exceptions\CouldNotTakeBrowsershot;
use Wnx\SidecarBrowsershot\BrowsershotLambda;

class UpdatePandemicBrowserScreenshot extends Command
{
    protected $signature = 'take:screenshot';

    protected $description = 'Take Screenshot of Pandemic Page';

    public function handle(): int
    {
        $this->info('Taking screenshot...');
        try {
            BrowsershotLambda::url('https://chengkangzai.com/pandemic')
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
