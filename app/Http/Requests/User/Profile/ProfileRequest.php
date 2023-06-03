<?php

namespace App\Http\Requests\User\Profile;

use App\Services\Front\User\ProfileService;
use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return ProfileService::rules($this->user());
    }
}
