<?php

namespace App\Http\Requests\Admin\Common\Auto;

use App\Services\Eloquent\Common\Auto\GearService;
use Illuminate\Foundation\Http\FormRequest;

class GearRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return GearService::rules();
    }
}
