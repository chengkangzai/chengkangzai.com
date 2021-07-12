<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\Works;
use Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Spatie\Tags\Tag;
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
        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        $this->registerClearCacheOnModel();

    }

    public function registerClearCacheOnModel(){
        Post::created(function () {
            Cache::clear();
        });

        Post::updated(function () {
            Cache::clear();
        });

        Works::created(function () {
            Cache::clear();
        });

        Works::updated(function () {
            Cache::clear();
        });

        Tag::created(function () {
            Cache::clear();
        });

        Tag::updated(function () {
            Cache::clear();
        });
    }
}
