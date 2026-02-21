@props(['size' => 'md', 'color' => 'primary'])

@php
$sizes = [
    'sm' => 'spinner-border-sm',
    'md' => '',
    'lg' => 'spinner-border spinner-lg',
];
$sizeClass = $sizes[$size] ?? '';
@endphp

<div class="d-flex justify-content-center align-items-center {{ $attributes->get('class', '') }}" {{ $attributes->except('class') }}>
    <div class="spinner-border text-{{ $color }} {{ $sizeClass }}" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
