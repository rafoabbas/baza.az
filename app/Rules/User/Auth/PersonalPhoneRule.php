<?php

namespace App\Rules\User\Auth;

use App\Helpers\Classes\Helper;
use App\Models\Guard\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PersonalPhoneRule implements ValidationRule
{
    public function validate(
        string $attribute,
        mixed $value,
        Closure $fail
    ): void {
        if ($this->userExists()) {
            return;
        }

        $fail(trans('Girdiyiniz nömrə biznes hesabina bağlıdır.'));

    }

    private function userExists(): bool
    {
        return User::query()
            ->where('phone', Helper::phoneFormat(request('phone')))
            ->where('is_business', false)
            ->exists();
    }
}
