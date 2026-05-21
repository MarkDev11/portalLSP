<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', $setting->site_name ?? 'Portal LSP UBSI')</title>
    
    <!-- Favicon (dynamic from settings) -->
    @if($setting->favicon_path)
        <link rel="icon" type="image/x-icon" href="{{ asset('storage/' . $setting->favicon_path) }}">
    @else
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @endif
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700,800&display=swap" rel="stylesheet" />
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Figtree', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        ink: { 50: '#f8fafc', 100: '#f1f5f9', 200: '#e2e8f0', 300: '#cbd5e1', 400: '#94a3b8', 500: '#64748b', 600: '#475569', 700: '#334155', 800: '#1e293b', 900: '#0f172a' },
                        accent: { 50: '#eff6ff', 100: '#dbeafe', 200: '#bfdbfe', 300: '#93c5fd', 400: '#60a5fa', 500: '#3b82f6', 600: '#2563eb', 700: '#1d4ed8', 800: '#1e40af', 900: '#1e3a8a' }
                    }
                }
            }
        }
    </script>
    
    <!-- Common CSS -->
    <style>
        /* Dynamic color variables from settings */
        :root {
            --color-header: {{ $setting->header_color ?? '#ffffff' }};
            --color-footer: {{ $setting->footer_color ?? '#0f172a' }};
            --color-accent: {{ $setting->accent_color ?? '#2563eb' }};
            --color-sidebar: {{ $setting->sidebar_color ?? '#0f172a' }};
        }
        
        html { scroll-behavior: smooth; }
        *, *::before, *::after { box-sizing: border-box; }
        body { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
        
        /* Editorial typography */
        .display { letter-spacing: -0.03em; line-height: 1.1; }
        .heading-tight { letter-spacing: -0.02em; line-height: 1.15; }
        .body-large { font-size: 1.125rem; line-height: 1.75; letter-spacing: -0.01em; }
        
        /* Separator lines */
        .line-accent { width: 48px; height: 2px; background: #2563eb; }
        .line-gray { width: 100%; height: 1px; background: #e2e8f0; }
        
        /* Grid background */
        .bg-grid { background-image: linear-gradient(rgba(226, 232, 240, 0.4) 1px, transparent 1px), linear-gradient(90deg, rgba(226, 232, 240, 0.4) 1px, transparent 1px); background-size: 80px 80px; }
        
        /* Hover underline animation */
        .link-animate { position: relative; }
        .link-animate::after { content: ''; position: absolute; left: 0; bottom: -2px; width: 0; height: 1.5px; background: #2563eb; transition: width 0.3s ease; }
        .link-animate:hover::after { width: 100%; }
        
        /* Card styles */
        .card-solid { border: 1px solid #e2e8f0; transition: all 0.25s ease; }
        .card-solid:hover { border-color: #93c5fd; }
        
        /* Image mask */
        .img-mask { position: relative; overflow: hidden; }
        .img-mask::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, transparent 60%, rgba(15, 23, 42, 0.04) 100%); pointer-events: none; }
        
        /* Reveal animation */
        .reveal { opacity: 0; transform: translateY(24px); transition: opacity 0.7s ease, transform 0.7s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        
        /* Navigation scroll state */
        .nav-scrolled { box-shadow: 0 1px 0 rgba(0,0,0,0.06); }
        
        /* Number styling */
        .stat-num { font-feature-settings: 'tnum'; font-variant-numeric: tabular-nums; }
    </style>
    
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
