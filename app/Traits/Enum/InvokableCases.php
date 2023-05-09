<?php

namespace App\Traits\Enum;

use Exception;

trait InvokableCases
{
    /**
     * @throws Exception
     */
    public static function __callStatic($name, $args)
    {
        $cases = static::cases();

        foreach ($cases as $case) {
            if ($case->name === $name) {
                return $case->value;
            }
        }

        throw new Exception(static::class, $name);
    }
}
