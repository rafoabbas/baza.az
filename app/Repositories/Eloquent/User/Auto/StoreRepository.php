<?php

namespace App\Repositories\Eloquent\User\Auto;

use App\Models\User\Auto\Store;
use App\Repositories\Contracts\User\Auto\StoreRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class StoreRepository extends EloquentRepository implements StoreRepositoryInterface
{
    public function __construct(Store $model)
    {
        parent::__construct($model);
    }

    public function firstByUserId(int $userId)
    {
        return $this->model->where('user_id', $userId)->first();
    }
}
