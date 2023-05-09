<div class="card-footer bg-white">
    @stack('pagination_start')
    @if ($items->firstItem())
        <div class="row">
            <div class="col-5 d-flex align-items-center">
                <select data-toggle="pagination" name="perPage" class="form-control form-control-sm d-inline-block w-auto d-none d-md-block">
                    <option value="10" {{ request('perPage') == '10' ? 'selected' : '' }}>10</option>
                    <option value="25" {{ request('perPage') == '25' ? 'selected' : '' }}>25</option>
                    <option value="50" {{ request('perPage', setting('default_list_limit','50')) == '50' ? 'selected' : '' }}>50</option>
                    <option value="100" {{ request('perPage') == '100' ? 'selected' : '' }}>100</option>
                </select>
                <span class="table-text d-none d-lg-block ms-2">
                    Toplam {{ $items->total() }} kayıt bulundu.
                </span>
            </div>
            <div class="col-sm-7 pagination-xs">
                <nav class="d-flex justify-content-end">
                    {!! $items->withPath(request()->url())->appends(request()->except('page'))->links() !!}
                </nav>
            </div>
        </div>
    @else
        <div class="col-xs-12 col-sm-12" id="datatable-basic_info" role="status" aria-live="polite">
            <span>{{ trans('Hiçbir kayıt bulunamadı') }}</span>
        </div>
    @endif
    @stack('pagination_end')
</div>
