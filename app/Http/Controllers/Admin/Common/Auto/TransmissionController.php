<?php

namespace App\Http\Controllers\Admin\Common\Auto;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Common\Auto\TransmissionRequest;
use App\Http\Requests\Admin\Common\Car\CarBrandRequest;
use App\Models\Common\Auto\Transmission;
use App\Models\Common\Car\CarBrand;
use App\QueryFilters\Common\NameLangFilter;
use App\QueryFilters\Common\StatusFilter;
use App\Services\Eloquent\Common\Auto\TransmissionService;
use App\Services\Eloquent\Common\Car\CarBrandService;
use Illuminate\Http\Request;

class TransmissionController extends Controller
{
    public function __construct(public TransmissionService $service)
    {
    }

    public function index()
    {
        $items = $this->service->paginate(
            sorting: $this->sorting(),
            perPage: $this->perPage(),
            filters: [
                NameLangFilter::class,
                StatusFilter::class,
            ]
        );

        return view('admin.pages.transmission.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.transmission.edit', [
            'title' => 'Sürət Qutusu əlavə et',
            'method' => 'post',
            'action' => route('admin.transmission.store'),
            'item' => $this->service->props(),
        ]);
    }

    public function store(TransmissionRequest $request)
    {
        $this->service->store($request->validated());

        return to_route('admin.transmission.index')->withToast();
    }

    public function edit(Transmission $transmission)
    {
        return view('admin.pages.transmission.edit', [
            'title' => 'Sürət Qutusu düzənlə',
            'method' => 'put',
            'action' => route('admin.transmission.update', $transmission),
            'item' => $transmission,
        ]);
    }

    public function update(TransmissionRequest $request, Transmission $transmission)
    {
        $this->service->update($transmission, $request->validated());

        return to_route('admin.transmission.index')->withToast();
    }

    public function destroy(Transmission $transmission)
    {
        $this->service->destroy($transmission);

        return response()->toast([
            'reload' => true,
        ]);
    }
}
