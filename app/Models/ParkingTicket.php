<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParkingTicket extends Model
{
    //

    protected $table = " parking_tickets";
    protected $primaryKey = "id";
    protected $guarded = [];



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parkingSlot()
    {
        return $this->belongsTo(ParkingSlot::class);
    }

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
