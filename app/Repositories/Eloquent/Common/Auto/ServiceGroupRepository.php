<?php

namespace App\Repositories\Eloquent\Common\Auto;

use App\Enums\Common\Status;
use App\Helpers\Classes\Helper;
use App\Models\Common\Auto\ServiceGroup;
use App\Repositories\Contracts\Common\Auto\ServiceGroupRepositoryInterface;
use App\Repositories\Eloquent\EloquentRepository;
use Illuminate\Database\Eloquent\Collection;

class ServiceGroupRepository extends EloquentRepository implements ServiceGroupRepositoryInterface
{
    public function __construct(ServiceGroup $model)
    {
        parent::__construct($model);
    }

    public function groups(): Collection|array
    {
        return $this->model->with(
            [
                'items' => function ($query) {
                    $query
                        ->select('id', 'service_group_id', Helper::column('name'))
                        ->where('status', '=', Status::published());
                }
            ]
        )->get();
    }
}
