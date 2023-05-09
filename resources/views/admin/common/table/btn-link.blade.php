@props([
    'route' => $route ?? '#',
    'class' => $class ?? 'success me-1',
    'icon' => $icon ?? 'fas fa-edit'
])

<a href="{{ $route }}" class="btn btn-sm btn-{{ $class }}">
    <i class="{{ $icon }}"></i>
</a>
