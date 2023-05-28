<?php

namespace App\Providers;

use App\Helpers\Classes\Helper;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class MacrosServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerRequestMacro();
        $this->registerUploadFileMacro();
        $this->registerResponseFactoryMacro();
        $this->registerRedirectResponseMacro();
    }

    public function boot(): void
    {
        //
    }

    private function registerRequestMacro(): void
    {
        Request::macro('destroyFile', function (string|null $path = '', $disk = null) {
            if ($path && is_string($path) && Storage::disk($disk)->exists($path)) {
                Storage::disk($disk)->delete($path);
            }

            return true;
        });
    }

    private function registerRedirectResponseMacro(): void
    {
        RedirectResponse::macro('withToast', fn(array $data = []) => $this->with(Helper::toast($data)));
    }

    private function registerResponseFactoryMacro(): void
    {
        ResponseFactory::macro(
            'toast',
            fn(array $data = []) => $this->json(Helper::toast($data))
        );
    }

    private function registerUploadFileMacro(): void
    {
        UploadedFile::macro('uuidName', fn() => Str::uuid()->toString() . '.' . $this->getClientOriginalExtension());

        UploadedFile::macro('isImage', fn() => in_array(
            $this->getClientMimeType(),
            ['image/jpeg', 'image/gif', 'image/png', 'image/svg+xml']
        ));
    }
}
