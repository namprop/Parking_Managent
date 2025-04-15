<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\PricingRule\PricingRuleServiceInterface;
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


    public function __construct(VehicleServiceInterface $vehicleService, VehicleTypeServiceInterface $vehicleTypeService, TransactionServiceInterface $transactionService, PricingRuleServiceInterface $pricingRuleService)
    {
        $this->vehicleTypeService = $vehicleTypeService;
        $this->vehicleService = $vehicleService;
        $this->transactionService = $transactionService;
        $this->pricingRuleService = $pricingRuleService;
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
        $day = Carbon::parse($timeIn)->format('l');
        $timeOut = Carbon::now();
        $hoursParked = max($timeIn->diffInHours($timeOut), 1);
        $hoursParked = round($hoursParked, 0);
        $rule = $this->pricingRuleService->getPriceFor($vehicle->vehicle_types_id, $timeIn); 

        $basePrice = $rule ? $rule->price : 0;  
        $multiplier = ceil($hoursParked / 24);
        $totalPrice = $basePrice * $multiplier;
        
        $pricingDetails = [[
            'hours' => $hoursParked,
            'time_in' => $timeIn->format('d/m/Y H:i'),
            'time_out' => $timeOut->format('d/m/Y H:i'),
            'multiplier' => $multiplier,
            'price' => $totalPrice,
        ]];

        $tienmat = 'tiền mặt';

        return view('admin.transaction.confirm', compact(
            'vehicle',
            'vehicleTypes',
            'timeIn',
            'timeOut',
            'hoursParked',
            'totalPrice',
            'tienmat',
            'pricingDetails',
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
