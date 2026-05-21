<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Editor Dashboard') - {{ $setting->site_name ?? 'Portal LSP UBSI' }}</title>
    
    <!-- Favicon -->
    @if($setting->favicon_path)
        <link rel="icon" type="image/x-icon" href="{{ asset('storage/' . $setting->favicon_path) }}">
    @else
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @endif
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700,800&display=swap" rel="stylesheet" />
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
    <style>
        *, *::before, *::after { box-sizing: border-box; }
        body { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
        .heading-tight { letter-spacing: -0.02em; line-height: 1.15; }
    </style>
    @stack('styles')
</head>
<body class="bg-ink-50 text-ink-700 font-sans">

    <!-- Sidebar -->
    <aside id="sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full lg:translate-x-0" style="background-color: {{ $setting->sidebar_color ?? '#0f172a' }}">
        <div class="h-full px-4 py-6 overflow-y-auto">
            <!-- Logo -->
            <div class="flex items-center gap-2.5 mb-8 px-2">
                @if($setting->logo_type === 'long' && $setting->logo_long_path)
                    <!-- Long Logo with Text -->
                    <img src="{{ asset('storage/' . $setting->logo_long_path) }}" 
                         alt="{{ $setting->site_name }}" 
                         class="h-10 object-contain">
                @elseif($setting->logo_type === 'icon' && $setting->logo_icon_path)
                    <!-- Icon Logo Only -->
                    <img src="{{ asset('storage/' . $setting->logo_icon_path) }}" 
                         alt="{{ $setting->site_name }}" 
                         class="h-8 w-8 object-contain">
                    <div>
                        <span class="text-sm font-bold text-white block leading-none">{{ $setting->site_name }}</span>
                        <span class="text-[10px] font-semibold text-accent-400 uppercase tracking-wider mt-0.5 block">Editor Panel</span>
                    </div>
                @else
                    <!-- Fallback: Default SVG Logo -->
                    <div class="w-8 h-8 flex items-center justify-center" style="background-color: {{ $setting->accent_color ?? '#2563eb' }}">
                        <svg viewBox="0 0 316 316" class="w-5 h-5 text-white" fill="currentColor">
                            <path d="M305.8 81.125L251.32 48.275c-1.35-.78-3.01-.78-4.36 0L194.51 78.475l-6.56 3.79v57.36l-43.71 25.17V52.575l-6.56-3.79L93.99 18.585c-1.35-.78-3.01-.78-4.36 0L37.18 48.785l-6.56 3.79v179.66l6.56 3.79 104.91 60.4c.23.13.48.21.72.29.11.04.22.11.35.13.37.1.74.15 1.12.15.38 0 .75-.05 1.12-.15.1-.03.19-.09.29-.12.26-.09.52-.18.76-.31l104.91-60.4 6.56-3.79v-57.36l6.56-3.79 50.26-28.94 6.56-3.79V85.755l-6.56-3.63zM144.2 227.205l-43.63-25.69 45.82-26.38 50.27-28.94 43.67 25.14-32.04 18.29-64.09 36.58z"/>
                        </svg>
                    </div>
                    <div>
                        <span class="text-sm font-bold text-white block leading-none">{{ $setting->site_name }}</span>
                        <span class="text-[10px] font-semibold text-accent-400 uppercase tracking-wider mt-0.5 block">Editor Panel</span>
                    </div>
                @endif
            </div>

            <!-- Navigation -->
            <nav class="space-y-1">
                <a href="{{ route('editor.dashboard') }}" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium {{ request()->is('editor/dashboard') ? 'text-white bg-accent-600' : 'text-ink-300 hover:text-white hover:bg-ink-800' }} rounded transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6"/>
                    </svg>
                    Dashboard
                </a>
                
                <a href="{{ route('editor.news.index') }}" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium {{ request()->is('editor/news*') ? 'text-white bg-accent-600' : 'text-ink-300 hover:text-white hover:bg-ink-800' }} rounded transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/>
                    </svg>
                    Kelola Berita
                </a>

                <div class="pt-4 mt-4 border-t border-ink-800">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium text-ink-300 hover:text-white hover:bg-ink-800 rounded transition-colors w-full">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"/>
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="lg:ml-64">
        <!-- Top Bar -->
        <header class="bg-white border-b border-ink-200 sticky top-0 z-30">
            <div class="px-4 py-4 lg:px-8">
                <div class="flex items-center">
                    <button id="sidebarToggle" class="lg:hidden p-2 text-ink-500 hover:text-ink-900">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                        </svg>
                    </button>
                    
                    <div class="flex items-center gap-4 ml-auto">
                        <div class="text-right">
                            <p class="text-sm font-semibold text-ink-900">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-ink-500">Editor</p>
                        </div>
                        <div class="w-10 h-10 bg-accent-100 rounded-full flex items-center justify-center">
                            <span class="text-sm font-bold text-accent-700">{{ substr(Auth::user()->name, 0, 1) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="p-4 lg:p-8">
            @yield('content')
        </main>
    </div>

    <!-- Sidebar Toggle Script -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        
        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth < 1024) {
                if (!sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
                    sidebar.classList.add('-translate-x-full');
                }
            }
        });
    </script>
    
    @stack('scripts')
</body>
</html>
