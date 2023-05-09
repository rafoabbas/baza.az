<?php

namespace App\Services\Eloquent\Common\Car;

use App\Enums\Common\Status;
use App\Helpers\RuleHelper;
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
        return RuleHelper::make([
            'car_brand_id' => 'required|integer|exists:car_brands,id',
            '%name%' => 'required|string|max:64|unique:car_models,%name%',
            'status' => 'required|in:' . Status::toString(),
            'order' => 'required|integer|min:0',
        ]);
    }

    public static function putRules(): array
    {
        return array_merge(self::postRules(), RuleHelper::make([
            '%name%' => 'required|string|max:64|unique:car_models,%name%,'
                . request()->route('model')->getAttribute('id'),
        ]));
    }

    public static function prepareForValidation(): array
    {
        return [
            'car_brand_id' => request()->route('car_brand')->getAttribute('id'),
        ];
    }
}
