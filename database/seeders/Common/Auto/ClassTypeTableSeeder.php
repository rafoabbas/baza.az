<?php

namespace Database\Seeders\Common\Auto;

use App\Models\Common\Auto\ClassType;
use App\Repositories\Contracts\Common\Auto\ClassTypeRepositoryInterface;
use Illuminate\Database\Seeder;

class ClassTypeTableSeeder extends Seeder
{
    public function __construct(
        public ClassTypeRepositoryInterface $repository
    ) {
    }

    public function run(): void
    {
        if ($this->repository->count()){
            return;
        }

        foreach ($this->data() as $datum)
        {
            ClassType::factory()->name($datum)->create();
        }
    }

    public function data(): array
    {
        return [
            'Konfor',
            'Biznes'
        ];
    }
}
