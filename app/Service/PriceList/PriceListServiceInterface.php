<?php

namespace App\Service\PriceList;

use App\Service\ServiceInterface;

interface PriceListServiceInterface extends ServiceInterface
{

    function getPrice($vehicleTypeId, $checkIn, $checkOut);

    function getDuration();

}