<?php

namespace App\Http\Controllers\User\Auto;

use App\Enums\Common\Status;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auto\StoreRequest;
use App\Models\User\Auto\Store;
use App\Repositories\Contracts\Common\Auto\StoreTypeRepositoryInterface;
use App\Repositories\Contracts\Common\Car\CarBrandRepositoryInterface;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use App\Repositories\Contracts\User\Auto\StoreRepositoryInterface;
use App\Services\Front\User\Auto\StoreService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __construct(
        public StoreService $service,
        public StoreRepositoryInterface $storeRepository,
        public StoreTypeRepositoryInterface $storeTypeRepository,
        public CarBrandRepositoryInterface $carBrandRepository,
        public RegionRepositoryInterface $regionRepository
    ) {
    }

    public function show(): View
    {
        return view('front.pages.profile.business.pages.store.index', [
            'store' => $this->storeRepository->first(
                conditions: [
                    ['user_id', '=', Auth::id()]
                ],
                relations: ['brands']
            ),
            'pageTitleHtml' => $this->service->pageTitleHtml()
        ]);
    }

    public function edit(): View
    {
        return view('front.pages.profile.business.pages.store.edit', [
            'store' => $this->storeRepository->first(
                conditions: [
                    ['user_id', '=', Auth::id()]
                ],
                relations: ['brands']
            ),
            'regions' => $this->regionRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'types' => $this->storeTypeRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'brands' => $this->carBrandRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'pageTitleHtml' => $this->service->pageTitleHtml([
                'name' => 'Redaktə et'
            ])
        ]);
    }

    public function update(StoreRequest $request): void
    {
        $this->service->setStoreByUserId(Auth::id());

        $store = $this->service->getStore();

        $this->service->update(
            $this->service->data($request->validated())
        );

        $this->service->syncBrands($request->input('brands'));
        $this->service->syncTypes($request->input('store_types'));

        $store->updateUploadWherePath($request->input('image'), $store->getAttribute('image'));

        foreach ($request->input('images') as $image) {
            $store->updateUploadWherePath($image);
        }

        foreach ($request->input('banners') as $banner) {
            $store->updateUploadWherePath($banner);
        }
    }
    public function destroy(Store $store): void
    {
        //
    }
}
