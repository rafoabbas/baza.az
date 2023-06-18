<?php

namespace App\Http\Requests\User\Auto;

use App\Services\Front\User\Auto\SalonService;
use Illuminate\Foundation\Http\FormRequest;

class SalonRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return SalonService::rules();
    }
}
