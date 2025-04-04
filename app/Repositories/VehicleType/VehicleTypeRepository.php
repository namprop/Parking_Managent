<?php

namespace App\Repositories\VehicleType;

use App\Repositories\BaseRepository;

use App\Models\VehicleType;

class VehicleTypeRepository extends BaseRepository implements VehicleTypeRepositoryInterface
{
    public function getModel()
    {
        return VehicleType::class;
    }
}