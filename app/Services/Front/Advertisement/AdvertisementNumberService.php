<?php

namespace App\Services\Front\Advertisement;

use App\Helpers\Classes\Breadcrumb;
use App\Http\Requests\User\Advertisement\Number\AdvertisementNumberStoreRequest;
use App\Models\User\Advertisement\AdvertisementOtp;

class AdvertisementNumberService
{
    public function store(AdvertisementNumberStoreRequest $request, AdvertisementOtp $otp): void
    {
        $request->validated();
    }

    public static function storeRoles(): array
    {
        return [
            'user_id' => ['nullable', 'integer'],
            'region_id' => ['required', 'integer'],
            'number_region_id' => ['required', 'integer'],
            'series' => ['required', 'string', 'max:2', 'regex:/^[A-Z]+$/'],
            'number' => ['required', 'string', 'max:3', 'regex:/^\d+$/'],
            'description' => 'nullable',
            'price' => ['required', 'numeric'],
//            'witch_auto_type' => ['required'],
            'is_mirror_numbers' => ['required', 'boolean'],
            'is_three_numbers_in_a_row' => ['required', 'boolean'],
            'is_five_numbers_in_a_row' => ['required', 'boolean'],
            'is_two_zeros_and_a_number' => ['required', 'boolean'],
        ];
    }

    public function pageTitleHtml(): string
    {
        return (new Breadcrumb())
            ->addTitle(__('Satışa nömrə nişanı əlavə edin'))
            ->add(__('Ana səhifə'), route('index'))
            ->addIsAuth(__('Şəxsi kabinet'))
            ->add(__('Nömrə nişanı əlavə edin'), null, true)
            ->titleAndBreadCrumb();
    }
}
