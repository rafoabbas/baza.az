@extends('admin.layouts.app')

@push('title', __('Rehber'))

@push('css')

@endpush

@push('style')

@endpush

@push('page-right')
    <div class="d-flex justify-content-end mb-2">
        <a href="{{ route('group.create') }}" class="btn btn-icon btn-success header-button-top float-right me-2">
            <span class="btn-inner--icon me-2">
                <i class="fas fa-plus"></i>
            </span>
            <span class="btn-inner--text">{{ __('Grup Ekle') }}</span>
        </a>
    </div>
@endpush
@section('content')
    <div class="card">
        <div class="card-header bg-white border-bottom">
            <h5 class="card-title mb-0">@lang('Rehber grupları')</h5>
        </div>
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                <tr>
                    <th>#</th>
                    <th>@sortablelink('name', 'Rehber')</th>
                    <th colspan="2">@sortablelink('receiver_count','Numara sayı')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $item->getAttribute('name') }}</td>
                        <td><a href="{{ route('group.contact.index', $item->getAttribute('id')) }}"
                               class="badge bg-success">{{ $item->getAttribute('receiver_count') ?: 0 }}</a></td>
                        <td class="d-flex justify-content-center align-items-center">
                            @include('admin.common.table.btn-link',['route' => route('group.edit', $item->getAttribute('id'))])
                            @include('admin.common.table.btn-alert', [ 'route' => route('group.destroy', $item->getAttribute('id')) ])
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
