<?php

namespace Database\Seeders\User\Rental;

use App\Models\Guard\User;
use App\Models\User\Rental\RentalOffice;
use App\Repositories\Contracts\User\Rental\RentalOfficeRepositoryInterface;
use Illuminate\Database\Seeder;

class RentalOfficeTableSeeder extends Seeder
{
    public function __construct(
        public RentalOfficeRepositoryInterface $repository
    ) {
    }
    public function run(): void
    {
        if ($this->repository->count()) {
            return;
        }

        $office = RentalOffice::factory()
            ->userId(
                User::query()
                    ->where('is_business', 1)
                    ->value('id')
            )
            ->create();

    }
}
