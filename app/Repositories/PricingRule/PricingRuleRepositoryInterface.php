<?php

namespace App\Repositories\PricingRule;

use App\Repositories\RepositoryInterface;

interface PricingRuleRepositoryInterface extends RepositoryInterface 
{

    public function getPriceFor($vehicleTypeId, $checkIn);
    
}
