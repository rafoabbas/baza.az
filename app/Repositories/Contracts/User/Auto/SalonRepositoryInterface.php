<?php

namespace App\Repositories\Contracts\User\Auto;

use App\Repositories\Contracts\EloquentRepositoryInterface;

interface SalonRepositoryInterface extends EloquentRepositoryInterface
{
    public function firstByUserId(int $userId);
}
