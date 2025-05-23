<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    protected $table = "vehicles";
    protected $primaryKey = "id"; 
    protected $guarded = [];

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class, 'vehicle_types_id', 'id');
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'vehicle_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

    
}
