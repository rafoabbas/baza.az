<?php

namespace App\Services\Eloquent\Common\Auto;

use App\Enums\Common\Status;
use App\Helpers\RuleHelper;
use App\Repositories\Contracts\Common\Auto\BodyTypeRepositoryInterface;
use App\Services\Eloquent\Contracts\CrudService;
use App\Traits\Request\ValidationRole;

class BodyTypeService extends CrudService
{
    use ValidationRole;

    public function __construct(BodyTypeRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public static function postRules(): array
    {
        return RuleHelper::make([
            '%name%' => 'required|string|max:64|unique:body_types,%name%',
            'status' => 'required|in:' . Status::toString(),
            'order' => 'required|integer|min:0',
            'type' => 'nullable'
        ]);
    }

    public static function putRules(): array
    {
        return array_merge(self::postRules(), RuleHelper::make([
            '%name%' => 'required|string|max:64|unique:body_types,%name%,'
                . request()->route('body_type')->getAttribute('id'),
        ]));
    }
}
