@props(['rating' => 0, 'max' => 5, 'size' => 'md', 'interactive' => false, 'name' => 'rating'])

@php
$sizes = [
    'sm' => 'font-size: 0.875rem;',
    'md' => 'font-size: 1rem;',
    'lg' => 'font-size: 1.25rem;',
];
$sizeStyle = $sizes[$size] ?? $sizes['md'];
$rating = round($rating * 2) / 2; // Round to nearest 0.5
@endphp

@if($interactive)
<div class="star-rating-input" style="{{ $sizeStyle }}" {{ $attributes }}>
    @for($i = $max; $i >= 1; $i--)
    <input type="radio" id="star{{ $i }}" name="{{ $name }}" value="{{ $i }}" {{ $rating == $i ? 'checked' : '' }} class="visually-hidden">
    <label for="star{{ $i }}" class="star-label" title="{{ $i }} star{{ $i > 1 ? 's' : '' }}">
        <i class="fa fa-star"></i>
    </label>
    @endfor
</div>
<style>
.star-rating-input {
    display: flex;
    flex-direction: row-reverse;
    justify-content: flex-end;
}
.star-rating-input .star-label {
    color: #ddd;
    cursor: pointer;
    padding: 0 2px;
    transition: color 0.2s;
}
.star-rating-input input:checked ~ .star-label,
.star-rating-input .star-label:hover,
.star-rating-input .star-label:hover ~ .star-label {
    color: #ffc107;
}
</style>
@else
<div class="star-rating" style="{{ $sizeStyle }}" {{ $attributes }} aria-label="{{ $rating }} out of {{ $max }} stars">
    @for($i = 1; $i <= $max; $i++)
        @if($i <= floor($rating))
            <i class="fa fa-star text-warning"></i>
        @elseif($i - 0.5 <= $rating)
            <i class="fa fa-star-half-o text-warning"></i>
        @else
            <i class="fa fa-star-o text-muted"></i>
        @endif
    @endfor
</div>
@endif
