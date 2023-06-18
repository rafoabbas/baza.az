<?php

namespace App\Repositories\Contracts\User\Rental;

use App\Repositories\Contracts\EloquentRepositoryInterface;

interface RentalItemRepositoryInterface extends EloquentRepositoryInterface
{
    public function firstByUserId(int $userId);
}
