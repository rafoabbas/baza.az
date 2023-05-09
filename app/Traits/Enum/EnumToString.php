<?php

namespace App\Traits\Enum;

trait EnumToString
{
    /**
     * Enum variable's values to string
     */
    public static function toString(): string
    {
        return implode(',', array_column(self::cases(), 'value'));
    }
}
