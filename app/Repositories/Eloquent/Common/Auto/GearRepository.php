<?php

namespace App\Repositories\Eloquent\Common\Auto;

use App\Models\Common\Auto\Gear;
use App\Repositories\Contracts\Common\Auto\GearRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class GearRepository extends EloquentRepository implements GearRepositoryInterface
{
    public function __construct(Gear $model)
    {
        parent::__construct($model);
    }
}
