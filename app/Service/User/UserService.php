<?php

namespace App\Service\User;

use App\Service\BaseService;
use App\Repositories\User\UserRepositoryInterface;

class UserService extends BaseService implements UserServiceInterface
{
    public $repository;

    public function __construct(UserRepositoryInterface $UserRepository)
    {
        $this->repository = $UserRepository;
    }

    // Triển khai các phương thức từ UserServiceInterface ở đây
}