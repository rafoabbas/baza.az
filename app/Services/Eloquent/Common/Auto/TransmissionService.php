<?php

namespace App\Services\Eloquent\Common\Auto;

use App\Enums\Common\Status;
use App\Helpers\Classes\RuleHelper;
use App\Repositories\Contracts\Common\Auto\TransmissionRepositoryInterface;
use App\Services\Eloquent\Contracts\CrudService;
use App\Traits\Request\ValidationRole;

class TransmissionService extends CrudService
{
    use ValidationRole;

    public function __construct(TransmissionRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    public static function postRules(): array
    {
        return RuleHelper::make([
            '%name%' => 'required|string|max:64|unique:transmissions,%name%',
            'status' => 'required|in:' . Status::toString(),
            'order' => 'required|integer|min:0',
        ]);
    }

    public static function putRules(): array
    {
        return array_merge(self::postRules(), RuleHelper::make([
            '%name%' => 'required|string|max:64|unique:transmissions,%name%,'
                . request()->route('transmission')->getAttribute('id'),
        ]));
    }
}
