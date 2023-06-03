<?php

namespace App\Http\Requests\User\Auth;

use App\Helpers\Classes\Helper;
use App\Rules\User\Auth\CodeRule;
use Illuminate\Foundation\Http\FormRequest;

class CodeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'code' => [
                'required',
                'numeric',
                'min:1000',
                'max:9999',
                new CodeRule()
            ],
            'phone' => ['required', 'phone:AZ', 'exists:users,phone'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'phone' => Helper::phoneFormat($this->input('phone')),
        ]);
    }
}
