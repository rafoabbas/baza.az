<?php

namespace App\Repositories\Eloquent\User\Rental;

use App\Models\User\Rental\RentalItem;
use App\Repositories\Contracts\User\Rental\RentalItemRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class RentalItemRepository extends EloquentRepository implements RentalItemRepositoryInterface
{
    public function __construct(RentalItem $model)
    {
        parent::__construct($model);
    }

    public function firstByUserId(int $userId)
    {
        return $this->model->where('user_id', $userId)->first();
    }
}
