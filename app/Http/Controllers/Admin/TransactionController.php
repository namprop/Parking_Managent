<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Service\Vehicle\VehicleServiceInterface;
use App\Service\VehicleType\VehicleTypeServiceInterface;
use App\Models\Transaction;
use App\Service\Transaction\TransactionServiceInterface;
use App\Utilities\Constant;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //

    protected $vehicleService;
    protected $vehicleTypeService;
    protected $transactionService;


    public function __construct(VehicleServiceInterface $vehicleService, VehicleTypeServiceInterface $vehicleTypeService, TransactionServiceInterface $transactionService)
    {
        $this->vehicleTypeService = $vehicleTypeService;
        $this->vehicleService = $vehicleService;
        $this->transactionService = $transactionService;
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
        $timeOut = Carbon::now();
    
        $hours = $timeIn->diffInHours($timeOut);
        $days = ceil($hours / 24);
        $days = max($days, 1);
    
        $rate = match ($vehicle->vehicleType->vehicle_name) {
            'Xe Dap' => 1000,
            'Xe May' => 3000,
            'O To' => 10000,
            default => 2000,
        };
    
        $tienmat = 'tiền mặt';
        $amount = $rate * $days;
    
        return view('admin.transaction.confirm', compact('vehicle', 'amount', 'timeIn', 'timeOut', 'vehicleTypes', 'days', 'rate', 'tienmat'));
    }
    

    public function pay(Request $request, $id)
    {
        $vehicle = $this->vehicleService->find($id);

        $data = $request->all();
        $this->transactionService->create($data);
        $vehicle->delete();

        $view = Auth::user()->level === Constant::user_level_admin
        ? 'admin/vehicle'
        :'employee/vehicle';
        return redirect($view);
    }

    public function destroy(string $id)
    {
        
        $this->transactionService->delete($id);

        return redirect('/admin/transaction');
    }
}
