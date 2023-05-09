<?php

namespace App\Services\Eloquent\Common\Car;

use App\Enums\Common\Status;
use App\Repositories\Contracts\Common\Car\CarModelRepositoryInterface;
use App\Services\Eloquent\Contracts\CrudService;
use App\Traits\Request\ValidationRole;

class CarModelService extends CrudService
{
    use ValidationRole;

    public function __construct(CarModelRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public static function postRules(): array
    {
        return [
            'title' => 'required|string|max:255|unique:features,title',
            'layout' => 'required|string|in:radio,image,select',
            'status' => 'required|in:' . Status::toString(),
            'order' => 'required|integer|min:0',
        ];
    }

    public static function putRules(): array
    {
        return array_merge(self::postRules(), [
            'title' => 'required|string|max:255|unique:features,title,'
                . request()->route('feature')->getAttribute('id'),
        ]);
    }
}
