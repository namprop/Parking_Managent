<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Vehicle\VehicleServiceInterface;
use App\Service\VehicleType\VehicleTypeServiceInterface;
use App\Models\User;
use App\Utilities\Constant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $vehicleService;
    protected $vehicleTypeService;

    public function __construct(VehicleServiceInterface $vehicleService, VehicleTypeServiceInterface $vehicleTypeService)
    {
        $this->vehicleTypeService = $vehicleTypeService;
        $this->vehicleService = $vehicleService;
    }

    public function index(Request $request)
    {
        $vehicleTypes = $this->vehicleTypeService->all();
        $keyword = $request->input('keyword', '');
        $vehicles = $this->vehicleService->searchAndPaginate('sender_name', $keyword);

        return view('admin.vehicle.index', compact('vehicles', 'vehicleTypes', 'keyword'));
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $vehicleTypes = $this->vehicleTypeService->all();
        $vehicles = $this->vehicleService->all();
        $users = User::whereNotNull('account_code')->get();

        return view('admin.vehicle.create', compact('vehicles', 'vehicleTypes', 'users'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
    
        if ($request->filled('account_code')) {
            // Tìm user theo mã
            $user = User::where('account_code', $request->input('account_code'))->first();
    
            if ($user) {
                $data['users_id'] = $user->id;
                $data['sender_name'] = $user->name;
            } else {
                $data['users_id'] = null;
            }
        } else {

            $data['users_id'] = null;
        }
        unset($data['account_code']);
        $this->vehicleService->create($data);

        $view = Auth::user()->level === Constant :: user_level_admin
        ? 'admin/vehicle'
        : 'employee/vehicle';
    
        return redirect($view)->with('success', 'Thêm xe thành công');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
