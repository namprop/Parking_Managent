<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = "transactions";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id');
    }

    protected $fillable = [
        'sender', 'vehicle_name', 'license_plate', 'check_in', 'check_out', 'price',
        'payment_method', 'employee_name' 
    ];


}
