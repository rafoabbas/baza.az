<?php

namespace App\Http\Controllers\User\Rental;

use App\Enums\Common\Status;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Common\Auto\ClassTypeRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\ColorRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\FuelTypeRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\GearRepositoryInterface;
use App\Repositories\Contracts\Common\Auto\TransmissionRepositoryInterface;
use App\Repositories\Contracts\Common\Car\CarBrandRepositoryInterface;
use App\Repositories\Contracts\Common\Car\CarModelRepositoryInterface;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use App\Repositories\Contracts\User\Rental\RentalItemRepositoryInterface;
use App\Services\Front\User\Rental\RentalItemService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentalItemController extends Controller
{
    public function __construct(
        public RentalItemService $service,
        public RentalItemRepositoryInterface $rentalOfficeRepository,
        public RegionRepositoryInterface $regionRepository,
        public RentalItemRepositoryInterface $rentalItemRepository,
        public ClassTypeRepositoryInterface $classTypeRepository,
        public CarBrandRepositoryInterface $carBrandRepository,
        public CarModelRepositoryInterface $carModelRepository,
        public GearRepositoryInterface $gearRepository,
        public FuelTypeRepositoryInterface $fuelTypeRepository,
        public TransmissionRepositoryInterface $transmissionRepository,
        public ColorRepositoryInterface $colorRepository,
    ) {
    }

    public function create(Request $request): Application|Factory|View|\Illuminate\Foundation\Application
    {
        return view('front.pages.profile.business.pages.rental.item.create', [
            'regions' => $this->regionRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'classTypes' => $this->classTypeRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'brands' => $this->carBrandRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'models' => $this->carModelRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'gears' => $this->gearRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'fuelTypes' => $this->fuelTypeRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'transmissions' => $this->transmissionRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'colors' => $this->colorRepository->all(
                conditions: [
                    ['status', '=', Status::published()]
                ]
            ),
            'pageTitleHtml' => $this->service->pageTitleHtml([
                'name' => 'Avtomobil əlavə et'
            ])
        ]);
    }
}
