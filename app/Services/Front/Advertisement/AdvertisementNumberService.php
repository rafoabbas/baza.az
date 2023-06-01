<?php

namespace App\Services\Front\Advertisement;

use App\Helpers\Classes\Breadcrumb;
use App\Helpers\Classes\Currency;
use App\Http\Requests\User\Advertisement\Number\AdvertisementNumberStoreRequest;
use App\Models\Common\Location\NumberRegion;
use App\Models\Common\Location\Region;
use App\Models\User\Advertisement\AdvertisementOtp;
use App\Repositories\Contracts\User\Advertisement\AdvertisementNumberRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class AdvertisementNumberService
{
    public function __construct(
        public Currency $currency,
        public AdvertisementNumberRepositoryInterface $repository
    ) {
    }

    public function store(AdvertisementNumberStoreRequest $request, AdvertisementOtp $otp): void
    {
        $data = $request->validated();

        $numberRegion = $this->numberRegion($data['number_region_id']);

        $data = array_merge(
            $data,
            $this->price($data['price'], $data['main_currency']),
            $this->splitSeries($data['series']),
            $this->splitNumber($data['number']),
            $this->fullNumber($numberRegion, $data),
            $this->regionPrefix($numberRegion),
        );

        $this->repository->create($data);
    }

    public function regionPrefix(NumberRegion $numberRegion): array
    {
        return [
            'region_prefix' => $numberRegion->getAttribute('region_code')
        ];
    }
    public function fullNumber(NumberRegion $numberRegion, array $data): array
    {
        return [
            'full' => $numberRegion->getAttribute('region_code') . $data['series'] . $data['number']
        ];
    }

    public function splitNumber(string $number): array
    {
        $splitNumbers = str_split($number);

        return [
            'first_number' => $splitNumbers[0],
            'second_number' => $splitNumbers[1],
            'third_number' => $splitNumbers[2],
        ];
    }

    public function splitSeries(string $series): array
    {
        $splitSeries = str_split($series);

        return [
            'series_first_character' => $splitSeries[0],
            'series_second_character' => $splitSeries[1],
        ];
    }

    public function price($price, $mainCurrency): array
    {
        $this->currency->setAmount($price);

        $this->currency->setCurrency($mainCurrency);

        return [
            'price_azn' => (float) $this->currency->convertTo('AZN'),
            'price_usd' => (float) $this->currency->convertTo('USD'),
            'price_eur' => (float) $this->currency->convertTo('EUR'),
        ];
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
            'main_currency' => [ 'required', 'string', 'max:3', 'regex:/^[A-Z]+$/'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string', 'max:50', 'phone:AZ'],
            'name'  => ['required', 'string', 'max:50'],
            'witch_auto_type' => ['required', 'in:porsche,bmw,mercedes'],
            'is_mirror_numbers' => ['required', 'boolean'],
            'is_three_numbers_in_a_row' => ['required', 'boolean'],
            'is_five_numbers_in_a_row' => ['required', 'boolean'],
            'is_two_zeros_and_a_number' => ['required', 'boolean'],
        ];
    }

    public function region($id, array $columns = ['*']): null|Region|Model
    {
        return Region::query()->select($columns)->where('id', $id)->first();
    }

    public function numberRegion($id, array $columns = ['*']): null|NumberRegion|Model
    {
        return NumberRegion::query()->select($columns)->where('id', $id)->first();
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
