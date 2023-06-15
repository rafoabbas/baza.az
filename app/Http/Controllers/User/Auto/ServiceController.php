<?php

namespace App\Http\Controllers\User\Auto;

use App\Enums\Common\Status;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auto\ServiceRequest;
use App\Repositories\Contracts\Common\Auto\ServiceGroupRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\SpecificationRepositoryInterface;
use App\Repositories\Contracts\Common\Car\CarBrandRepositoryInterface;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use App\Repositories\Contracts\User\Auto\ServiceRepositoryInterface;
use App\Services\Front\User\Auto\ServiceService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function __construct(
        public ServiceService $service,
        public ServiceRepositoryInterface $serviceRepository,
        public ServiceGroupRepositoryInterface $serviceGroupRepository,
        public CarBrandRepositoryInterface $carBrandRepository,
        public SpecificationRepositoryInterface $specificationRepository,
        public RegionRepositoryInterface $regionRepository
    ) {
    }

    public function show(): View
    {
        return view('front.pages.profile.business.pages.service.index', [
            'service' => $this->serviceRepository->first(
                conditions: [
                    ['user_id', '=', Auth::id()]
                ],
                relations: ['items', 'brands', 'specifications']
            ),
            'pageTitleHtml' => $this->service->pageTitleHtml()
        ]);
    }

    public function edit(Request $request): View
    {
        return view('front.pages.profile.business.pages.service.edit', [
            'service' => $this->serviceRepository->first(
                conditions: [
                    ['user_id', '=', Auth::id()]
                ],
                relations: ['items', 'brands', 'specifications']
            ),
            'groups' => $this->serviceGroupRepository->groups(),
            'brands' => $this->carBrandRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'specifications' => $this->specificationRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'regions' => $this->regionRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'pageTitleHtml' => $this->service->pageTitleHtml([
                'name' => 'Redaktə et'
            ])
        ]);
    }

    public function update(ServiceRequest $request): void
    {
        $this->service->setServiceByUserId();

        $service = $this->service->getService();

        $this->service->update(
            $this->service->data($request->validated())
        );

        $this->service->syncBrands($request->input('brands'));
        $this->service->syncSpecifications($request->input('specifications'));
        $this->service->syncItems($request->input('items'));

        $service->updateUploadWherePath($request->input('image'), $service->getAttribute('image'));

        foreach ($request->input('images') as $image) {
            $service->updateUploadWherePath($image);
        }

        foreach ($request->input('banners') as $banner) {
            $service->updateUploadWherePath($banner);
        }
    }
}
