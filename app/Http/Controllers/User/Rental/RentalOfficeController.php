<?php

namespace App\Http\Controllers\User\Rental;

use App\Enums\Common\Status;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Rental\RentalOfficeRequest;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use App\Repositories\Contracts\User\Rental\RentalOfficeRepositoryInterface;
use App\Services\Front\User\Rental\RentalOfficeService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentalOfficeController extends Controller
{
    public function __construct(
        public RentalOfficeService $service,
        public RentalOfficeRepositoryInterface $rentalOfficeRepository,
        public RegionRepositoryInterface $regionRepository
    ) {
    }

    public function show(): View
    {
        return view('front.pages.profile.business.pages.rental.index', [
            'office' => $this->rentalOfficeRepository->first(
                conditions: [
                    ['user_id', '=', Auth::id()]
                ],
                relations: ['items']
            ),
            'pageTitleHtml' => $this->service->pageTitleHtml()
        ]);
    }

    public function edit(Request $request): View
    {
        return view('front.pages.profile.business.pages.rental.edit', [
            'office' => $this->rentalOfficeRepository->first(
                conditions: [
                    ['user_id', '=', Auth::id()]
                ],
                relations: ['items']
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

    public function update(RentalOfficeRequest $request): void
    {
        $this->service->setOfficeByUserId();

        $office = $this->service->getOffice();

        $this->service->update(
            $this->service->data($request->validated())
        );

        foreach ($request->input('banners') as $banner) {
            $office->updateUploadWherePath($banner);
        }
    }

    public function addAutoView(Request $request): View
    {
        return view('front.pages.profile.business.pages.rental.add-car', [
            'office' => $this->rentalOfficeRepository->first(
                conditions: [
                    ['user_id', '=', Auth::id()]
                ],
                relations: ['items']
            ),
            'pageTitleHtml' => $this->service->pageTitleHtml([
                'name' => 'Avtomobil əlavə et'
            ])
        ]);
    }

    public function addAuto(Request $request): void
    {
        $this->service->setOfficeByUserId();

        $office = $this->service->getOffice();

        $office->items()->create($request->validated());
    }
}
