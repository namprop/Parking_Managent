<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use App\Service\VehicleType\VehicleTypeServiceInterface;
use Illuminate\Http\Request;

class VehicleTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $vehicleTypeService;
    public function __construct(VehicleTypeServiceInterface $vehicleTypeService)
    {
        $this->vehicleTypeService = $vehicleTypeService;
    }
    public function index()
    {
        //
        $vehicleTypes = $this->vehicleTypeService->all();
        return view('admin.vehicletype.index', compact('vehicleTypes'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.vehicletype.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $this->vehicleTypeService->create($data);
        return redirect('admin/vehicletype');
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
        $this->vehicleTypeService->delete($id);
        return redirect('admin/vehicletype');
    }
}
