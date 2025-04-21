<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PriceList;
use App\Service\PriceList\PriceListServiceInterface;
use App\Service\VehicleType\VehicleTypeServiceInterface;
use App\Utilities\ValidationRules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PriceListController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $priceListService;

    protected $vehicleTypeService;

    public function __construct(PriceListServiceInterface $priceListService, VehicleTypeServiceInterface $vehicleTypeService)
    {
        $this->vehicleTypeService = $vehicleTypeService;
        $this->priceListService = $priceListService;
    }


    public function index()
    {
        $pricelist = $this->priceListService->all()
            ->sortBy('duration')
            ->groupBy('vehicle_type_id');

        $warnings = $this->priceListService->checkErrorSort($pricelist);

        return view('admin.pricelist.index', compact('pricelist', 'warnings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pricelist = $this->priceListService->all();
        $vehicleTypes = $this->vehicleTypeService->all();

        return view('admin.pricelist.create', compact('pricelist', 'vehicleTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make(
            $request->all(),
            ValidationRules::rulePriceList(),
            ValidationRules::messages()
        );

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = $request->all();
        $this->priceListService->create($data);
        return redirect('/admin/pricelist');
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
        

        $pricelist = $this->priceListService->find($id);
        

        return view('admin.pricelist.edit', compact('pricelist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->all();

        $this->priceListService->update($data, $id);

        return redirect('/admin/pricelist');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $this->priceListService->delete($id);
        return redirect('/admin/pricelist');
    }
}
