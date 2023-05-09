<?php

namespace App\Traits\Enum;

trait EnumToArray
{
    public static function name(string|null|int $value = null)
    {
        if (is_null($value)) {
            return 0;
        }

        return array_key_exists($value, static::toArray()) ? static::toArray()[$value] : 0;
    }

    public static function value(string|null|int $name = null)
    {
        if (is_null($name)) {
            return 0;
        }

        return array_key_exists($name, static::toArrayRevert()) ? static::toArrayRevert()[$name] : 0;
    }

    /**
     * Enum variable name
     */
    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }

    /**
     * Enum variable cases value
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * Enum variable name => value
     */
    public static function toArray(): array
    {
        return array_combine(self::values(), self::names());
    }
}
