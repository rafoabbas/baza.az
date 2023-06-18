<?php

namespace App\Services\Front\User\Auto;

use App\Helpers\Classes\Breadcrumb;
use App\Models\Guard\User;
use App\Models\User\Auto\Store;
use App\Repositories\Contracts\User\Auto\StoreRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class StoreService
{
    public Model|Store $store;

    public array $data;

    public function __construct(
        public StoreRepositoryInterface $repository
    ) {
    }

    public function update(array $data): Model|Store
    {
        $this->repository->update($this->getStore(), $data);

        return $this->getStore();
    }

    public function setStoreByUserId(?int $userId = null): void
    {
        $userId ??= Auth::id();

        $this->store = $this->repository->firstByUserId($userId);
    }

    public function setStoreId(int $storeId): void
    {
        $this->store = $this->repository->findById($storeId);
    }

    public function setStore(Model|Store $store): void
    {
        $this->store = $store;
    }

    public function getStore(): Model|Store
    {
        return $this->store;
    }

    public function data(array $data): array
    {
        return array_merge([
            'user_id' => Auth::id(),
            'slug'    => \Str::slug($data['name']),
        ], $data);
    }

    public function syncBrands(?array $brands = null): void
    {
        if (is_null($brands)) {
            $brands = [];
        }

        $this->store->brands()->sync($brands);
    }

    public function syncTypes(?array $types = null): void
    {
        if (is_null($types)) {
            $types = [];
        }

        $this->store->types()->sync($types);
    }


    public static function rules(): array
    {
        return [
            'region_id'             => 'required|integer|exists:regions,id',
            'name'                  => 'required|string|max:255',
            'address'               => 'required|string',
            'addresses'             => 'nullable|array',
            'addresses.*'           => 'required|array',
            'addresses.*.address'   => 'required|string',
            'addresses.*.latitude'  => 'required|string',
            'addresses.*.longitude' => 'required|string',
            'email'                 => 'required|email|max:255',
            'web_site'              => 'required|string|max:255',
            'working_hours'         => 'required|array',
            'working_hours.*'       => 'required|string',
            'phones'                => 'required|array',
            'phones.*'              => 'required|array',
            'phones.*.phone'        => 'nullable|string|max:255',
            'phones.*.whatsapp'     => 'nullable|string',
            'image'                 => 'required|string|max:255',
            'images'                => 'nullable|array',
            'images.*'              => 'required|string|max:255',
            'description'           => 'required|string',
            'banners'               => 'nullable|array',
            'banners.*'             => 'required|string|max:255',
            // relation validations
            'brands'                => 'nullable|array',
            'brands.*'              => 'required|integer|exists:car_brands,id',
            'store_types'           => 'nullable|array',
            'store_types.*'         => 'required|integer|exists:store_types,id',
        ];
    }

    public function pageTitleHtml($add = null): string
    {
        return (new Breadcrumb())
            ->addTitle(__('Mənim Mağazam'))
            ->add(__('Ana səhifə'), route('index'))
            ->add(__('Şəxsi kabinet'), null, true)
            ->add(__('Mənim Mağazam'), null, true)
            ->whenMerge($add, function ($breadcrumb) use ($add) {
                $breadcrumb->add($add['name'], null, true);
            })
            ->titleAndBreadCrumb();
    }
}
