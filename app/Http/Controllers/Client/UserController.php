<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Service\Vehicle\VehicleServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
