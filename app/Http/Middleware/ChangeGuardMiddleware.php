<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChangeGuardMiddleware
{
    public function handle(
        Request $request,
        Closure $next,
        string $guard = 'admin'
    ) {
        $this->setGuard($guard);

        return $next($request);
    }

    protected function setGuard(string $guard): void
    {
        Auth::shouldUse($guard);
    }
}
