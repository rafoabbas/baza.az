<?php

namespace App\Http\Controllers\User\Auth\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\Business\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('front.pages.auth.business.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('profile.index');
    }
}
