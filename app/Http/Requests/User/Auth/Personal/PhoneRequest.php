<?php

namespace App\Http\Requests\User\Auth\Personal;

use App\Helpers\Classes\Helper;
use App\Models\Guard\User;
use App\Notifications\User\UserLoginNotification;
use App\Rules\User\Auth\PersonalPhoneRule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class PhoneRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return Helper::envLocalMerge([
            'phone' => [ 'required', 'phone:AZ', new PersonalPhoneRule() ]
        ], [
            'code'  => [ 'required', 'numeric', 'min:1000', 'max:9999' ]
        ]);
    }

    protected function prepareForValidation(): void
    {
        $this->merge(Helper::envLocalMerge([
            'phone' => Helper::phoneFormat($this->input('phone')),
        ], [
            'code' => rand(1000, 9999)
        ]));
    }

    public function sendSms(): void
    {
        $code = $this->validated('code') ?: rand(1000, 9999);
        $phone = $this->validated('phone');

        $user = $this->firstOrCreate($phone);

        $user
            ->logins()
            ->create([
                'code'          => $code,
                'expired_at'    => now()->addMinutes(config('auth.sms.expired', 10)),
                'connection_ip' => request()->server('HTTP_CF_CONNECTING_IP') ?: request()->ip()
            ]);

        $user->notify(new UserLoginNotification($code, $phone));

        $this->session()->put('auth', Helper::envLocalMerge([
            'phone' => $phone
        ], [
            'code'  => $code
        ]));
    }

    public function firstOrCreate(string $phone): User|Model
    {
        return User::query()->firstOrCreate([
            'phone' => Helper::phoneFormat($phone),
            'is_business' => false
        ]);
    }
}
