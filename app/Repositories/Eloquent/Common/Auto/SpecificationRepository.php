<?php

namespace App\Repositories\Eloquent\Common\Auto;

use App\Models\Common\Auto\Specification;
use App\Repositories\Contracts\Common\Auto\SpecificationRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class SpecificationRepository extends EloquentRepository implements SpecificationRepositoryInterface
{
    public function __construct(Specification $model)
    {
        parent::__construct($model);
    }
}
