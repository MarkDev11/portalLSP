<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal LSP UBSI - Lembaga Sertifikasi Profesi</title>
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
        html { scroll-behavior: smooth; }
        *, *::before, *::after { box-sizing: border-box; }
        
        body { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
        
        /* Carousel */
        .carousel { display: flex; transition: transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1); }
        
        /* Editorial typography */
        .display { letter-spacing: -0.03em; line-height: 1.1; }
        .heading-tight { letter-spacing: -0.02em; line-height: 1.15; }
        .body-large { font-size: 1.125rem; line-height: 1.75; letter-spacing: -0.01em; }
        
        /* Separator line */
        .line-accent { width: 48px; height: 2px; background: #2563eb; }
        .line-gray { width: 100%; height: 1px; background: #e2e8f0; }
        
        /* Grid lines background */
        .bg-grid { background-image: linear-gradient(rgba(226, 232, 240, 0.4) 1px, transparent 1px), linear-gradient(90deg, rgba(226, 232, 240, 0.4) 1px, transparent 1px); background-size: 80px 80px; }
        
        /* Hover underline animation */
        .link-animate { position: relative; }
        .link-animate::after { content: ''; position: absolute; left: 0; bottom: -2px; width: 0; height: 1.5px; background: #2563eb; transition: width 0.3s ease; }
        .link-animate:hover::after { width: 100%; }
        
        /* Subtle card */
        .card-solid { border: 1px solid #e2e8f0; transition: all 0.25s ease; }
        .card-solid:hover { border-color: #93c5fd; }
        
        /* Image mask */
        .img-mask { position: relative; overflow: hidden; }
        .img-mask::after { content: ''; position: absolute; inset: 0; background: linear-gradient(180deg, transparent 60%, rgba(15, 23, 42, 0.04) 100%); pointer-events: none; }
        
        /* Reveal */
        .reveal { opacity: 0; transform: translateY(24px); transition: opacity 0.7s ease, transform 0.7s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        
        /* Nav scroll state */
        .nav-scrolled { box-shadow: 0 1px 0 rgba(0,0,0,0.06); }
        
        /* Number styling for stats */
        .stat-num { font-feature-settings: 'tnum'; font-variant-numeric: tabular-nums; }
        
        /* Carousel slide gradients */
        .slide-one { background: linear-gradient(160deg, #1e3a8a 0%, #1e40af 30%, #2563eb 60%, #3b82f6 100%); }
        .slide-two { background: linear-gradient(160deg, #0f172a 0%, #1e3a8a 40%, #2563eb 80%, #3b82f6 100%); }
        .slide-three { background: linear-gradient(160deg, #1e40af 0%, #2563eb 35%, #3b82f6 65%, #60a5fa 100%); }
        
        /* Geometric shapes inside slides */
        .geo-ring { position: absolute; border: 1px solid rgba(255,255,255,0.1); border-radius: 50%; }
        .geo-line { position: absolute; background: rgba(255,255,255,0.08); }
        
        /* Form focus */
        input:focus, textarea:focus { outline: none; border-color: #2563eb; }
        
        /* Line clamp */
        .clamp-2 { display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .clamp-3 { display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }
    </style>
</head>
<body class="bg-white text-ink-700 font-sans">

    <!-- ===== NAVIGATION ===== -->
    <nav id="topnav" class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur transition-all duration-300">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo mark -->
                <a href="#" class="flex items-center gap-2.5 group">
                    <div class="w-8 h-8 bg-accent-700 flex items-center justify-center">
                        <svg viewBox="0 0 316 316" class="w-5 h-5 text-white" fill="currentColor">
                            <path d="M305.8 81.125L251.32 48.275c-1.35-.78-3.01-.78-4.36 0L194.51 78.475l-6.56 3.79v57.36l-43.71 25.17V52.575l-6.56-3.79L93.99 18.585c-1.35-.78-3.01-.78-4.36 0L37.18 48.785l-6.56 3.79v179.66l6.56 3.79 104.91 60.4c.23.13.48.21.72.29.11.04.22.11.35.13.37.1.74.15 1.12.15.38 0 .75-.05 1.12-.15.1-.03.19-.09.29-.12.26-.09.52-.18.76-.31l104.91-60.4 6.56-3.79v-57.36l6.56-3.79 50.26-28.94 6.56-3.79V85.755l-6.56-3.63zM144.2 227.205l-43.63-25.69 45.82-26.38 50.27-28.94 43.67 25.14-32.04 18.29-64.09 36.58z"/>
                        </svg>
                    </div>
                    <div>
                        <span class="text-[15px] font-bold text-ink-900 tracking-tight block leading-none">UBSI Portal LSP</span>
                        <span class="text-[10px] font-semibold text-accent-600 uppercase tracking-[0.12em] mt-0.5 block">Lembaga Sertifikasi Profesi</span>
                    </div>
                </a>
                
                <!-- Desktop nav -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="#beranda" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors link-animate">Beranda</a>
                    <a href="/tentang-kami" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors link-animate">Tentang</a>
                    <a href="/skema" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors link-animate">Skema</a>
                    <a href="/berita" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors link-animate">Berita</a>
                    <a href="/kontak" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors link-animate">Kontak</a>
                </div>
                
                <!-- Mobile toggle -->
                <button id="menuBtn" class="md:hidden p-2 text-ink-500 hover:text-ink-900">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobileMenu" class="hidden md:hidden border-t border-ink-100 bg-white">
            <div class="px-6 py-4 space-y-1">
                <a href="#beranda" class="block py-2 text-sm font-medium text-ink-600 hover:text-ink-900">Beranda</a>
                <a href="/tentang-kami" class="block py-2 text-sm font-medium text-ink-600 hover:text-ink-900">Tentang</a>
                <a href="/skema" class="block py-2 text-sm font-medium text-ink-600 hover:text-ink-900">Skema</a>
                <a href="/berita" class="block py-2 text-sm font-medium text-ink-600 hover:text-ink-900">Berita</a>
                <a href="/kontak" class="block py-2 text-sm font-medium text-ink-600 hover:text-ink-900">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- ===== CAROUSEL (Clean, no text overlay) ===== -->
    <section id="beranda" class="pt-16">
        <div class="relative h-[520px] md:h-[600px] overflow-hidden bg-ink-900">
            <div id="track" class="carousel h-full">
                <div class="w-full flex-shrink-0 slide-one relative">
                    <div class="geo-ring w-[600px] h-[600px] -top-[200px] -right-[200px]"></div>
                    <div class="geo-ring w-[400px] h-[400px] top-[100px] -left-[100px] opacity-50"></div>
                    <div class="geo-line w-[200px] h-px top-1/2 right-[10%] rotate-[-30deg]"></div>
                </div>
                <div class="w-full flex-shrink-0 slide-two relative">
                    <div class="geo-ring w-[500px] h-[500px] -bottom-[150px] -right-[150px]"></div>
                    <div class="geo-ring w-[300px] h-[300px] top-[50px] left-[15%] opacity-40"></div>
                    <div class="geo-line w-[150px] h-px top-[40%] left-[20%] rotate-[25deg]"></div>
                </div>
                <div class="w-full flex-shrink-0 slide-three relative">
                    <div class="geo-ring w-[550px] h-[550px] -top-[180px] left-[10%]"></div>
                    <div class="geo-ring w-[350px] h-[350px] bottom-[10%] -right-[80px] opacity-50"></div>
                    <div class="geo-line w-[180px] h-px bottom-[30%] left-[30%] rotate-[-20deg]"></div>
                </div>
            </div>
            
            <!-- Controls -->
            <button id="prevBtn" class="absolute left-5 md:left-10 top-1/2 -translate-y-1/2 w-11 h-11 flex items-center justify-center text-white/80 hover:text-white border border-white/20 hover:border-white/40 transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button id="nextBtn" class="absolute right-5 md:right-10 top-1/2 -translate-y-1/2 w-11 h-11 flex items-center justify-center text-white/80 hover:text-white border border-white/20 hover:border-white/40 transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M9 5l7 7-7 7"/></svg>
            </button>
            
            <div class="absolute bottom-7 left-1/2 -translate-x-1/2 flex gap-2">
                <button class="dot w-2 h-2 bg-white/40 rounded-full transition-all" data-i="0"></button>
                <button class="dot w-2 h-2 bg-white/40 rounded-full transition-all" data-i="1"></button>
                <button class="dot w-2 h-2 bg-white/40 rounded-full transition-all" data-i="2"></button>
            </div>
        </div>
        
        <!-- Hero text BELOW carousel -->
        <div class="max-w-6xl mx-auto px-6 lg:px-8 -mt-20 relative z-10">
            <div class="bg-white border border-ink-200 p-8 md:p-12 reveal">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
                    <div class="max-w-xl">
                        <p class="text-accent-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">Lembaga Sertifikasi Profesi</p>
                        <h1 class="text-3xl md:text-5xl font-bold text-ink-900 heading-tight display mb-4">Portal <span class="text-accent-600">LSP UBSI</span></h1>
                        <p class="body-large text-ink-500">Wujudkan kompetensi profesional Anda melalui sertifikasi berstandar nasional. Terlisensi BNSP dan diakui industri.</p>
                    </div>
                    <div class="flex gap-3 flex-shrink-0">
                        <a href="/skema" class="px-6 py-3 bg-accent-600 text-white text-sm font-semibold hover:bg-accent-700 transition-colors">Jelajahi Skema</a>
                        <a href="/tentang-kami" class="px-6 py-3 border border-ink-300 text-ink-700 text-sm font-semibold hover:border-ink-400 hover:text-ink-900 transition-colors">Tentang Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TENTANG KAMI (Left text, Right visual) ===== -->
    <section id="tentang" class="py-24 md:py-32 bg-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left: Content -->
                <div class="reveal">
                    <p class="text-accent-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">Tentang Kami</p>
                    <h2 class="text-3xl md:text-[2.5rem] font-bold text-ink-900 heading-tight display mb-6">Membangun Kompetensi <span class="text-accent-600">Profesional Indonesia</span></h2>
                    <div class="line-accent mb-8"></div>
                    <div class="space-y-4 text-ink-500 leading-relaxed">
                        <p>LSP UBSI adalah lembaga sertifikasi profesi yang berkomitmen menghasilkan tenaga kerja Indonesia yang kompeten dan berdaya saing tinggi di era digital.</p>
                        <p>Kami menyediakan layanan sertifikasi kompetensi berbasis Standar Kompetensi Kerja Nasional Indonesia (SKKNI) yang diakui secara nasional.</p>
                    </div>
                    
                    <div class="grid grid-cols-3 gap-8 mt-10 pt-10 border-t border-ink-100">
                        <div>
                            <div class="text-2xl md:text-3xl font-bold text-ink-900 stat-num">15+</div>
                            <div class="text-[13px] text-ink-400 mt-1">Skema Sertifikasi</div>
                        </div>
                        <div>
                            <div class="text-2xl md:text-3xl font-bold text-ink-900 stat-num">2.500+</div>
                            <div class="text-[13px] text-ink-400 mt-1">Peserta Tersertifikasi</div>
                        </div>
                        <div>
                            <div class="text-2xl md:text-3xl font-bold text-ink-900 stat-num">98%</div>
                            <div class="text-[13px] text-ink-400 mt-1">Tingkat Kelulusan</div>
                        </div>
                    </div>
                    
                    <a href="#kontak" class="inline-flex items-center gap-2 mt-10 text-sm font-semibold text-accent-600 hover:text-accent-700 transition-colors group">
                        Hubungi Kami
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
                
                <!-- Right: Visual composition -->
                <div class="reveal relative">
                    <div class="relative">
                        <!-- Background large number -->
                        <div class="absolute -top-8 -right-8 text-[160px] font-bold text-ink-100 leading-none select-none pointer-events-none hidden lg:block z-20">LSP</div>
                        
                        <!-- Main image block -->
                        <div class="relative border border-ink-200 bg-accent-50 aspect-[4/3] flex items-center justify-center z-10">
                            <svg class="w-40 h-40 text-accent-200" viewBox="0 0 200 200" fill="currentColor">
                                <circle cx="100" cy="100" r="80" fill="none" stroke="currentColor" stroke-width="1"/>
                                <circle cx="100" cy="100" r="55" fill="none" stroke="currentColor" stroke-width="1"/>
                                <circle cx="100" cy="100" r="30" fill="none" stroke="currentColor" stroke-width="1"/>
                                <line x1="100" y1="20" x2="100" y2="180" stroke="currentColor" stroke-width="1"/>
                                <line x1="20" y1="100" x2="180" y2="100" stroke="currentColor" stroke-width="1"/>
                                <circle cx="100" cy="100" r="8" fill="currentColor" opacity="0.3"/>
                            </svg>
                            
                            <!-- Status badge -->
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <div class="bg-white border border-ink-200 px-4 py-3 flex items-center gap-3">
                                    <svg class="w-5 h-5 text-accent-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    <div>
                                        <div class="text-sm font-semibold text-ink-900">Sertifikasi Aktif</div>
                                        <div class="text-xs text-ink-400">Lisensi BNSP Diterima</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating accent -->
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-accent-600 -z-10 hidden md:block"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== DAFTAR SKEMA ===== -->
    <section id="skema" class="py-24 md:py-32 bg-ink-50 bg-grid">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <p class="text-accent-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">Layanan Kami</p>
                <h2 class="text-3xl md:text-[2.5rem] font-bold text-ink-900 heading-tight display">Daftar Skema Sertifikasi</h2>
                <div class="line-accent mx-auto mt-6"></div>
                <p class="text-ink-500 mt-6 max-w-lg mx-auto leading-relaxed">Pilih skema sertifikasi yang sesuai dengan bidang kompetensi Anda untuk meningkatkan daya saing di dunia kerja.</p>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-px bg-ink-200 border border-ink-200">
                <!-- Skema 01 -->
                <div class="reveal bg-white p-8 hover:bg-accent-50 transition-colors group">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold text-accent-700 group-hover:text-accent-800 transition-colors tracking-wider block text-center">SB-001/1/LSP-UBSI/VIII/2023</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">Junior Web Developer</h3>
                </div>
                
                <!-- Skema 02 -->
                <div class="reveal bg-white p-8 hover:bg-accent-50 transition-colors group delay-100">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold text-accent-700 group-hover:text-accent-800 transition-colors tracking-wider block text-center">SB-015/1/LSP-UBSI/IX/2023</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">Digital Marketing</h3>
                </div>
                
                <!-- Skema 03 -->
                <div class="reveal bg-white p-8 hover:bg-accent-50 transition-colors group delay-200">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold text-accent-700 group-hover:text-accent-800 transition-colors tracking-wider block text-center">SB-022/1/LSP-UBSI/X/2023</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">Administrasi Sistem</h3>
                </div>
                
                <!-- Skema 04 -->
                <div class="reveal bg-white p-8 hover:bg-accent-50 transition-colors group delay-300">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold text-accent-700 group-hover:text-accent-800 transition-colors tracking-wider block text-center">SB-028/1/LSP-UBSI/XI/2023</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">Data Analyst</h3>
                </div>
                
                <!-- Skema 05 -->
                <div class="reveal bg-white p-8 hover:bg-accent-50 transition-colors group">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold text-accent-700 group-hover:text-accent-800 transition-colors tracking-wider block text-center">SB-031/1/LSP-UBSI/XI/2023</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">Mobile Developer</h3>
                </div>
                
                <!-- Skema 06 -->
                <div class="reveal bg-white p-8 hover:bg-accent-50 transition-colors group delay-100">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold text-accent-700 group-hover:text-accent-800 transition-colors tracking-wider block text-center">SB-036/1/LSP-UBSI/XII/2023</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">Photography</h3>
                </div>
                
                <!-- Skema 07 -->
                <div class="reveal bg-white p-8 hover:bg-accent-50 transition-colors group delay-200">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold text-accent-700 group-hover:text-accent-800 transition-colors tracking-wider block text-center">SB-042/1/LSP-UBSI/I/2024</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">UI/UX Design</h3>
                </div>
                
                <!-- Skema 08 -->
                <div class="reveal bg-white p-8 hover:bg-accent-50 transition-colors group delay-300">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold text-accent-700 group-hover:text-accent-800 transition-colors tracking-wider block text-center">SB-048/1/LSP-UBSI/II/2024</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">Technical Writer</h3>
                </div>
            </div>
            
            <!-- Tombol Selengkapnya -->
            <div class="text-center mt-12">
                <a href="/skema" class="inline-flex items-center gap-2 px-8 py-3 border border-ink-300 text-ink-700 text-sm font-semibold hover:border-accent-600 hover:text-accent-600 transition-colors group">
                    Selengkapnya
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== BERITA ===== -->
    <section id="berita" class="py-24 md:py-32 bg-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="mb-16 reveal">
                <p class="text-accent-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">Update Terbaru</p>
                <h2 class="text-3xl md:text-[2.5rem] font-bold text-ink-900 heading-tight display">Berita & Informasi</h2>
                <div class="line-accent mt-6"></div>
            </div>
            
            <div class="grid lg:grid-cols-12 gap-8">
                <!-- LEFT: Main featured (7 cols) -->
                <div class="lg:col-span-7 reveal">
                    <article class="group cursor-pointer">
                        <div class="img-mask bg-accent-50 aspect-[16/10] mb-6 flex items-center justify-center border border-ink-100">
                            <svg class="w-20 h-20 text-accent-200" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1">
                                <rect x="8" y="10" width="32" height="24" rx="1"/>
                                <line x1="8" y1="18" x2="40" y2="18" stroke-width="1"/>
                                <line x1="14" y1="24" x2="26" y2="24" stroke-width="1"/>
                                <line x1="14" y1="28" x2="22" y2="28" stroke-width="1"/>
                                <circle cx="36" cy="34" r="7" fill="white" fill-opacity="0.5"/>
                                <path d="M33 34l2 2 4-4" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <div class="flex items-center gap-4 mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-accent-600 bg-accent-50 px-2.5 py-1">Informasi</span>
                            <span class="text-xs text-ink-400">15 Januari 2026</span>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-ink-900 heading-tight mb-3 group-hover:text-accent-600 transition-colors leading-snug">
                            Pembukaan Pendaftaran Sertifikasi Kompetensi Periode Januari 2026
                        </h3>
                        <p class="text-ink-500 leading-relaxed text-[15px] mb-4">
                            LSP UBSI kembali membuka kesempatan bagi masyarakat umum dan mahasiswa untuk mengikuti uji sertifikasi kompetensi pada periode Januari 2026. Terdapat 8 skema sertifikasi yang dibuka pada periode ini mulai dari Junior Web Developer, Digital Marketing, hingga Data Analyst...
                        </p>
                        <span class="text-sm font-semibold text-accent-600 group-hover:underline underline-offset-4 decoration-1">Baca Selengkapnya</span>
                    </article>
                </div>
                
                <!-- RIGHT: Side list (5 cols) -->
                <div class="lg:col-span-5 space-y-6">
                    <article class="reveal flex gap-4 cursor-pointer group delay-100">
                        <div class="w-24 h-24 flex-shrink-0 bg-accent-50 border border-ink-100 flex items-center justify-center">
                            <svg class="w-8 h-8 text-accent-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><rect x="3" y="4" width="18" height="16" rx="1"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="8" y1="2" x2="8" y2="5"/><line x1="16" y1="2" x2="16" y2="5"/></svg>
                        </div>
                        <div class="min-w-0">
                            <span class="text-[11px] text-ink-400">10 Januari 2026</span>
                            <h4 class="text-sm font-bold text-ink-900 mt-1 mb-1 group-hover:text-accent-600 transition-colors clamp-2 leading-snug">
                                Workshop Persiapan Uji Kompetensi Batch 12
                            </h4>
                            <p class="text-xs text-ink-400 clamp-2 leading-relaxed">Workshop intensif untuk mempersiapkan peserta uji kompetensi...</p>
                        </div>
                    </article>
                    
                    <div class="line-gray"></div>
                    
                    <article class="reveal flex gap-4 cursor-pointer group delay-200">
                        <div class="w-24 h-24 flex-shrink-0 bg-accent-50 border border-ink-100 flex items-center justify-center">
                            <svg class="w-8 h-8 text-accent-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg>
                        </div>
                        <div class="min-w-0">
                            <span class="text-[11px] text-ink-400">5 Januari 2026</span>
                            <h4 class="text-sm font-bold text-ink-900 mt-1 mb-1 group-hover:text-accent-600 transition-colors clamp-2 leading-snug">
                                Perpanjangan Lisensi BNSP LSP UBSI hingga 2028
                            </h4>
                            <p class="text-xs text-ink-400 clamp-2 leading-relaxed">LSP UBSI berhasil memperpanjang lisensi Badan Nasional...</p>
                        </div>
                    </article>
                    
                    <div class="line-gray"></div>
                    
                    <article class="reveal flex gap-4 cursor-pointer group delay-300">
                        <div class="w-24 h-24 flex-shrink-0 bg-accent-50 border border-ink-100 flex items-center justify-center">
                            <svg class="w-8 h-8 text-accent-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                        </div>
                        <div class="min-w-0">
                            <span class="text-[11px] text-ink-400">28 Desember 2025</span>
                            <h4 class="text-sm font-bold text-ink-900 mt-1 mb-1 group-hover:text-accent-600 transition-colors clamp-2 leading-snug">
                                500 Peserta Tersertifikasi pada Tahun 2025
                            </h4>
                            <p class="text-xs text-ink-400 clamp-2 leading-relaxed">Pencapaian gemilang dengan 500 peserta berhasil lulus...</p>
                        </div>
                    </article>
                    
                    <!-- Button below 3 cards -->
                    <div class="mt-8 reveal">
                        <a href="/berita" class="block text-center px-6 py-3 bg-accent-600 text-white text-sm font-semibold hover:bg-accent-700 transition-colors">
                            Lihat Semua Berita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== KONTAK ===== -->
    <section id="kontak" class="py-24 md:py-32 bg-ink-50 bg-grid">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <p class="text-accent-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">Hubungi Kami</p>
                <h2 class="text-3xl md:text-[2.5rem] font-bold text-ink-900 heading-tight display">Kontak & Lokasi</h2>
                <div class="line-accent mx-auto mt-6"></div>
            </div>
            
            <div class="grid lg:grid-cols-12 gap-10">
                <!-- Left: Info (7 cols) -->
                <div class="lg:col-span-7 reveal">
                    <div class="bg-white border border-ink-200 p-8 md:p-10">
                        <h3 class="text-lg font-bold text-ink-900 mb-8">Informasi Kontak</h3>
                        
                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div class="w-10 h-10 bg-accent-50 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-4 h-4 text-accent-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-ink-900 mb-1">Alamat</h4>
                                    <p class="text-sm text-ink-500 leading-relaxed">Jl. Kramat Raya No.98, RT.2/RW.9, Kwitang, Kec. Senen, Kota Jakarta Pusat, DKI Jakarta 10450</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="w-10 h-10 bg-accent-50 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-accent-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-ink-900 mb-1">Email</h4>
                                    <p class="text-sm text-ink-500">lsp@ubsi.ac.id</p>
                                    <p class="text-sm text-ink-500">info.lsp@ubsi.ac.id</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="w-10 h-10 bg-accent-50 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-accent-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-ink-900 mb-1">Telepon</h4>
                                    <p class="text-sm text-ink-500">(021) 2123-4567</p>
                                    <p class="text-sm text-ink-500">(021) 2123-4568</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="w-10 h-10 bg-accent-50 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-accent-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-ink-900 mb-1">Jam Operasional</h4>
                                    <p class="text-sm text-ink-500">Senin - Jumat: 08.00 - 16.00 WIB</p>
                                    <p class="text-sm text-ink-500">Sabtu: 08.00 - 12.00 WIB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right: Form (5 cols) -->
                <div class="lg:col-span-5 reveal">
                    <div class="bg-white border border-ink-200 p-8 md:p-10 h-full">
                        <h3 class="text-lg font-bold text-ink-900 mb-8">Kirim Pesan</h3>
                        <form class="space-y-5">
                            <div>
                                <label class="block text-xs font-semibold text-ink-700 uppercase tracking-wider mb-2">Nama Lengkap</label>
                                <input type="text" placeholder="Nama lengkap Anda" class="w-full px-4 py-3 border border-ink-200 text-sm text-ink-900 placeholder:text-ink-400 transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-ink-700 uppercase tracking-wider mb-2">Email</label>
                                <input type="email" placeholder="nama@email.com" class="w-full px-4 py-3 border border-ink-200 text-sm text-ink-900 placeholder:text-ink-400 transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-ink-700 uppercase tracking-wider mb-2">Subjek</label>
                                <input type="text" placeholder="Subjek pesan" class="w-full px-4 py-3 border border-ink-200 text-sm text-ink-900 placeholder:text-ink-400 transition-colors">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-ink-700 uppercase tracking-wider mb-2">Pesan</label>
                                <textarea rows="4" placeholder="Tulis pesan Anda..." class="w-full px-4 py-3 border border-ink-200 text-sm text-ink-900 placeholder:text-ink-400 transition-colors resize-none"></textarea>
                            </div>
                            <button type="submit" class="w-full py-3.5 bg-accent-600 text-white text-sm font-semibold hover:bg-accent-700 transition-colors">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer class="bg-ink-900 text-ink-400">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-16">
            <div class="grid md:grid-cols-12 gap-10">
                <!-- Brand (5 cols) -->
                <div class="md:col-span-5">
                    <a href="#" class="flex items-center gap-2.5 mb-5">
                        <div class="w-8 h-8 bg-accent-600 flex items-center justify-center">
                            <svg viewBox="0 0 316 316" class="w-5 h-5 text-white" fill="currentColor">
                                <path d="M305.8 81.125L251.32 48.275c-1.35-.78-3.01-.78-4.36 0L194.51 78.475l-6.56 3.79v57.36l-43.71 25.17V52.575l-6.56-3.79L93.99 18.585c-1.35-.78-3.01-.78-4.36 0L37.18 48.785l-6.56 3.79v179.66l6.56 3.79 104.91 60.4c.23.13.48.21.72.29.11.04.22.11.35.13.37.1.74.15 1.12.15.38 0 .75-.05 1.12-.15.1-.03.19-.09.29-.12.26-.09.52-.18.76-.31l104.91-60.4 6.56-3.79v-57.36l6.56-3.79 50.26-28.94 6.56-3.79V85.755l-6.56-3.63zM144.2 227.205l-43.63-25.69 45.82-26.38 50.27-28.94 43.67 25.14-32.04 18.29-64.09 36.58z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-bold text-white">UBSI Portal LSP</span>
                    </a>
                    <p class="text-sm leading-relaxed max-w-sm">
                        Lembaga Sertifikasi Profesi Universitas Bina Sarana Informatika yang berkomitmen menghasilkan tenaga kerja kompeten dan berdaya saing tinggi.
                    </p>
                </div>
                
                <!-- Links (7 cols) -->
                <div class="md:col-span-7 grid grid-cols-3 gap-8">
                    <div>
                        <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-4">Navigasi</h4>
                        <ul class="space-y-2.5">
                            <li><a href="#beranda" class="text-sm hover:text-white transition-colors">Beranda</a></li>
                            <li><a href="/tentang-kami" class="text-sm hover:text-white transition-colors">Tentang</a></li>
                            <li><a href="/skema" class="text-sm hover:text-white transition-colors">Skema</a></li>
                            <li><a href="/berita" class="text-sm hover:text-white transition-colors">Berita</a></li>
                            <li><a href="/kontak" class="text-sm hover:text-white transition-colors">Kontak</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-4">Layanan</h4>
                        <ul class="space-y-2.5">
                            <li><a href="#" class="text-sm hover:text-white transition-colors">Sertifikasi</a></li>
                            <li><a href="#" class="text-sm hover:text-white transition-colors">Pelatihan</a></li>
                            <li><a href="#" class="text-sm hover:text-white transition-colors">Asesmen</a></li>
                            <li><a href="#" class="text-sm hover:text-white transition-colors">Konsultasi</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-4">Kontak</h4>
                        <ul class="space-y-2.5 text-sm">
                            <li>Jl. Kramat Raya No.98</li>
                            <li>Jakarta Pusat, 10450</li>
                            <li><a href="mailto:lsp@ubsi.ac.id" class="hover:text-white transition-colors">lsp@ubsi.ac.id</a></li>
                            <li>(021) 2123-4567</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-ink-800">
            <div class="max-w-6xl mx-auto px-6 lg:px-8 py-6">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <p class="text-xs text-ink-500">&copy; 2026 UBSI Portal LSP. Hak Cipta Dilindungi.</p>
                    <div class="flex items-center gap-6 text-xs text-ink-500">
                        <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                        <a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ================= SCRIPTS ================ -->
    <script>
        // --- Carousel ---
        const track = document.getElementById('track');
        const dots = document.querySelectorAll('.dot');
        let current = 0;
        const total = 3;
        let timer;

        function goTo(n) {
            if (n < 0) n = total - 1;
            if (n >= total) n = 0;
            current = n;
            track.style.transform = `translateX(-${current * 100}%)`;
            dots.forEach((d, i) => {
                d.classList.toggle('bg-white', i === current);
                d.classList.toggle('bg-white/40', i !== current);
                d.classList.toggle('w-5', i === current);
                d.classList.toggle('w-2', i !== current);
            });
        }

        function next() { goTo(current + 1); }
        function prev() { goTo(current - 1); }

        document.getElementById('nextBtn').addEventListener('click', () => { next(); resetTimer(); });
        document.getElementById('prevBtn').addEventListener('click', () => { prev(); resetTimer(); });
        dots.forEach(d => d.addEventListener('click', () => { goTo(parseInt(d.dataset.i)); resetTimer(); }));

        function startTimer() { timer = setInterval(next, 5000); }
        function resetTimer() { clearInterval(timer); startTimer(); }

        track.parentElement.addEventListener('mouseenter', () => clearInterval(timer));
        track.parentElement.addEventListener('mouseleave', startTimer);

        goTo(0);
        startTimer();

        // --- Mobile menu ---
        document.getElementById('menuBtn').addEventListener('click', () => {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });
        document.querySelectorAll('#mobileMenu a').forEach(a => {
            a.addEventListener('click', () => document.getElementById('mobileMenu').classList.add('hidden'));
        });

        // --- Scroll reveal ---
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // --- Nav shadow on scroll ---
        const nav = document.getElementById('topnav');
        window.addEventListener('scroll', () => {
            nav.classList.toggle('nav-scrolled', window.scrollY > 10);
        });
    </script>
</body>
</html>
