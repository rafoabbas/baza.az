<?php

namespace App\Http\Controllers\Admin\Common\Location;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Common\Location\NumberRegionRequest;
use App\Models\Common\Location\NumberRegion;
use App\QueryFilters\Common\NameLangFilter;
use App\QueryFilters\Common\StatusFilter;
use App\Services\Eloquent\Common\Location\NumberRegionService;
use Illuminate\Http\Request;

class NumberRegionController extends Controller
{
    public function __construct(public NumberRegionService $service)
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

        return view('admin.pages.location.number-region.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.location.number-region.edit', [
            'title' => 'Nömrə Region əlavə et',
            'method' => 'post',
            'action' => route('admin.number-region.store'),
            'item' => $this->service->props(),
        ]);
    }

    public function store(NumberRegionRequest $request)
    {
        $this->service->store($request->validated());

        return to_route('admin.number-region.index')->withToast();
    }

    public function edit(NumberRegion $numberRegion)
    {
        return view('admin.pages.location.number-region.edit', [
            'title' => 'Number Region düzənlə',
            'method' => 'put',
            'action' => route('admin.number-region.update', $numberRegion),
            'item' => $numberRegion,
        ]);
    }

    public function update(NumberRegion $request, NumberRegion $numberRegion)
    {
        $this->service->update($numberRegion, $request->validated());

        return to_route('admin.number-region.index')->withToast();
    }

    public function destroy(NumberRegion $numberRegion)
    {
        $this->service->destroy($numberRegion);

        return response()->toast([
            'reload' => true,
        ]);
    }
}
