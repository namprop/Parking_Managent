<?php

namespace App\Repositories\Vehicle;

use App\Repositories\BaseRepository;

use App\Models\Vehicle;

class VehicleRepository extends BaseRepository implements VehicleRepositoryInterface
{
    public function getModel()
    {
        return Vehicle::class;
    }
}