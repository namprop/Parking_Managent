<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    protected $table = "vehicles";
    protected $primaryKey = "id"; // Mã vé
    protected $guarded = [];

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class, 'vehicle_types_id', 'id');
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'vehicle_id', 'id');
    }

    
}
