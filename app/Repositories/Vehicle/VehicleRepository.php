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

    public function searchAndPaginate($searchBy, $keyword, $perPage = 5)
    {
        $query = $this->model->query();

        $query->where(function ($query) use ($keyword) {
            $query->where('sender_name', 'like', '%' . $keyword . '%')
                ->orWhere('license_plate', 'like', '%' . $keyword . '%');
        });

        return $query->orderBy('id', 'desc')
            ->paginate($perPage)
            ->appends(['search' => $keyword]);
    }
}
