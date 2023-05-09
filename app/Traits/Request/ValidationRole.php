<?php

namespace App\Traits\Request;

use Symfony\Component\HttpFoundation\Request;

trait ValidationRole
{
    public static function rules(array $rules = []): array
    {
        return array_merge(match (request()->method()) {
            Request::METHOD_GET => [],
            Request::METHOD_POST => self::postRules(),
            Request::METHOD_PUT => self::putRules(),
        }, $rules);
    }
}
