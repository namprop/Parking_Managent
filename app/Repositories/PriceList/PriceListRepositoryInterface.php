<?php

namespace App\Repositories\PriceList;

use App\Repositories\RepositoryInterface;

interface PriceListRepositoryInterface extends RepositoryInterface
{
    
    public function getPrice($vehicleTypeId, $checkIn, $checkOut);

    public function getDuration();



}