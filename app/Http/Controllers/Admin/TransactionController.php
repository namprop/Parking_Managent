<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Service\Vehicle\VehicleServiceInterface;
use App\Service\VehicleType\VehicleTypeServiceInterface;
use App\Models\Transaction;
use App\Service\Transaction\TransactionServiceInterface;

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





    public function confirm($id)
    {
        $vehicle = $this->vehicleService->find($id);
        $vehicleTypes = $this->vehicleTypeService->all();

        $timeIn = Carbon::parse($vehicle->ngaygui);
        $timeOut = Carbon::now();


        $hours = $timeIn->diffInHours($timeOut);
        $days = $timeIn->diffInDays($timeOut);
        $days = ceil($hours / 24);
        $days = max($days, 1);


        $rate = match ($vehicle->vehicleType->tenloaixe) {
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

    $data = [
        'vehicle_id' => $vehicle->id,
        'thoigianra' => $request->input('thoigianra'),
        'sotien' => $request->input('sotien'),
        'hinhthucthanhtoan' => $request->input('hinhthucthanhtoan'),
    ];

    try {
        $this->transactionService->create($data);
        $vehicle->delete(); 
        return redirect('admin/vehicle')->with('success', 'Xác nhận thành công!');
    } catch (\Exception $e) {
        return back()->with('error', 'Không thể tạo giao dịch: ' . $e->getMessage());
    }
}

}
