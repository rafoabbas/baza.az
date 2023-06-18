<?php

namespace Database\Seeders\User\Auto;

use App\Models\Common\Auto\ServiceGroupItem;
use App\Models\Common\Auto\StoreType;
use App\Models\Common\Car\CarBrand;
use App\Models\Guard\User;
use App\Models\User\Auto\Store;
use App\Repositories\Contracts\User\Auto\StoreRepositoryInterface;
use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    public function __construct(
        public StoreRepositoryInterface $repository
    ) {
    }

    public function run(): void
    {
        if ($this->repository->count()) {
            return;
        }

        $store = Store::factory()
            ->userId(
                User::query()
                    ->where('is_business', 1)
                    ->value('id')
            )
            ->create();


        $this->types($store);
        $this->brands($store);
    }

    public function types(Store $store): void
    {
        $store->types()->attach(
            StoreType::query()->inRandomOrder(10)->limit(5)->pluck('id')->toArray(),
        );
    }

    public function brands(Store $store): void
    {
        $store->brands()->attach(
            CarBrand::query()->inRandomOrder(10)->limit(3)->pluck('id')->toArray()
        );
    }
}
