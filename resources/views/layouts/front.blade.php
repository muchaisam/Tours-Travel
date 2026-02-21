<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @hasSection('seo')
        @yield('seo')
    @else
        <title>ToursTravel - Discover Amazing Destinations in Kenya</title>
        <meta name="description" content="Explore Kenya and beyond with ToursTravel. Curated destinations, expert guides, and unforgettable experiences await.">
    @endif

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- AOS (animations) -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <!-- Unified Theme -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

    @stack('styles')
</head>
<body>
    <!-- Accessibility skip link -->
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <!-- Flash Messages -->
    <x-flash-messages />

    @yield('page')

    <main id="main-content">
        @yield('content')
    </main>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Init AOS
        AOS.init({ duration: 800, easing: 'ease-out', once: true, offset: 60 });

        // Navbar scroll class
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('.tt-navbar');
            if (nav) nav.classList.toggle('scrolled', window.scrollY > 40);
        });
    </script>

    @stack('scripts')
</body>
</html>