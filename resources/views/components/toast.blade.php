@props(['type' => 'success', 'message' => '', 'autohide' => true, 'delay' => 5000])

@php
$types = [
    'success' => ['bg' => 'bg-success', 'icon' => 'fa-check-circle'],
    'error' => ['bg' => 'bg-danger', 'icon' => 'fa-times-circle'],
    'warning' => ['bg' => 'bg-warning', 'icon' => 'fa-exclamation-triangle'],
    'info' => ['bg' => 'bg-info', 'icon' => 'fa-info-circle'],
];
$config = $types[$type] ?? $types['info'];
@endphp

<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1080;">
    <div class="toast align-items-center text-white {{ $config['bg'] }} border-0"
         role="alert"
         aria-live="assertive"
         aria-atomic="true"
         data-bs-autohide="{{ $autohide ? 'true' : 'false' }}"
         data-bs-delay="{{ $delay }}">
        <div class="d-flex">
            <div class="toast-body">
                <i class="fa {{ $config['icon'] }} me-2"></i>
                {{ $message ?: $slot }}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

@pushOnce('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const toasts = document.querySelectorAll('.toast');
    toasts.forEach(function(toastEl) {
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
    });
});
</script>
@endPushOnce
