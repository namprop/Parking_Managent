<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\PricingRule\PricingRuleServiceInterface;
use App\Service\VehicleType\VehicleTypeServiceInterface;
use Illuminate\Http\Request;

class PricingRuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $pricingRuleService;
    protected $vehicleTypeService;

    public function __construct(PricingRuleServiceInterface $pricingRuleService, VehicleTypeServiceInterface $vehicleTypeService)
    {
        $this->pricingRuleService = $pricingRuleService;
        $this->vehicleTypeService = $vehicleTypeService;
    }


    public function index()
    {
        //
        $pricingRule = $this->pricingRuleService->all();
        return view('admin.pricingrule.index', compact('pricingRule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.pricingrule.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $this->pricingRuleService->create($data);
        return redirect('/admin/pricingrule');
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
        $pricingRule = $this->pricingRuleService->find($id);

        return view('admin.pricingrule.edit', compact('pricingRule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = request()->all();
        $this->pricingRuleService->update($data, $id);


        return redirect('/admin/pricingrule');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $this->pricingRuleService->delete($id);

        return redirect('/admin/pricingrule');
    }
}
