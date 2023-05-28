<?php

namespace App\Repositories\Eloquent\Common\Auto;

use App\Models\Common\Auto\BodyType;
use App\Repositories\Contracts\Common\Auto\BodyTypeRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class BodyTypeRepository extends EloquentRepository implements BodyTypeRepositoryInterface
{
    public function __construct(BodyType $model)
    {
        parent::__construct($model);
    }
}
