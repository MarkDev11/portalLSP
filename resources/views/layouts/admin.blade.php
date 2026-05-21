<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Dashboard') - {{ $setting->site_name ?? 'Portal LSP UBSI' }}</title>
    
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
                        <span class="text-[10px] font-semibold text-accent-400 uppercase tracking-wider mt-0.5 block">Admin Panel</span>
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
                        <span class="text-[10px] font-semibold text-accent-400 uppercase tracking-wider mt-0.5 block">Admin Panel</span>
                    </div>
                @endif
            </div>

            <!-- Navigation -->
            <nav class="space-y-1">
                <a href="/admin/dashboard" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium {{ request()->is('admin/dashboard') ? 'text-white bg-accent-600' : 'text-ink-300 hover:text-white hover:bg-ink-800' }} rounded transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Dashboard
                </a>
                <a href="{{ route('admin.landingpage.edit') }}" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium {{ request()->is('admin/landingpage*') ? 'text-white bg-accent-600' : 'text-ink-300 hover:text-white hover:bg-ink-800' }} rounded transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M12 21a9 9 0 01-9-9m9 9a9 9 0 009-9m-9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 0118 0"/></svg>
                    Landing Page
                </a>
                <a href="{{ route('admin.carousel.index') }}" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium {{ request()->is('admin/carousel*') ? 'text-white bg-accent-600' : 'text-ink-300 hover:text-white hover:bg-ink-800' }} rounded transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                    Carousel
                </a>
                <a href="{{ route('admin.news.index') }}" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium {{ request()->is('admin/news*') ? 'text-white bg-accent-600' : 'text-ink-300 hover:text-white hover:bg-ink-800' }} rounded transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/></svg>
                    Berita
                </a>
                <a href="{{ route('admin.tentang-kami.index') }}" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium {{ request()->is('admin/tentang-kami*') ? 'text-white bg-accent-600' : 'text-ink-300 hover:text-white hover:bg-ink-800' }} rounded transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/></svg>
                    Tentang Kami
                </a>
                <a href="{{ route('admin.kontak.index') }}" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium {{ request()->is('admin/kontak*') ? 'text-white bg-accent-600' : 'text-ink-300 hover:text-white hover:bg-ink-800' }} rounded transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                    Kontak
                </a>
                <a href="{{ route('admin.users.index') }}" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium {{ request()->is('admin/users*') ? 'text-white bg-accent-600' : 'text-ink-300 hover:text-white hover:bg-ink-800' }} rounded transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/></svg>
                    Users
                </a>
                <a href="/admin/settings" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium {{ request()->is('admin/settings*') ? 'text-white bg-accent-600' : 'text-ink-300 hover:text-white hover:bg-ink-800' }} rounded transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"/><path stroke-linecap="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    Settings
                </a>

                <div class="pt-4 mt-4 border-t border-ink-800">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center gap-3 px-3 py-2.5 text-sm font-medium text-ink-300 hover:text-white hover:bg-ink-800 rounded transition-colors w-full">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"/></svg>
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
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/></svg>
                    </button>
                    
                    <div class="flex items-center gap-4 ml-auto">
                        <div class="text-right">
                            <p class="text-sm font-semibold text-ink-900">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-ink-500">Administrator</p>
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
