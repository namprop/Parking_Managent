<?php

namespace App\Service\Transaction;

use App\Service\BaseService;
use App\Repositories\Transaction\TransactionRepositoryInterface;

class TransactionService extends BaseService implements TransactionServiceInterface
{
    public $repository;

    public function __construct(TransactionRepositoryInterface $TransactionRepository)
    {
        $this->repository = $TransactionRepository;
    }

    // Triển khai các phương thức từ TransactionServiceInterface ở đây
}