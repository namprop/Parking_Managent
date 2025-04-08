<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Service\User\UserServiceInterface;
use App\Service\Vehicle\VehicleServiceInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    protected $vehicleService;

    public function __construct(VehicleServiceInterface $vehicleService)
    {
        $this->vehicleService = $vehicleService;
    }


    public function dashboard(Request $request)
    {

        $user = Auth::user();
        $userId = $user->id;
        $vehicles = Vehicle::with('user')
            ->where('users_id', $userId)
            ->get();

        if ($vehicles->isNotEmpty()) {
            return view('front/parking/index', compact('user', 'vehicles'));
        }


        return back()->with('notification', 'Xe của bạn hiện không còn trong bãi');

    }
}
