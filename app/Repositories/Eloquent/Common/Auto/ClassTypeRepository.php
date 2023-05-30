<?php

namespace App\Repositories\Eloquent\Common\Auto;

use App\Models\Common\Auto\BodyType;
use App\Models\Common\Auto\ClassType;
use App\Repositories\Contracts\Common\Auto\BodyTypeRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\ClassTypeRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class ClassTypeRepository extends EloquentRepository implements ClassTypeRepositoryInterface
{
    public function __construct(ClassType $model)
    {
        parent::__construct($model);
    }
}
