<?php

namespace App\Repositories\Eloquent\User\Auto;

use App\Models\User\Auto\Salon;
use App\Repositories\Contracts\User\Auto\SalonRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class SalonRepository extends EloquentRepository implements SalonRepositoryInterface
{
    public function __construct(Salon $model)
    {
        parent::__construct($model);
    }

    public function firstByUserId(int $userId)
    {
        return $this->model->where('user_id', $userId)->first();
    }
}
