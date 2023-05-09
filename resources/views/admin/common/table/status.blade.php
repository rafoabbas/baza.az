<span class="badge bg-{{ $status == \App\Enums\Common\Status::published() ? 'success' : 'warning' }}">
    @lang(\App\Enums\Common\Status::name($status))
</span>
