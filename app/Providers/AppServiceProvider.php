<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Application;
use App\Models\User;
use App\Models\Job;
use App\Observers\ApplicationObserver;
use App\Observers\DateObserver;
use App\Observers\UserStatusObserver;

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
        Application::observe(ApplicationObserver::class);
        User::observe(UserStatusObserver::class);
        Job::observe(DateObserver::class);
    }
}
