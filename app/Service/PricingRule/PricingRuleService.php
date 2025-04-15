<?php

namespace App\Service\PricingRule;

use App\Service\BaseService;

use App\Repositories\PricingRule\PricingRuleRepositoryInterface;

class PricingRuleService extends BaseService implements PricingRuleServiceInterface

{
    public $repository;

    public function __construct(PricingRuleRepositoryInterface $pricingRuleRepository)
    {
        $this->repository = $pricingRuleRepository;
    }

    public function getPriceFor($vehicleTypeId, $checkIn)
    {
        return $this->repository->getPriceFor($vehicleTypeId, $checkIn);
    }
}
