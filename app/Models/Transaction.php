<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = "transactions";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parkingTicket()
    {
        return $this->belongsTo(ParkingTicket::class);
    }
}
