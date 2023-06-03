<?php

namespace App\Rules\User\Auth;

use App\Helpers\Classes\Helper;
use App\Models\Guard\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CodeRule implements ValidationRule
{
    public function validate(
        string $attribute,
        mixed $value,
        Closure $fail
    ): void {
        if ($user = $this->user()) {
            $code =  (bool) $user
                ->logins()
                ->where($attribute, $value)
                ->where('expired_at', '>', now())
                ->exists();

            if ($code) {
                Auth::guard('web')->login($user);

                return;
            }
        }

        $fail(trans('Girdiğiniz kod yanlışdır.'));
    }

    private function user(): User|Model|null
    {
        return User::query()
            ->where('phone', Helper::phoneFormat(request('phone')))
            ->first();
    }
}
