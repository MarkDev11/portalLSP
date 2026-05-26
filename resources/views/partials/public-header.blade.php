<!-- Top Navigation -->
<nav id="topnav" class="fixed top-0 left-0 right-0 z-50 border-b border-ink-100 transition-shadow" style="background-color: var(--color-header);">
    <div class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-20">
            
            <!-- Logo -->
            <a href="/" class="flex items-center gap-3 group">
                @if($setting?->logo_type === 'long' && $setting?->logo_long_path)
                    <!-- Long Logo with Text -->
                    <img src="{{ asset('storage/' . $setting->logo_long_path) }}"
                         alt="{{ $setting?->site_name ?? 'Portal LSP UBSI' }}"
                         class="h-10 object-contain">
                @elseif($setting?->logo_type === 'icon' && $setting?->logo_icon_path)
                    <!-- Icon Logo + Text -->
                    <img src="{{ asset('storage/' . $setting->logo_icon_path) }}"
                         alt="{{ $setting?->site_name ?? 'Portal LSP UBSI' }}"
                         class="h-10 w-10 object-contain">
                    <div>
                        <span class="text-lg font-bold text-ink-900 block leading-none">{{ $setting?->site_name ?? 'Portal LSP UBSI' }}</span>
                        <span class="text-xs text-ink-500">{{ $setting?->site_tagline ?? 'Lembaga Sertifikasi Profesi' }}</span>
                    </div>
                @else
                    <!-- Fallback: Default SVG Logo -->
                    <div class="w-10 h-10 flex items-center justify-center rounded" style="background-color: var(--color-accent);">
                        <svg viewBox="0 0 316 316" class="w-6 h-6 text-white" fill="currentColor">
                            <path d="M305.8 81.125L251.32 48.275c-1.35-.78-3.01-.78-4.36 0L194.51 78.475l-6.56 3.79v57.36l-43.71 25.17V52.575l-6.56-3.79L93.99 18.585c-1.35-.78-3.01-.78-4.36 0L37.18 48.785l-6.56 3.79v179.66l6.56 3.79 104.91 60.4c.23.13.48.21.72.29.11.04.22.11.35.13.37.1.74.15 1.12.15.38 0 .75-.05 1.12-.15.1-.03.19-.09.29-.12.26-.09.52-.18.76-.31l104.91-60.4 6.56-3.79v-57.36l6.56-3.79 50.26-28.94 6.56-3.79V85.755l-6.56-3.63zM144.2 227.205l-43.63-25.69 45.82-26.38 50.27-28.94 43.67 25.14-32.04 18.29-64.09 36.58z"/>
                        </svg>
                    </div>
                    <div>
                        <span class="text-lg font-bold text-ink-900 block leading-none">{{ $setting?->site_name ?? 'Portal LSP UBSI' }}</span>
                        <span class="text-xs text-ink-500">{{ $setting?->site_tagline ?? 'Lembaga Sertifikasi Profesi' }}</span>
                    </div>
                @endif
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center gap-8">
                <a href="/" class="text-sm {{ request()->is('/') ? 'font-bold' : 'font-medium text-ink-700' }} transition-colors" style="color: {{ request()->is('/') ? 'var(--color-accent)' : '#334155' }};" onmouseover="if(!this.classList.contains('font-bold')) this.style.color='var(--color-accent)'" onmouseout="if(!this.classList.contains('font-bold')) this.style.color='#334155'">
                    Beranda
                </a>
                <a href="/tentang-kami" class="text-sm {{ request()->is('tentang-kami') ? 'font-bold' : 'font-medium text-ink-700' }} transition-colors" style="color: {{ request()->is('tentang-kami') ? 'var(--color-accent)' : '#334155' }};" onmouseover="if(!this.classList.contains('font-bold')) this.style.color='var(--color-accent)'" onmouseout="if(!this.classList.contains('font-bold')) this.style.color='#334155'">
                    Tentang
                </a>
                <a href="/skema" class="text-sm {{ request()->is('skema') ? 'font-bold' : 'font-medium text-ink-700' }} transition-colors" style="color: {{ request()->is('skema') ? 'var(--color-accent)' : '#334155' }};" onmouseover="if(!this.classList.contains('font-bold')) this.style.color='var(--color-accent)'" onmouseout="if(!this.classList.contains('font-bold')) this.style.color='#334155'">
                    Skema
                </a>
                <a href="/berita" class="text-sm {{ request()->is('berita*') ? 'font-bold' : 'font-medium text-ink-700' }} transition-colors" style="color: {{ request()->is('berita*') ? 'var(--color-accent)' : '#334155' }};" onmouseover="if(!this.classList.contains('font-bold')) this.style.color='var(--color-accent)'" onmouseout="if(!this.classList.contains('font-bold')) this.style.color='#334155'">
                    Berita
                </a>
                <a href="/kontak" class="text-sm {{ request()->is('kontak') ? 'font-bold' : 'font-medium text-ink-700' }} transition-colors" style="color: {{ request()->is('kontak') ? 'var(--color-accent)' : '#334155' }};" onmouseover="if(!this.classList.contains('font-bold')) this.style.color='var(--color-accent)'" onmouseout="if(!this.classList.contains('font-bold')) this.style.color='#334155'">
                    Kontak
                </a>
            </div>
            
            <!-- Mobile Menu Toggle -->
            <button id="mobileMenuToggle" class="lg:hidden p-2 text-ink-700 transition-colors" onmouseover="this.style.color='var(--color-accent)'" onmouseout="this.style.color='#334155'">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu Drawer -->
<div id="mobileMenu" class="fixed top-0 right-0 bottom-0 w-80 shadow-2xl z-50 transform translate-x-full transition-transform duration-300 lg:hidden" style="background-color: var(--color-header);">
    <div class="p-6">
        <!-- Close Button -->
        <button onclick="document.getElementById('mobileMenu').classList.add('translate-x-full')" class="absolute top-6 right-6 p-2 text-ink-700 transition-colors" onmouseover="this.style.color='var(--color-accent)'" onmouseout="this.style.color='#334155'">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
        
        <!-- Mobile Menu Items -->
        <div class="mt-12 space-y-4">
            <a href="/" class="block text-lg {{ request()->is('/') ? 'font-bold' : 'font-medium text-ink-700' }} transition-colors" style="color: {{ request()->is('/') ? 'var(--color-accent)' : '#334155' }};" onmouseover="this.style.color='var(--color-accent)'" onmouseout="if(!this.classList.contains('font-bold')) this.style.color='#334155'">
                Beranda
            </a>
            <a href="/tentang-kami" class="block text-lg {{ request()->is('tentang-kami') ? 'font-bold' : 'font-medium text-ink-700' }} transition-colors" style="color: {{ request()->is('tentang-kami') ? 'var(--color-accent)' : '#334155' }};" onmouseover="this.style.color='var(--color-accent)'" onmouseout="if(!this.classList.contains('font-bold')) this.style.color='#334155'">
                Tentang
            </a>
            <a href="/skema" class="block text-lg {{ request()->is('skema') ? 'font-bold' : 'font-medium text-ink-700' }} transition-colors" style="color: {{ request()->is('skema') ? 'var(--color-accent)' : '#334155' }};" onmouseover="this.style.color='var(--color-accent)'" onmouseout="if(!this.classList.contains('font-bold')) this.style.color='#334155'">
                Skema
            </a>
            <a href="/berita" class="block text-lg {{ request()->is('berita*') ? 'font-bold' : 'font-medium text-ink-700' }} transition-colors" style="color: {{ request()->is('berita*') ? 'var(--color-accent)' : '#334155' }};" onmouseover="this.style.color='var(--color-accent)'" onmouseout="if(!this.classList.contains('font-bold')) this.style.color='#334155'">
                Berita
            </a>
            <a href="/kontak" class="block text-lg {{ request()->is('kontak') ? 'font-bold' : 'font-medium text-ink-700' }} transition-colors" style="color: {{ request()->is('kontak') ? 'var(--color-accent)' : '#334155' }};" onmouseover="this.style.color='var(--color-accent)'" onmouseout="if(!this.classList.contains('font-bold')) this.style.color='#334155'">
                Kontak
            </a>
        </div>
    </div>
</div>

<!-- Spacer for fixed nav -->
<div class="h-20"></div>
