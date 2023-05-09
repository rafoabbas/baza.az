<?php

namespace App\Providers;

use App\Helpers\Helper;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        $this->menuActive();

        Paginator::useBootstrap();
    }

    private function menuActive(): void
    {
        Blade::directive('menu_active', function (...$expression) {
            return Helper::menuActive(...$expression);
        });
    }
}
