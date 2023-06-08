<?php

namespace App\Repositories\Eloquent\Common\Auto;

use App\Models\Common\Auto\ServiceGroupItem;
use App\Repositories\Contracts\Common\Auto\ServiceGroupItemRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class ServiceGroupItemRepository extends EloquentRepository implements ServiceGroupItemRepositoryInterface
{
    public function __construct(ServiceGroupItem $model)
    {
        parent::__construct($model);
    }
}
