<?php

namespace App\Providers;

use App\Services\WolfService;
use Illuminate\Support\ServiceProvider;
use App\Services\Interfaces\WolfServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(WolfServiceInterface::class, WolfService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
