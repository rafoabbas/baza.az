@extends('admin.layouts.app')

@push('title', __('Ötürücülər'))

@push('css')

@endpush

@push('style')

@endpush

@push('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">@lang('Avto')</li>
@endpush

@push('page-right')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('admin.gear.create') }}" class="btn btn-icon btn-success header-button-top float-right me-2">
            <span class="btn-inner--icon me-2">
                <i class="fas fa-plus"></i>
            </span>
            <span class="btn-inner--text">{{ __('Ötürücü əlavə et') }}</span>
        </a>
    </div>
@endpush
@section('content')
    <div class="card">
        <div class="card-header bg-white border-bottom">
            <h5 class="card-title mb-0">@lang('Ötürücülər markaları')</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>@sortablelink('name', 'Ötürücü')</th>
                    <th>@sortablelink('status','Status')</th>
                    <th>@sortablelink('order','Order')</th>
                    <th colspan="2">@sortablelink('status','Status')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <th scope="row">{{ $item->getAttribute('id') }}</th>
                        <td>{{ $item->getAttribute('name') }}</td>
                        <td>
                            @include('admin.common.table.status', ['status' => $item->getAttribute('status')])
                        </td>
                        <td>
                            <span class="badge bg-secondary text-dark">{{ $item->getAttribute('order') }}</span>
                        </td>
                        <td>
                            {{ $item->getAttribute('created_at') }}
                        </td>
                        <td class="d-flex justify-content-center align-items-center">
                            @include('admin.common.table.btn-link',['route' => route('admin.gear.edit', $item->getAttribute('id'))])
                            @include('admin.common.table.btn-alert', [ 'route' => route('admin.gear.destroy', $item->getAttribute('id')) ])
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @include('admin.common.table.pagination', ['items' => $items])
    </div>
@endsection

@push('js')

@endpush

@push('script')

@endpush
