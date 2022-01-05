<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // for Maria DB
        Schema::defaultStringLength(191);
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        $this->registerClearCacheOnModel();

    }

    public function registerClearCacheOnModel()
    {
        //
    }
}
