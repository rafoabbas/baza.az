<?php

namespace App\Http\Requests\User\Auto;

use App\Services\Front\User\Auto\ServiceService;
use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return ServiceService::rules();
    }
}
