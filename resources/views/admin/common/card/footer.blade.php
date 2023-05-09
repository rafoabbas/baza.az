<div class="card-footer bg-white border-top d-flex justify-content-end">
    <a href="{{ $route ?? '#' }}" class="btn btn-icon btn-danger header-button-top float-right me-2">
        <span class="btn-inner--icon me-2">
            <i class="fas fa-times"></i>
        </span>
        <span class="btn-inner--text">{{ __('İptal') }}</span>
    </a>
    <button type="submit" data-loading-text="Yükleniyor..." class="btn btn-icon btn-success button-submit ">
        <span class="btn-inner--icon">
            <i class="fas fa-save me-2"></i>
        </span>
        <span class="btn-inner--text">{{ __('Kaydet') }}</span>
    </button>
</div>
