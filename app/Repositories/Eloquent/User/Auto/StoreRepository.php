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
}
