<?php

namespace App\Http\Controllers\User\Auth\Personal;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auth\Personal\CodeRequest;
use App\Http\Requests\User\Auth\Personal\PhoneRequest;

class PersonalAuthenticatedController extends Controller
{
    public function login()
    {
        return view('front.pages.auth.phone.login');
    }

    public function phone(PhoneRequest $request)
    {

        $request->sendSms();

        return redirect()->route('auth.personal.code')->withToast();
    }

    public function code()
    {
        return view('front.pages.auth.phone.code');
    }

    public function check(CodeRequest $request)
    {
        $request->user()->update([
            'connection_ip' => request()->server('HTTP_CF_CONNECTING_IP') ?: request()->ip(),
            'last_login_at' => now()
        ]);


        return redirect()->route('profile.index')->withToast();
    }
}
