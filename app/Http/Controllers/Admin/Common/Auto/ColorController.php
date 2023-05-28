<?php

namespace App\Http\Controllers\Admin\Common\Auto;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Common\Auto\ColorRequest;
use App\Models\Common\Auto\Color;
use App\QueryFilters\Common\NameLangFilter;
use App\QueryFilters\Common\StatusFilter;
use App\Services\Eloquent\Common\Auto\ColorService;

class ColorController extends Controller
{
    public function __construct(public ColorService $service)
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

        return view('admin.pages.color.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.car-brand.edit', [
            'title' => 'Rəng əlavə et',
            'method' => 'post',
            'action' => route('admin.color.store'),
            'item' => $this->service->props(),
        ]);
    }

    public function store(ColorRequest $request)
    {
        $this->service->store($request->validated());

        return to_route('admin.color.index')->withToast();
    }

    public function edit(Color $color)
    {
        return view('admin.pages.color.edit', [
            'title' => 'Rəng düzənlə',
            'method' => 'put',
            'action' => route('admin.color.update', $color),
            'item' => $color,
        ]);
    }

    public function update(ColorRequest $request, Color $color)
    {
        $this->service->update($color, $request->validated());

        return to_route('admin.color.index')->withToast();
    }

    public function destroy(Color $color)
    {
        $this->service->destroy($color);

        return response()->toast([
            'reload' => true,
        ]);
    }
}
