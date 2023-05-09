@props([
    'route' => $route ?? '#',
    'method' => $method ?? 'DELETE',
    'title' => $title ?? __('Silmek istediğinize emin misiniz?'),
    'message' => $message ?? __('Bu işlem geri alınamaz.'),
    'btnCancel' => $btnCancel ?? __('Hayır'),
    'btnConfirm' => $btnConfirm ?? __('Evet'),
    'class' => $class ?? 'danger',
    'icon' => $icon ?? 'fas fa-trash'
])


<button
    type="button"
    class="btn btn-danger btn-sm"
    data-url="{{ $route }}"
    data-toggle="alert"
    data-method="{{ $method }}"
    data-title="{{ $title }}"
    data-message="{{ $message }}"
    data-btn-cancel="{{ $btnCancel }}"
    data-btn-confirm="{{ $btnConfirm }}"
>
    <i class="{{ $icon }}"></i>
</button>
