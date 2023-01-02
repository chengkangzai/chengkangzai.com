<?php

namespace App\Providers;

use App\Models\ScheduleConfig;
use App\Models\User;
use App\Models\Works;
use App\Policies\RolePolicy;
use App\Policies\ScheduleConfigPolicy;
use App\Policies\UserPolicy;
use App\Policies\WorksPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Spatie\Permission\Models\Role;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Role::class => RolePolicy::class,
        User::class => UserPolicy::class,
        Works::class => WorksPolicy::class,
        ScheduleConfig::class => ScheduleConfigPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
