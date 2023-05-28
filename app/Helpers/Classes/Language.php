<?php

namespace App\Helpers\Classes;

class Language
{
    public static function languages(): array
    {
        return [
            [
                'name' => 'Azərbaycan',
                'code' => 'az',
                'locale' => 'az_AZ',
            ],
            [
                'name' => 'Русский',
                'code' => 'ru',
                'locale' => 'ru_RU',
            ],
        ];
    }

    public static function langs(): array
    {
        return [
            'az' => 'Azərbaycan',
            'ru' => 'Русский',
        ];
    }

    public static function keys(): array
    {
        return array_keys(self::langs());
    }
}
