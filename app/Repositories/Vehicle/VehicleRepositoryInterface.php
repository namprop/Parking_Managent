<?php

namespace App\Repositories\Vehicle;

use App\Repositories\RepositoryInterface;

interface VehicleRepositoryInterface extends RepositoryInterface{

    public function searchAndPaginate($searchBy, $keyword, $perPage = 5);



}