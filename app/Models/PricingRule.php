<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingRule extends Model
{
    //
    protected $table = 'pricing_rules';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function vehicleType(){
        return $this->belongsTo(VehicleType::class, 'vehicle_type_id','id');
    }
}
