<?php

namespace App\Http\Controllers\User\Rental;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Common\Location\RegionRepositoryInterface;
use App\Repositories\Contracts\User\Rental\RentalItemRepositoryInterface;
use App\Services\Front\User\Rental\RentalItemService;
use Illuminate\Http\Request;

class RentalItemController extends Controller
{
    public function __construct(
        public RentalItemService $service,
        public RentalItemRepositoryInterface $rentalOfficeRepository,
        public RegionRepositoryInterface $regionRepository
    ) {
    }
}
