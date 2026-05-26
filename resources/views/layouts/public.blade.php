<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', $setting?->site_name ?? 'Portal LSP UBSI')</title>

    <!-- Favicon (dynamic from settings) -->
    @if($setting?->favicon_path)
        <link rel="icon" type="image/x-icon" href="{{ asset('storage/' . $setting->favicon_path) }}">
    @else
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @endif

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Dynamic color variables from settings -->
    <style>
        :root {
            --color-header: {{ $setting?->header_color ?? '#ffffff' }};
            --color-footer: {{ $setting?->footer_color ?? '#0f172a' }};
            --color-accent: {{ $setting?->accent_color ?? '#2563eb' }};
            --color-sidebar: {{ $setting?->sidebar_color ?? '#0f172a' }};
        }
    </style>

    <!-- Compiled assets (Vite) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="bg-white text-ink-700 font-sans">

    <!-- Header -->
    @include('partials.public-header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.public-footer')

    <!-- Common JavaScript -->
    <script>
        // Mobile menu toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.getElementById('mobileMenu');

        if (mobileMenuToggle && mobileMenu) {
            mobileMenuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('translate-x-full');
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!mobileMenu.contains(e.target) && !mobileMenuToggle.contains(e.target)) {
                    mobileMenu.classList.add('translate-x-full');
                }
            });
        }

        // Scroll reveal animation
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

        // Navigation shadow on scroll
        const topnav = document.getElementById('topnav');
        if (topnav) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 20) {
                    topnav.classList.add('nav-scrolled');
                } else {
                    topnav.classList.remove('nav-scrolled');
                }
            });
        }
    </script>

    @stack('scripts')
</body>
</html>
