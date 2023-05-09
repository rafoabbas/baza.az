<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class Helper
{
    public static function menuActive(...$patterns): string
    {
        return request()->routeIs('admin.car-brand.*') ? 'mm-active' : '';
    }

    public static function toast(array $arguments = []): array
    {
        $arguments = optional(collect($arguments));
        $type = $arguments->get('type') ?? 'success';
        $message = $arguments->get('message') ?? null;
        $delay = $arguments->get('delay') ?? null;
        $reload = $arguments->get('reload') ?? null;
        $redirect = $arguments->get('redirect') ?? null;
        $heading = $arguments->get('heading') ?? null;

        $colors = collect([
            'success' => '#1abc9c',
            'error' => '#f1556c',
            'warning' => '#f7b84b',
            'info' => '#4fc6e1',
            'dark' => '#323a46',
        ]);

        return [
            'loaderBg' => $colors->get($type),
            'heading' => $heading ?? __('Uğurlu əmelliyat!'),
            'message' => $message ?? __('Əmeliyyat uğurla yerinə yetirildi!'),
            'icon' => $type ?? 'success',
            'delay' => $delay ?? 500,
            'reload' => $reload ?? null,
            'redirect' => $redirect ?? null,
            'status' => true,
        ];
    }

    public static function select(array $columns = ['*']): array
    {
        return array_map(function ($column) {
            return Str::replace('%', '_' . self::getLocale(), $column);
        }, $columns);
    }

    public static function withSelect(string $relation, string $column): string
    {
        return $relation . ':' . Str::replace('%', '_' . self::getLocale(), $column);
    }

    public static function column(string $key, ?string $locale = null): string
    {
        return $key . '_' . ($locale ?: self::getLocale());
    }

    public static function getLocale(): string
    {
        return app()->getLocale();
    }

    public static function getSql($model)
    {
        $replace = function ($sql, $bindings) {
            $needle = '?';
            foreach ($bindings as $replace) {
                $pos = strpos($sql, $needle);
                if ($pos !== false) {
                    if (gettype($replace) === 'string') {
                        $replace = ' "' . addslashes($replace) . '" ';
                    }
                    $sql = substr_replace($sql, $replace, $pos, strlen($needle));
                }
            }

            return $sql;
        };

        return $replace($model->toSql(), $model->getBindings());
    }
}
