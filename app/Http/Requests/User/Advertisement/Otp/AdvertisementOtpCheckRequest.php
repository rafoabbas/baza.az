<?php

namespace App\Http\Requests\User\Advertisement\Otp;

use Illuminate\Foundation\Http\FormRequest;

class AdvertisementOtpCheckRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'otp_code' => 'required|integer|digits:4|exists:advertisement_otps,otp_code',
        ];
    }
}
