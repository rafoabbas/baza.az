<?php

namespace App\Http\Controllers\User\Auto;

use App\Enums\Common\Status;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Auto\SalonRequest;
use App\Repositories\Contracts\Common\Auto\SpecificationRepositoryInterface;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use App\Repositories\Contracts\User\Auto\SalonRepositoryInterface;
use App\Services\Front\User\Auto\SalonService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;

class SalonController extends Controller
{
    public function __construct(
        public SalonService $service,
        public SalonRepositoryInterface $salonRepository,
        public SpecificationRepositoryInterface $specificationRepository,
        public RegionRepositoryInterface $regionRepository
    ) {
    }
    public function show(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('front.pages.profile.business.pages.salon.index', [
            'salon' => $this->salonRepository->first(
                conditions: [
                    ['user_id', '=', Auth::id()]
                ],
                relations: ['specifications']
            ),
            'pageTitleHtml' => $this->service->pageTitleHtml()
        ]);
    }
    public function autos(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('front.pages.profile.business.pages.salon.autos', [
            'pageTitleHtml' => $this->service->pageTitleHtml([
                'name' => 'Avtomobillər'
            ])
        ]);
    }
    public function edit(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('front.pages.profile.business.pages.salon.edit', [
            'salon' => $this->salonRepository->first(
                conditions: [
                    ['user_id', '=', Auth::id()]
                ],
                relations: ['specifications']
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
    public function update(SalonRequest $request): void
    {
        $this->service->setSalonByUserId();

        $salon = $this->service->getSalon();

        $this->service->update(
            $this->service->data($request->validated())
        );

        $this->service->syncSpecifications($request->input('specifications'));

        $salon->updateUploadWherePath($request->input('image'), $salon->getAttribute('image'));

        foreach ($request->input('images') as $image) {
            $salon->updateUploadWherePath($image);
        }

        foreach ($request->input('banners') as $banner) {
            $salon->updateUploadWherePath($banner);
        }
    }

    public function addAutoView(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('front.pages.profile.business.pages.salon.add-car', [
            'pageTitleHtml' => $this->service->pageTitleHtml([
                'name' => 'Avtomobil əlavə et'
            ])
        ]);
    }
}
