<?php

namespace App\Http\Requests\Admin\Common\Auto;

use App\Services\Eloquent\Common\Auto\ServiceGroupService;
use Illuminate\Foundation\Http\FormRequest;

class ServiceGroupRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return ServiceGroupService::rules();
    }
}
