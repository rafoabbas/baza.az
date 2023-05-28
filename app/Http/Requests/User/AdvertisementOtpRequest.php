<?php

namespace App\Http\Requests\User;

use App\Services\Front\Advertisement\AdvertisementOtpService;
use Illuminate\Foundation\Http\FormRequest;

class AdvertisementOtpRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return AdvertisementOtpService::rules();
    }

    public function prepareForValidation(): void
    {
        $this->merge(AdvertisementOtpService::prepareForValidation());
    }
}
