<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Vehicle\VehicleServiceInterface;
use App\Service\VehicleType\VehicleTypeServiceInterface;
use Illuminate\Http\Request;

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

    public function index()
    {
        $vehicleTypes = $this->vehicleTypeService->all();
        $vehicles = $this->vehicleService->all();
        return view('admin.vehicle.index', compact('vehicles', 'vehicleTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
