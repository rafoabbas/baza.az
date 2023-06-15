<?php

namespace Database\Seeders\User\Auto;

use App\Models\Common\Auto\ServiceGroupItem;
use App\Models\Common\Auto\Specification;
use App\Models\Common\Car\CarBrand;
use App\Models\Guard\User;
use App\Models\User\Auto\Service;
use App\Repositories\Contracts\User\Auto\ServiceRepositoryInterface;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    public function __construct(
        public ServiceRepositoryInterface $repository
    ) {
    }

    public function run(): void
    {
        if ($this->repository->count()) {
            return;
        }


        $service = Service::factory()
            ->userId(
                User::query()
                    ->where('is_business', 1)
                    ->value('id')
            )
            ->create();


        $this->items($service);
        $this->specifications($service);
        $this->brands($service);
    }

    public function items(Service $service): void
    {

        ServiceGroupItem::query()->inRandomOrder()
            ->limit(10)
            ->get()
            ->each(function (ServiceGroupItem $item) use ($service) {
                $service->items()->attach([
                    $item->getAttribute('id') => [
                        'service_group_id' => $item->getAttribute('service_group_id'),
                    ]
                ]);
            });
    }

    public function brands(Service $service): void
    {
        $service->brands()->attach(
            CarBrand::query()->inRandomOrder(10)->limit(3)->pluck('id')->toArray()
        );
    }

    public function specifications(Service $service): void
    {
        $service->specifications()->attach(
            Specification::query()->inRandomOrder(10)->limit(3)->pluck('id')->toArray()
        );
    }
}
