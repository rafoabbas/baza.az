<?php

namespace App\Http\Requests\User\Auto;

use App\Services\Front\User\Auto\StoreService;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return StoreService::rules();
    }
}
