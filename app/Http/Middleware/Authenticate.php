<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected function redirectTo(Request $request): ?string
    {
        if (request()->routeIs('admin.*')) {
            return $request->expectsJson() ? null : route('admin.login');
        }

        return $request->expectsJson() ? null : route('login');
    }
}
