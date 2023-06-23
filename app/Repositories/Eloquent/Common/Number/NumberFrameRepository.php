<?php

namespace App\Repositories\Eloquent\Common\Number;

use App\Models\Common\Number\NumberFrame;
use App\Repositories\Contracts\Common\Number\NumberFrameRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;

class NumberFrameRepository extends EloquentRepository implements NumberFrameRepositoryInterface
{
    public function __construct(NumberFrame $model)
    {
        parent::__construct($model);
    }
}
