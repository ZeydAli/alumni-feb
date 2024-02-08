<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin', function (User $user) {
            return strcasecmp($user->role->name, 'User') === 0;
        });

        Gate::define('alumni', function (User $user) {
            return strcasecmp($user->role->name, 'Alumni') === 0;
        });
    }
}
