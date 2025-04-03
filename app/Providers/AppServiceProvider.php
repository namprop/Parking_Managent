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
use App\Repositories\ParkingSlot\ParkingSlotRepository;
use App\Repositories\ParkingSlot\ParkingSlotRepositoryInterface;
use App\Service\ParkingSlot\ParkingSlotService;
use App\Service\ParkingSlot\ParkingSlotServiceInterface;
use App\Repositories\ParkingTicket\ParkingTicketRepository;
use App\Repositories\ParkingTicket\ParkingTicketRepositoryInterface;
use App\Service\ParkingTicket\ParkingTicketService;
use App\Service\ParkingTicket\ParkingTicketServiceInterface;

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

        // Parking Slot
        $this->app->singleton(
            ParkingSlotRepositoryInterface::class,
            ParkingSlotRepository::class
        );

        $this->app->singleton(
            ParkingSlotServiceInterface::class,
            ParkingSlotService::class
        );

        // Parking Ticket
        $this->app->singleton(
            ParkingTicketRepositoryInterface::class,
            ParkingTicketRepository::class
        );

        $this->app->singleton(
            ParkingTicketServiceInterface::class,
            ParkingTicketService::class
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
