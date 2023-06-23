<?php

namespace Database\Seeders\Common\Number;

use App\Repositories\Contracts\Common\Number\NumberFrameRepositoryInterface;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class NumberFrameTableSeeder extends Seeder
{
    public function __construct(
        public  NumberFrameRepositoryInterface $repository
    ) {
    }

    public function run(): void
    {
        if ($this->repository->count()){
            return;
        }

        $path = $this->makeFolder();

        foreach ($this->data() as $item) {

            $upload = new UploadedFile(
                public_path('assets/front/img/_src/' . $item['frame']),
                $item['frame'],
                'image/jpeg',
                null,
                true
            );

            $upload->storeAs(
                 $path,
                $item['frame']
            );

            $this
                ->repository
                ->create([
                    'name' => $item['name'],
                    'frame' => $path . DIRECTORY_SEPARATOR . $item['frame'],
                ]);
        }
    }

    public function makeFolder(string $path = null, string $disk = 'public'): string
    {
        $path = $path ?? 'uploads' . DIRECTORY_SEPARATOR . date('y/m');

        if (Storage::disk($disk)->directoryMissing($path)) {
            Storage::disk($disk)->makeDirectory($path);
        }

        return $path;
    }

    public function data(): array
    {
        return [
            [
                'name' => 'Mercedes',
                'frame' => 'car-doc3.png'
            ],
            [
                'name' => 'Porsche',
                'frame' => 'car-doc.png'
            ],
            [
                'name' => 'Seat',
                'frame' => 'car-doc2.png'
            ],
        ];
    }
}
