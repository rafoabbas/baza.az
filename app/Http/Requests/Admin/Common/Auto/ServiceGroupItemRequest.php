<?php

namespace App\Http\Requests\Admin\Common\Auto;

use App\Services\Eloquent\Common\Auto\ServiceGroupItemService;
use Illuminate\Foundation\Http\FormRequest;

class ServiceGroupItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return ServiceGroupItemService::rules();
    }

    protected function prepareForValidation(): void
    {
        $this->merge(ServiceGroupItemService::prepareForValidation());
    }
}
