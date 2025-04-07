<?php

namespace App\Service\Vehicle;

use App\Service\ServiceInterface;

interface VehicleServiceInterface extends ServiceInterface 
{
    // Định nghĩa các phương thức ở đây
    public function searchAndPaginate($searchBy, $keyword, $perPage = 5);
}
