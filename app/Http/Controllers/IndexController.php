<?php

namespace App\Http\Controllers;

use App\Service\User\UserServiceInterface;
use App\Service\Vehicle\VehicleServiceInterface;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    private $vehicleService;
    private $userService;

    public function __construct(VehicleServiceInterface $vehicleService, UserServiceInterface $userService)
    {
        $this->userService = $userService;
        $this->vehicleService = $vehicleService;
        
    }

    public function show($id)
    {
        $vehicles = $this->vehicleService->all();

        // dd($vehicles);
        return view('front.parking.index',compact('vehicles'));
    }
}
