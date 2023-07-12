<?php

namespace Database\Seeders\User\Auto;

use App\Models\Common\Auto\Specification;
use App\Models\Guard\User;
use App\Models\User\Auto\Salon;
use App\Repositories\Contracts\User\Auto\SalonRepositoryInterface;
use Illuminate\Database\Seeder;

class SalonTableSeeder extends Seeder
{
    public function __construct(
        public SalonRepositoryInterface $repository
    ) {
    }
    public function run(): void
    {
        if ($this->repository->count()) {
            return;
        }

        $salons = Salon::factory(20)
            ->userId(
                User::query()
                    ->where('is_business', 1)
                    ->value('id')
            )
            ->create();

        foreach ($salons as $salon) {
            $this->specifications($salon);
        }

    }

    public function specifications(Salon $salon): void
    {
        $salon->specifications()->attach(
            Specification::query()->inRandomOrder(10)->limit(3)->pluck('id')->toArray()
        );
    }
}
