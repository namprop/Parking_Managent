<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Vehicle\VehicleRepository;
use App\Repositories\Vehicle\VehicleRepositoryInterface;
use App\Service\Vehicle\VehicleService;
use App\Service\Vehicle\VehicleServiceInterface;

use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Service\User\UserService;
use App\Service\User\UserServiceInterface;

use App\Repositories\Transaction\TransactionRepository;
use App\Repositories\Transaction\TransactionRepositoryInterface;
use App\Service\Transaction\TransactionService;
use App\Service\Transaction\TransactionServiceInterface;

use App\Repositories\VehicleType\VehicleTypeRepository;
use App\Repositories\VehicleType\VehicleTypeRepositoryInterface;
use App\Service\VehicleType\VehicleTypeService;
use App\Service\VehicleType\VehicleTypeServiceInterface;

use App\Repositories\PricingRule\PricingRuleRepository;
use App\Repositories\PricingRule\PricingRuleRepositoryInterface;
use App\Service\PricingRule\PricingRuleService;
use App\Service\PricingRule\PricingRuleServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Vehicle
        $this->app->singleton(
            VehicleRepositoryInterface::class,
            VehicleRepository::class
        );

        $this->app->singleton(
            VehicleServiceInterface::class,
            VehicleService::class
        );

        // User
        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class
        );

        $this->app->singleton(
            UserServiceInterface::class,
            UserService::class
        );

        // Transaction
        $this->app->singleton(
            TransactionRepositoryInterface::class,
            TransactionRepository::class
        );

        $this->app->singleton(
            TransactionServiceInterface::class,
            TransactionService::class
        );

        // VehicleType
        $this->app->singleton(
            VehicleTypeRepositoryInterface::class,
            VehicleTypeRepository::class
        );

        $this->app->singleton(
            VehicleTypeServiceInterface::class,
            VehicleTypeService::class
        );

        $this->app->singleton(
            PricingRuleRepositoryInterface::class,
            PricingRuleRepository::class
        );

        $this->app->singleton(
            PricingRuleServiceInterface::class,
            PricingRuleService::class
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
