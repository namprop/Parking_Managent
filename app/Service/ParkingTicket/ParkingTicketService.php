<?php

namespace App\Service\ParkingTicket;

use App\Service\BaseService;
use App\Repositories\ParkingTicket\ParkingTicketRepositoryInterface;

class ParkingTicketService extends BaseService implements ParkingTicketServiceInterface
{
    public $repository;

    public function __construct(ParkingTicketRepositoryInterface $ParkingTicketRepository)
    {
        $this->repository = $ParkingTicketRepository;
    }

    // Triển khai các phương thức từ ParkingTicketServiceInterface ở đây
}