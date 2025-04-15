<?php 

namespace App\Service\PricingRule;

use App\Service\ServiceInterface;

interface PricingRuleServiceInterface extends ServiceInterface
{

    public function getPriceFor($vehicleTypeId, $checkIn);
    
}