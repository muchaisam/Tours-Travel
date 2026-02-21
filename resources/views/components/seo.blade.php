@props([
    'title' => 'ToursTravel Kenya - Discover Amazing Destinations',
    'description' => 'Explore Kenya and beyond with ToursTravel. Curated destinations, expert guides, and unforgettable experiences await.',
    'image' => asset('images/og-image.jpg'),
    'type' => 'website',
    'url' => url()->current(),
])

<!-- Primary Meta Tags -->
<title>{{ $title }}</title>
<meta name="title" content="{{ $title }}">
<meta name="description" content="{{ $description }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $type }}">
<meta property="og:url" content="{{ $url }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $image }}">
<meta property="og:site_name" content="ToursTravel Kenya">
<meta property="og:locale" content="en_US">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ $url }}">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $image }}">

<!-- Additional SEO -->
<meta name="robots" content="index, follow">
<meta name="author" content="ToursTravel Kenya">
<link rel="canonical" href="{{ $url }}">

<!-- JSON-LD Structured Data -->
@if($type === 'website')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "TravelAgency",
    "name": "ToursTravel Kenya",
    "description": "{{ $description }}",
    "url": "{{ url('/') }}",
    "logo": "{{ asset('images/logo.png') }}",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Ole Sangale Road, off Langata Road",
        "addressLocality": "Nairobi",
        "addressRegion": "Nairobi",
        "postalCode": "00100",
        "addressCountry": "KE"
    },
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+254712345678",
        "contactType": "customer service"
    },
    "sameAs": [
        "https://facebook.com/tourstravelkenya",
        "https://twitter.com/tourstravelke",
        "https://instagram.com/tourstravelkenya"
    ]
}
</script>
@endif
