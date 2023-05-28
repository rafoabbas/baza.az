<?php

namespace App\Http\Requests\Admin\Common\Auto;

use App\Services\Eloquent\Common\Auto\TransmissionService;
use Illuminate\Foundation\Http\FormRequest;

class TransmissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return TransmissionService::rules();
    }
}
