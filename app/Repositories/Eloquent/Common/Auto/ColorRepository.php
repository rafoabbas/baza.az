<?php

namespace App\Repositories\Eloquent\Common\Auto;

use App\Models\Common\Auto\Color;
use App\Repositories\Contracts\Common\Auto\ColorRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class ColorRepository extends EloquentRepository implements ColorRepositoryInterface
{
    public function __construct(Color $model)
    {
        parent::__construct($model);
    }
}
