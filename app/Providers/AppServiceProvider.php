<?php

namespace App\Providers;

use App\Models\Vehicle;
use App\Repositories\Vehicle\VehicleRepository;
use App\Repositories\Vehicle\VehicleRepositoryInterface;
use App\Service\Vehicle\VehicleService;
use App\Service\Vehicle\VehicleServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->singleton(
            VehicleRepositoryInterface::class,
            VehicleRepository::class
        );

        $this->app->singleton(
            VehicleServiceInterface::class,
            VehicleService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
