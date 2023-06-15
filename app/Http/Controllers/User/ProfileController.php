<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\User\Profile\ProfileRequest;
use App\Services\Front\User\ProfileService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function __construct(
        public ProfileService $service
    ) {
    }

    public function index(Request $request): View
    {
        return $request->user()->getAttribute('is_business')
            ? $this->business()
            : $this->personal();
    }

    public function business(): View
    {
        return view('front.pages.profile.business.index');
    }

    public function personal(): View
    {
        return view('front.pages.profile.personal.index', [
            'user' => Auth::user(),
            'pageTitleHtml' => $this->service->pageTitleHtml()
        ]);
    }

    public function update(ProfileRequest $request)
    {
        //
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return Redirect::route('auth.personal.login');
    }
}
