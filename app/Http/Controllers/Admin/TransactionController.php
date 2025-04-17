<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Service\PriceList\PriceListServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Service\Vehicle\VehicleServiceInterface;
use App\Service\VehicleType\VehicleTypeServiceInterface;
use App\Service\Transaction\TransactionServiceInterface;
use App\Utilities\Constant;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //

    protected $vehicleService;
    protected $vehicleTypeService;
    protected $transactionService;
    protected $pricingRuleService;
    protected $priceListService;


    public function __construct(
        VehicleServiceInterface $vehicleService,
        VehicleTypeServiceInterface $vehicleTypeService,
        TransactionServiceInterface $transactionService,
        PriceListServiceInterface $priceListService
    ) {
        $this->vehicleTypeService = $vehicleTypeService;
        $this->vehicleService = $vehicleService;
        $this->transactionService = $transactionService;
        $this->priceListService = $priceListService;
    }


    public function index()
    {
        $transactions = $this->transactionService->all();

        return view('admin.transaction.index', compact('transactions'));
    }

    public function confirm($id)
{
    $vehicle = $this->vehicleService->find($id);
    $vehicleTypes = $this->vehicleTypeService->all();
    $timeIn = Carbon::parse($vehicle->check_in);
    $timeOut = Carbon::parse($vehicle->check_out ?? Carbon::now());
    $hoursParked = ceil($timeIn->floatDiffInRealHours($timeOut));

    $vehicleTypeId = $vehicle->vehicle_type_id ?? $vehicle->vehicle_types_id;

    $priceResult = $this->priceListService->getPrice($vehicleTypeId, $timeIn, $timeOut);


    $tienmat = 'tiền mặt';

    return view('admin.transaction.confirm', compact(
        'vehicle',
        'vehicleTypes',
        'timeIn',
        'timeOut',
        'hoursParked',
        'tienmat',
        'priceResult'
    ));
}


    public function pay(Request $request, $id)
    {
        $vehicle = $this->vehicleService->find($id);

        $data = $request->all();
        $this->transactionService->create($data);
        $vehicle->delete();

        $view = Auth::user()->level === Constant::user_level_admin
            ? 'admin/vehicle'
            : 'employee/vehicle';
        return redirect($view);
    }

    public function destroy(string $id)
    {

        $this->transactionService->delete($id);

        return redirect('/admin/transaction');
    }
}
