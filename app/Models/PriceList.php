<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceList extends Model
{
    //
    protected $table = 'price_lists';
    protected $primaryKey = 'id';
    protected $guarded = [];
    
    public function vehicleType(){
        return $this->belongsTo(VehicleType::class, 'vehicle_type_id','id');
    }
}

