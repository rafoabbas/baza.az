<?php

namespace App\Repositories\Contracts\User\Rental;

use App\Repositories\Contracts\EloquentRepositoryInterface;

interface RentalOfficeRepositoryInterface extends EloquentRepositoryInterface
{
    public function firstByUserId(int $userId);
}
