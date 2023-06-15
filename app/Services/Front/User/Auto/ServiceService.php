<?php

namespace App\Services\Front\User\Auto;

use App\Helpers\Classes\Breadcrumb;
use App\Helpers\Classes\RuleHelper;

class ServiceService
{
    public static function rules(): array
    {
        return RuleHelper::make([
            'user_id'               => 'required|integer|exists:users,id',
            'region_id'             => 'required|integer|exists:regions,id',
            'name'                  => 'required|string|max:255',
            'slug'                  => 'required|string|max:255',
            'address'               => 'required|string',
            'addresses'             => 'nullable|array',
            'addresses.*'           => 'required|array',
            'addresses.*.address'   => 'required|string',
            'addresses.*.latitude'  => 'required|string',
            'addresses.*.longitude' => 'required|string',
            'email'                 => 'required|email|max:255',
            'web_site'              => 'required|link|max:255',
            'working_hours'         => 'required|array',
            'working_hours.*'       => 'required|array',
            'working_hours.*.*'     => 'required|string',
            'phones'                => 'required|array',
            'phones.*'              => 'nullable|string|max:255',
            'image'                 => 'required|string|max:255',
            'images'                => 'nullable|array',
            'images.*'              => 'required|string|max:255',
            'description'           => 'required|string',
            'banners'               => 'nullable|array',
            'banners.*'             => 'required|string|max:255',
            'order'                 => 'required|integer|min:0',
            // relation validations
            'brands'                => 'nullable|array',
            'brands.*'              => 'required|integer|exists:car_brands,id',
            'specifications'        => 'nullable|array',
            'specifications.*'      => 'required|integer|exists:specifications,id',
            'groups'                => 'nullable|array',
            'group_items'           => 'nullable|array',
            'group_items.*'         => 'required|integer|exists:service_group_items,id',
        ]);
    }

    public function pageTitleHtml($add = null): string
    {
        return (new Breadcrumb())
            ->addTitle(__('Mənim Servisim'))
            ->add(__('Ana səhifə'), route('index'))
            ->add(__('Şəxsi kabinet'), null, true)
            ->add(__('Mənim Servisim'), null, true)
            ->whenMerge($add, function ($breadcrumb) use ($add) {
                $breadcrumb->add($add['name'], null, true);
            })
            ->titleAndBreadCrumb();
    }
}
