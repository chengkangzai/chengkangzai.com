<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSiteMap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate the sitemap.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        SitemapGenerator::create('https://pandemic.chengkangzai.com/')
            ->getSitemap()
            ->add(
                Url::create(route('public.index'))
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.8)
            )
            ->add(
                Url::create(route('public.resume'))
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.8)
            )
            ->add(
                Url::create('https://github.com/chengkangzai')
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority(0.8)
            )
            ->writeToFile(public_path('sitemap.xml'));
    }
}
