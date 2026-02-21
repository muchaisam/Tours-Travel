@props(['destination', 'size' => 'md'])

@php
$isWishlisted = auth()->check() && auth()->user()->hasWishlisted($destination);
$sizes = [
    'sm' => 'btn-sm',
    'md' => '',
    'lg' => 'btn-lg',
];
$sizeClass = $sizes[$size] ?? '';
@endphp

@auth
<button type="button"
        class="btn btn-wishlist {{ $sizeClass }} {{ $isWishlisted ? 'wishlisted' : '' }}"
        data-destination-id="{{ $destination->id }}"
        data-url="{{ route('wishlist.toggle', $destination) }}"
        title="{{ $isWishlisted ? 'Remove from wishlist' : 'Add to wishlist' }}"
        aria-label="{{ $isWishlisted ? 'Remove from wishlist' : 'Add to wishlist' }}"
        {{ $attributes }}>
    <i class="fa {{ $isWishlisted ? 'fa-heart' : 'fa-heart-o' }}"></i>
</button>
@else
<a href="{{ route('login') }}"
   class="btn btn-wishlist {{ $sizeClass }}"
   title="Login to add to wishlist"
   aria-label="Login to add to wishlist"
   {{ $attributes }}>
    <i class="fa fa-heart-o"></i>
</a>
@endauth

@pushOnce('styles')
<style>
.btn-wishlist {
    background: transparent;
    border: none;
    color: #e74c3c;
    font-size: 1.25rem;
    padding: 0.25rem 0.5rem;
    transition: transform 0.2s, color 0.2s;
}
.btn-wishlist:hover,
.btn-wishlist:focus {
    transform: scale(1.2);
    color: #c0392b;
}
.btn-wishlist.wishlisted {
    color: #e74c3c;
}
.btn-wishlist.wishlisted .fa {
    animation: heartbeat 0.3s ease-in-out;
}
@keyframes heartbeat {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.3); }
}
</style>
@endPushOnce

@pushOnce('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.btn-wishlist[data-url]').forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const url = this.dataset.url;
            const icon = this.querySelector('.fa');
            const button = this;

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.wishlisted) {
                    icon.classList.remove('fa-heart-o');
                    icon.classList.add('fa-heart');
                    button.classList.add('wishlisted');
                    button.title = 'Remove from wishlist';
                } else {
                    icon.classList.remove('fa-heart');
                    icon.classList.add('fa-heart-o');
                    button.classList.remove('wishlisted');
                    button.title = 'Add to wishlist';
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});
</script>
@endPushOnce
