<?php

namespace App\Repositories\Contracts\Common\Auto;

use App\Repositories\Contracts\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface ServiceGroupRepositoryInterface extends EloquentRepositoryInterface
{
    public function groups(): Collection|array;
}
