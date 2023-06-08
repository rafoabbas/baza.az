<?php

namespace App\Http\Controllers\Admin\Common\Auto;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Common\Auto\SpecificationRequest;
use App\Models\Common\Auto\Specification;
use App\QueryFilters\Common\NameLangFilter;
use App\QueryFilters\Common\StatusFilter;
use App\Services\Eloquent\Common\Auto\SpecificationService;

class SpecificationController extends Controller
{
    public function __construct(public SpecificationService $service)
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

        return view('admin.pages.specification.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.specification.edit', [
            'title' => 'Özəllik əlavə et',
            'method' => 'post',
            'action' => route('admin.specification.store'),
            'item' => $this->service->props(),
        ]);
    }

    public function store(SpecificationRequest $request)
    {
        $this->service->store($request->validated());

        return to_route('admin.specification.index')->withToast();
    }

    public function edit(Specification $specification)
    {
        return view('admin.pages.specification.edit', [
            'title' => 'Özəllik düzənlə',
            'method' => 'put',
            'action' => route('admin.specification.update', $specification),
            'item' => $specification,
        ]);
    }

    public function update(SpecificationRequest $request, Specification $specification)
    {
        $this->service->update($specification, $request->validated());

        return to_route('admin.specification.index')->withToast();
    }

    public function destroy(Specification $specification)
    {
        $this->service->destroy($specification);

        return response()->toast([
            'reload' => true,
        ]);
    }
}
