<?php

namespace App\Http\Controllers\Admin\Common\Auto;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Common\Auto\MarketRequest;
use App\Http\Requests\Admin\Common\Car\CarBrandRequest;
use App\Models\Common\Auto\Market;
use App\Models\Common\Car\CarBrand;
use App\QueryFilters\Common\NameLangFilter;
use App\QueryFilters\Common\StatusFilter;
use App\Services\Eloquent\Common\Auto\MarketService;
use App\Services\Eloquent\Common\Car\CarBrandService;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function __construct(public MarketService $service)
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

        return view('admin.pages.market.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.market.edit', [
            'title' => 'Bazar əlavə et',
            'method' => 'post',
            'action' => route('admin.market.store'),
            'item' => $this->service->props(),
        ]);
    }

    public function store(MarketRequest $request)
    {
        $this->service->store($request->validated());

        return to_route('admin.market.index')->withToast();
    }

    public function edit(Market $market)
    {
        return view('admin.pages.market.edit', [
            'title' => 'Bazar düzənlə',
            'method' => 'put',
            'action' => route('admin.market.update', $market),
            'item' => $market,
        ]);
    }

    public function update(MarketRequest $request, Market $market)
    {
        $this->service->update($market, $request->validated());

        return to_route('admin.market.index')->withToast();
    }

    public function destroy(Market $market)
    {
        $this->service->destroy($market);

        return response()->toast([
            'reload' => true,
        ]);
    }
}
