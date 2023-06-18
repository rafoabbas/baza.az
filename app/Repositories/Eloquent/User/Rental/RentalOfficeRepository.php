<?php

namespace App\Repositories\Eloquent\User\Rental;

use App\Models\User\Rental\RentalOffice;
use App\Repositories\Contracts\User\Rental\RentalOfficeRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class RentalOfficeRepository extends EloquentRepository implements RentalOfficeRepositoryInterface
{
    public function __construct(RentalOffice $model)
    {
        parent::__construct($model);
    }

    public function firstByUserId(int $userId)
    {
        return $this->model->where('user_id', $userId)->first();
    }
}
