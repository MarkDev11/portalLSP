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
            --color-header: {{ $setting?->header_color ?? '#ffffff' }};
            --color-footer: {{ $setting?->footer_color ?? '#0f172a' }};
            --color-accent: {{ $setting?->accent_color ?? '#2563eb' }};
            --color-sidebar: {{ $setting?->sidebar_color ?? '#0f172a' }};
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

        /* Rich text content (TinyMCE output) */
        .article-body { color: #334155; font-size: 1rem; line-height: 1.75; }
        .article-body h1, .article-body h2, .article-body h3, .article-body h4, .article-body h5, .article-body h6 { color: #0f172a; font-weight: 700; line-height: 1.25; margin-top: 2rem; margin-bottom: 1rem; }
        .article-body h1 { font-size: 2.25rem; }
        .article-body h2 { font-size: 1.875rem; }
        .article-body h3 { font-size: 1.5rem; }
        .article-body h4 { font-size: 1.25rem; }
        .article-body h5 { font-size: 1.125rem; }
        .article-body h6 { font-size: 1rem; }
        .article-body p { margin: 0 0 1.25rem; }
        .article-body a { color: var(--color-accent); text-decoration: underline; }
        .article-body a:hover { opacity: 0.8; }
        .article-body strong, .article-body b { font-weight: 700; color: #0f172a; }
        .article-body em, .article-body i { font-style: italic; }
        .article-body u { text-decoration: underline; }
        .article-body s, .article-body strike, .article-body del { text-decoration: line-through; }
        .article-body ul, .article-body ol { margin: 1rem 0 1.25rem; padding-left: 1.75rem; }
        .article-body ul { list-style-type: disc; }
        .article-body ol { list-style-type: decimal; }
        .article-body ul ul { list-style-type: circle; }
        .article-body ul ul ul { list-style-type: square; }
        .article-body li { margin: 0.25rem 0; }
        .article-body li > p { margin-bottom: 0.5rem; }
        .article-body blockquote { border-left: 4px solid var(--color-accent); padding-left: 1rem; margin: 1.5rem 0; font-style: italic; color: #475569; }
        .article-body pre { background-color: #0f172a; color: #f8fafc; padding: 1rem; border-radius: 0.5rem; overflow-x: auto; margin: 1.5rem 0; font-size: 0.875rem; }
        .article-body code { background-color: #f1f5f9; color: #0f172a; padding: 0.125rem 0.375rem; border-radius: 0.25rem; font-size: 0.875em; }
        .article-body pre code { background-color: transparent; color: inherit; padding: 0; }
        .article-body img { max-width: 100%; height: auto; border-radius: 0.5rem; margin: 1.5rem 0; }
        .article-body table { width: 100%; border-collapse: collapse; margin: 1.5rem 0; }
        .article-body th, .article-body td { border: 1px solid #e2e8f0; padding: 0.5rem 0.75rem; text-align: left; }
        .article-body th { background-color: #f8fafc; font-weight: 600; }
        .article-body hr { border: 0; border-top: 1px solid #e2e8f0; margin: 2rem 0; }
        .article-body iframe { max-width: 100%; margin: 1.5rem 0; }
        .article-body > *:first-child { margin-top: 0; }
        .article-body > *:last-child { margin-bottom: 0; }
        .article-body [style*="text-align: center"] { text-align: center; }
        .article-body [style*="text-align: right"] { text-align: right; }
        .article-body [style*="text-align: justify"] { text-align: justify; }
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
