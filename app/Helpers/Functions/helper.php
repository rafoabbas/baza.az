<?php

use App\Helpers\Classes\Helper;

if (! function_exists('frontPhoneFormat')) {
    function frontPhoneFormat(string $phone, string $countryCode = 'AZ'): string
    {
        return Helper::frontPhoneFormat($phone, $countryCode);
    }
}

if (! function_exists('column')) {
    function column(string $column): string
    {
        return Helper::column($column);
    }
}

if (! function_exists('menuActive')) {
    function menuActive(...$patterns): string
    {
        return Helper::menuActive($patterns);
    }
}
