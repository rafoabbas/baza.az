<?php

namespace App\Repositories\Eloquent\User\Auto;

use App\Models\User\Auto\Service;
use App\Repositories\Contracts\User\Auto\ServiceRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class ServiceRepository extends EloquentRepository implements ServiceRepositoryInterface
{
    public function __construct(Service $model)
    {
        parent::__construct($model);
    }

    public function firstByUserId(int $userId)
    {
        return $this->model->where('user_id', $userId)->first();
    }
}
