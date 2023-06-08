<?php

namespace App\Repositories\Eloquent\Common\Auto;

use App\Models\Common\Auto\StoreType;
use App\Repositories\Contracts\Common\Auto\StoreTypeRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;
use Illuminate\Database\Eloquent\Collection;

class StoreTypeRepository extends EloquentRepository implements StoreTypeRepositoryInterface
{
    public function __construct(StoreType $model)
    {
        parent::__construct($model);
    }
}
