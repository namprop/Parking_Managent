<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    //
    protected $table = 'vehicle_types';
    protected $primaryKey = 'id';
    protected $guarded = [];
    
    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'vehicle_types_id', 'id');
    }

    public function pricingRule()
    {

        return $this->hasMany(PricingRule::class, 'vehicle_type_id', 'id');
    }

    public function priceList()
    {
        return $this->hasMany(Pricelist::class, 'vehicle_type_id', 'id');
    }

}
