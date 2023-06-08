<?php

namespace App\Services\Eloquent\Common\Auto;

use App\Enums\Common\Status;
use App\Helpers\Classes\RuleHelper;
use App\Repositories\Contracts\Common\Auto\ServiceGroupItemRepositoryInterface;
use App\Repositories\Contracts\Common\Car\CarModelRepositoryInterface;
use App\Services\Eloquent\Contracts\CrudService;
use App\Traits\Request\ValidationRole;

class ServiceGroupItemService extends CrudService
{
    use ValidationRole;

    public function __construct(ServiceGroupItemRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public static function postRules(): array
    {
        return RuleHelper::make([
            'service_group_id' => 'required|integer|exists:service_groups,id',
            '%name%' => 'required|string|max:64|unique:service_group_items,%name%',
            'status' => 'required|in:' . Status::toString(),
            'order' => 'required|integer|min:0',
        ]);
    }

    public static function putRules(): array
    {
        return array_merge(self::postRules(), RuleHelper::make([
            '%name%' => 'required|string|max:64|unique:service_group_items,%name%,'
                . request()->route('item')->getAttribute('id'),
        ]));
    }

    public static function prepareForValidation(): array
    {
        return [
            'service_group_id' => request()->route('service_group')->getAttribute('id'),
        ];
    }
}
