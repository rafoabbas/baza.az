<?php

namespace App\Services\Eloquent\Contracts;

interface ValidationRoleIterface
{
    public static function rules(array $rules = []): array;

    public static function postRules(): array;

    public static function putRules(): array;
}
