<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Berita - Portal LSP UBSI</title>
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
        
        /* Editorial typography */
        .display { letter-spacing: -0.03em; line-height: 1.1; }
        .heading-tight { letter-spacing: -0.02em; line-height: 1.15; }
        .body-large { font-size: 1.125rem; line-height: 1.75; letter-spacing: -0.01em; }
        
        /* Separator line */
        .line-accent { width: 48px; height: 2px; background: #2563eb; }
        .line-gray { width: 100%; height: 1px; background: #e2e8f0; }
        
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
                <a href="/" class="flex items-center gap-2.5 group">
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
                
                <div class="hidden md:flex items-center gap-8">
                    <a href="/" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors link-animate">Beranda</a>
                    <a href="/tentang-kami" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors link-animate">Tentang</a>
                    <a href="/skema" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors link-animate">Skema</a>
                    <a href="/berita" class="text-[13px] font-bold text-ink-900 transition-colors link-animate">Berita</a>
                    <a href="/kontak" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors link-animate">Kontak</a>
                </div>
                
                <button id="menuBtn" class="md:hidden p-2 text-ink-500 hover:text-ink-900">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>
        
        <div id="mobileMenu" class="hidden md:hidden border-t border-ink-100 bg-white">
            <div class="px-6 py-4 space-y-1">
                <a href="/" class="block py-2 text-sm font-medium text-ink-600 hover:text-ink-900">Beranda</a>
                <a href="/tentang-kami" class="block py-2 text-sm font-medium text-ink-600 hover:text-ink-900">Tentang</a>
                <a href="/skema" class="block py-2 text-sm font-medium text-ink-600 hover:text-ink-900">Skema</a>
                <a href="/berita" class="block py-2 text-sm font-bold text-ink-900">Berita</a>
                <a href="/kontak" class="block py-2 text-sm font-medium text-ink-600 hover:text-ink-900">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- ===== HERO ===== -->
    <section class="pt-16 bg-ink-900">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 md:py-28">
            <div class="reveal">
                <p class="text-accent-400 text-xs font-bold uppercase tracking-[0.2em] mb-4">Informasi Terkini</p>
                <h1 class="text-3xl md:text-5xl font-bold text-white heading-tight display mb-4">Berita & Artikel</h1>
                <div class="w-12 h-0.5 bg-accent-500 mb-6"></div>
                <p class="text-ink-300 text-lg leading-relaxed max-w-2xl">Berita terkini seputar sertifikasi profesi, kegiatan LSP UBSI, dan perkembangan dunia kerja.</p>
            </div>
        </div>
    </section>

    <!-- ===== MAIN CONTENT (75/25 Layout) ===== -->
    <section class="py-20 md:py-28 bg-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12">
                
                <!-- LEFT: News Grid (75% = 9 cols) -->
                <div class="lg:col-span-9">
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-px bg-ink-200 border border-ink-200">
                        
                        <!-- News Card 1 -->
                        <article class="reveal bg-white p-6 hover:bg-accent-50 transition-colors group">
                            <div class="img-mask mb-4 aspect-[4/3] bg-accent-100 flex items-center justify-center">
                                <svg class="w-16 h-16 text-accent-300" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                                </svg>
                            </div>
                            <div class="text-[11px] text-accent-600 font-semibold uppercase tracking-wider mb-2">Sertifikasi • 15 Mei 2026</div>
                            <h3 class="text-base font-bold text-ink-900 leading-snug mb-3 clamp-2">
                                <a href="/berita/sertifikasi-bnsp-batch-10" class="hover:text-accent-600 transition-colors">
                                    Pembukaan Pendaftaran Sertifikasi BNSP Batch 10
                                </a>
                            </h3>
                            <p class="text-sm text-ink-500 leading-relaxed clamp-3 mb-4">
                                LSP UBSI membuka pendaftaran sertifikasi profesi batch 10 untuk berbagai skema kompetensi.
                            </p>
                            <a href="/berita/sertifikasi-bnsp-batch-10" class="text-[13px] font-semibold text-accent-600 hover:text-accent-700 transition-colors">
                                Baca Selengkapnya →
                            </a>
                        </article>
                        
                        <!-- News Card 2 -->
                        <article class="reveal bg-white p-6 hover:bg-accent-50 transition-colors group delay-100">
                            <div class="img-mask mb-4 aspect-[4/3] bg-accent-100 flex items-center justify-center">
                                <svg class="w-16 h-16 text-accent-300" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"/>
                                </svg>
                            </div>
                            <div class="text-[11px] text-accent-600 font-semibold uppercase tracking-wider mb-2">Workshop • 12 Mei 2026</div>
                            <h3 class="text-base font-bold text-ink-900 leading-snug mb-3 clamp-2">
                                <a href="/berita/workshop-digital-marketing" class="hover:text-accent-600 transition-colors">
                                    Workshop Digital Marketing untuk Pelaku UMKM
                                </a>
                            </h3>
                            <p class="text-sm text-ink-500 leading-relaxed clamp-3 mb-4">
                                Tingkatkan kemampuan digital marketing melalui workshop intensif bersama praktisi industri.
                            </p>
                            <a href="/berita/workshop-digital-marketing" class="text-[13px] font-semibold text-accent-600 hover:text-accent-700 transition-colors">
                                Baca Selengkapnya →
                            </a>
                        </article>
                        
                        <!-- News Card 3 -->
                        <article class="reveal bg-white p-6 hover:bg-accent-50 transition-colors group delay-200">
                            <div class="img-mask mb-4 aspect-[4/3] bg-accent-100 flex items-center justify-center">
                                <svg class="w-16 h-16 text-accent-300" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"/>
                                </svg>
                            </div>
                            <div class="text-[11px] text-accent-600 font-semibold uppercase tracking-wider mb-2">Kerjasama • 10 Mei 2026</div>
                            <h3 class="text-base font-bold text-ink-900 leading-snug mb-3 clamp-2">
                                <a href="/berita/mou-perusahaan-teknologi" class="hover:text-accent-600 transition-colors">
                                    MoU dengan 5 Perusahaan Teknologi Terkemuka
                                </a>
                            </h3>
                            <p class="text-sm text-ink-500 leading-relaxed clamp-3 mb-4">
                                LSP UBSI menjalin kerjasama strategis untuk meningkatkan kualitas sertifikasi.
                            </p>
                            <a href="/berita/mou-perusahaan-teknologi" class="text-[13px] font-semibold text-accent-600 hover:text-accent-700 transition-colors">
                                Baca Selengkapnya →
                            </a>
                        </article>
                        
                        <!-- News Card 4 -->
                        <article class="reveal bg-white p-6 hover:bg-accent-50 transition-colors group delay-300">
                            <div class="img-mask mb-4 aspect-[4/3] bg-accent-100 flex items-center justify-center">
                                <svg class="w-16 h-16 text-accent-300" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                                </svg>
                            </div>
                            <div class="text-[11px] text-accent-600 font-semibold uppercase tracking-wider mb-2">Pelatihan � 8 Mei 2026</div>
                            <h3 class="text-base font-bold text-ink-900 leading-snug mb-3 clamp-2">
                                <a href="/berita/pelatihan-asesor-kompetensi" class="hover:text-accent-600 transition-colors">
                                    Pelatihan Asesor Kompetensi Angkatan 15
                                </a>
                            </h3>
                            <p class="text-sm text-ink-500 leading-relaxed clamp-3 mb-4">
                                Dibuka pendaftaran pelatihan asesor untuk meningkatkan jumlah asesor berkualitas.
                            </p>
                            <a href="/berita/pelatihan-asesor-kompetensi" class="text-[13px] font-semibold text-accent-600 hover:text-accent-700 transition-colors">
                                Baca Selengkapnya ?
                            </a>
                        </article>
                        
                        <!-- News Card 5 -->
                        <article class="reveal bg-white p-6 hover:bg-accent-50 transition-colors group">
                            <div class="img-mask mb-4 aspect-[4/3] bg-accent-100 flex items-center justify-center">
                                <svg class="w-16 h-16 text-accent-300" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                                </svg>
                            </div>
                            <div class="text-[11px] text-accent-600 font-semibold uppercase tracking-wider mb-2">Seminar � 5 Mei 2026</div>
                            <h3 class="text-base font-bold text-ink-900 leading-snug mb-3 clamp-2">
                                <a href="/berita/seminar-nasional-kompetensi" class="hover:text-accent-600 transition-colors">
                                    Seminar Nasional: Masa Depan Sertifikasi Profesi
                                </a>
                            </h3>
                            <p class="text-sm text-ink-500 leading-relaxed clamp-3 mb-4">
                                Ikuti seminar nasional dengan pembicara dari BNSP, industri, dan akademisi.
                            </p>
                            <a href="/berita/seminar-nasional-kompetensi" class="text-[13px] font-semibold text-accent-600 hover:text-accent-700 transition-colors">
                                Baca Selengkapnya ?
                            </a>
                        </article>
                        
                        <!-- News Card 6 -->
                        <article class="reveal bg-white p-6 hover:bg-accent-50 transition-colors group delay-100">
                            <div class="img-mask mb-4 aspect-[4/3] bg-accent-100 flex items-center justify-center">
                                <svg class="w-16 h-16 text-accent-300" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0"/>
                                </svg>
                            </div>
                            <div class="text-[11px] text-accent-600 font-semibold uppercase tracking-wider mb-2">Prestasi � 3 Mei 2026</div>
                            <h3 class="text-base font-bold text-ink-900 leading-snug mb-3 clamp-2">
                                <a href="/berita/alumni-berprestasi-2026" class="hover:text-accent-600 transition-colors">
                                    Alumni LSP UBSI Raih Penghargaan Nasional
                                </a>
                            </h3>
                            <p class="text-sm text-ink-500 leading-relaxed clamp-3 mb-4">
                                Alumni pemegang sertifikat LSP UBSI raih penghargaan tenaga profesional terbaik.
                            </p>
                            <a href="/berita/alumni-berprestasi-2026" class="text-[13px] font-semibold text-accent-600 hover:text-accent-700 transition-colors">
                                Baca Selengkapnya ?
                            </a>
                        </article>
                        
                        <!-- News Card 7 -->
                        <article class="reveal bg-white p-6 hover:bg-accent-50 transition-colors group delay-200">
                            <div class="img-mask mb-4 aspect-[4/3] bg-accent-100 flex items-center justify-center">
                                <svg class="w-16 h-16 text-accent-300" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"/>
                                </svg>
                            </div>
                            <div class="text-[11px] text-accent-600 font-semibold uppercase tracking-wider mb-2">Pengumuman � 1 Mei 2026</div>
                            <h3 class="text-base font-bold text-ink-900 leading-snug mb-3 clamp-2">
                                <a href="/berita/skema-sertifikasi-baru" class="hover:text-accent-600 transition-colors">
                                    Peluncuran 3 Skema Sertifikasi Baru di 2026
                                </a>
                            </h3>
                            <p class="text-sm text-ink-500 leading-relaxed clamp-3 mb-4">
                                LSP UBSI meluncurkan skema baru sesuai kebutuhan industri 4.0 dan teknologi terkini.
                            </p>
                            <a href="/berita/skema-sertifikasi-baru" class="text-[13px] font-semibold text-accent-600 hover:text-accent-700 transition-colors">
                                Baca Selengkapnya ?
                            </a>
                        </article>
                        
                        <!-- News Card 8 -->
                        <article class="reveal bg-white p-6 hover:bg-accent-50 transition-colors group delay-300">
                            <div class="img-mask mb-4 aspect-[4/3] bg-accent-100 flex items-center justify-center">
                                <svg class="w-16 h-16 text-accent-300" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"/>
                                </svg>
                            </div>
                            <div class="text-[11px] text-accent-600 font-semibold uppercase tracking-wider mb-2">Event � 28 Apr 2026</div>
                            <h3 class="text-base font-bold text-ink-900 leading-snug mb-3 clamp-2">
                                <a href="/berita/job-fair-sertifikasi" class="hover:text-accent-600 transition-colors">
                                    Job Fair Khusus Pemegang Sertifikat Profesi
                                </a>
                            </h3>
                            <p class="text-sm text-ink-500 leading-relaxed clamp-3 mb-4">
                                Job fair diikuti 50+ perusahaan khusus untuk pemegang sertifikat kompetensi.
                            </p>
                            <a href="/berita/job-fair-sertifikasi" class="text-[13px] font-semibold text-accent-600 hover:text-accent-700 transition-colors">
                                Baca Selengkapnya ?
                            </a>
                        </article>
                        
                        <!-- News Card 9 -->
                        <article class="reveal bg-white p-6 hover:bg-accent-50 transition-colors group">
                            <div class="img-mask mb-4 aspect-[4/3] bg-accent-100 flex items-center justify-center">
                                <svg class="w-16 h-16 text-accent-300" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/>
                                </svg>
                            </div>
                            <div class="text-[11px] text-accent-600 font-semibold uppercase tracking-wider mb-2">Testimoni � 25 Apr 2026</div>
                            <h3 class="text-base font-bold text-ink-900 leading-snug mb-3 clamp-2">
                                <a href="/berita/testimoni-peserta-sertifikasi" class="hover:text-accent-600 transition-colors">
                                    Testimoni: Sertifikasi Mengubah Karir Saya
                                </a>
                            </h3>
                            <p class="text-sm text-ink-500 leading-relaxed clamp-3 mb-4">
                                Kisah inspiratif peserta yang berhasil meningkatkan karir setelah tersertifikasi.
                            </p>
                            <a href="/berita/testimoni-peserta-sertifikasi" class="text-[13px] font-semibold text-accent-600 hover:text-accent-700 transition-colors">
                                Baca Selengkapnya ?
                            </a>
                        </article>
                        
                    </div>
                    
                    <!-- Pagination -->
                    <div class="mt-12 flex justify-center items-center gap-2">
                        <button disabled class="px-4 py-2 text-sm font-medium text-ink-400 border border-ink-200 bg-ink-50 cursor-not-allowed">
                            ? Sebelumnya
                        </button>
                        <button class="px-4 py-2 text-sm font-bold text-white bg-accent-600 border border-accent-600">1</button>
                        <button class="px-4 py-2 text-sm font-medium text-ink-700 border border-ink-200 hover:border-accent-600 hover:text-accent-600 transition-colors">2</button>
                        <button class="px-4 py-2 text-sm font-medium text-ink-700 border border-ink-200 hover:border-accent-600 hover:text-accent-600 transition-colors">3</button>
                        <button class="px-4 py-2 text-sm font-medium text-ink-700 border border-ink-200 hover:border-accent-600 hover:text-accent-600 transition-colors">
                            Selanjutnya ?
                        </button>
                    </div>
                </div>
                
                <!-- RIGHT: Sidebar (25% = 3 cols) -->
                <aside class="lg:col-span-3">
                    
                    <!-- Search Box -->
                    <div class="reveal border border-ink-200 p-6 mb-6">
                        <h3 class="text-sm font-bold text-ink-900 uppercase tracking-wider mb-4">Cari Berita</h3>
                        <form action="/berita/search" method="GET" class="space-y-3">
                            <input type="text" name="q" placeholder="Kata kunci..." class="w-full px-4 py-2.5 text-sm border border-ink-300 focus:border-accent-600 transition-colors">
                            <button type="submit" class="w-full px-4 py-2.5 bg-accent-600 text-white text-sm font-semibold hover:bg-accent-700 transition-colors">
                                Cari
                            </button>
                        </form>
                    </div>
                    
                    <!-- Category Filter -->
                    <div class="reveal border border-ink-200 p-6 mb-6 delay-100">
                        <h3 class="text-sm font-bold text-ink-900 uppercase tracking-wider mb-4">Kategori</h3>
                        <div class="space-y-2">
                            <a href="/berita?kategori=semua" class="block px-3 py-2 text-sm font-medium text-white bg-accent-600 hover:bg-accent-700 transition-colors">
                                Semua Berita
                            </a>
                            <a href="/berita?kategori=sertifikasi" class="block px-3 py-2 text-sm font-medium text-ink-700 border border-ink-200 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                Sertifikasi
                            </a>
                            <a href="/berita?kategori=workshop" class="block px-3 py-2 text-sm font-medium text-ink-700 border border-ink-200 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                Workshop
                            </a>
                            <a href="/berita?kategori=event" class="block px-3 py-2 text-sm font-medium text-ink-700 border border-ink-200 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                Event
                            </a>
                            <a href="/berita?kategori=pengumuman" class="block px-3 py-2 text-sm font-medium text-ink-700 border border-ink-200 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                Pengumuman
                            </a>
                        </div>
                    </div>
                    
                    <!-- Related News -->
                    <div class="reveal border border-ink-200 p-6 delay-200">
                        <h3 class="text-sm font-bold text-ink-900 uppercase tracking-wider mb-4">Berita Terkait</h3>
                        <div class="space-y-4">
                            
                            <article class="pb-4 border-b border-ink-100 last:border-0 last:pb-0">
                                <div class="text-[11px] text-ink-400 mb-1">18 Mei 2026</div>
                                <h4 class="text-sm font-semibold text-ink-900 leading-snug clamp-2">
                                    <a href="/berita/tips-lolos-sertifikasi" class="hover:text-accent-600 transition-colors">
                                        Tips Lolos Uji Sertifikasi Kompetensi
                                    </a>
                                </h4>
                            </article>
                            
                            <article class="pb-4 border-b border-ink-100 last:border-0 last:pb-0">
                                <div class="text-[11px] text-ink-400 mb-1">16 Mei 2026</div>
                                <h4 class="text-sm font-semibold text-ink-900 leading-snug clamp-2">
                                    <a href="/berita/manfaat-sertifikasi-profesi" class="hover:text-accent-600 transition-colors">
                                        5 Manfaat Memiliki Sertifikat Profesi
                                    </a>
                                </h4>
                            </article>
                            
                            <article class="pb-4 border-b border-ink-100 last:border-0 last:pb-0">
                                <div class="text-[11px] text-ink-400 mb-1">14 Mei 2026</div>
                                <h4 class="text-sm font-semibold text-ink-900 leading-snug clamp-2">
                                    <a href="/berita/skema-populer-2026" class="hover:text-accent-600 transition-colors">
                                        Skema Sertifikasi Paling Diminati 2026
                                    </a>
                                </h4>
                            </article>
                            
                            <article class="pb-4 border-b border-ink-100 last:border-0 last:pb-0">
                                <div class="text-[11px] text-ink-400 mb-1">11 Mei 2026</div>
                                <h4 class="text-sm font-semibold text-ink-900 leading-snug clamp-2">
                                    <a href="/berita/persiapan-uji-kompetensi" class="hover:text-accent-600 transition-colors">
                                        Panduan Persiapan Uji Kompetensi
                                    </a>
                                </h4>
                            </article>
                            
                            <article class="pb-4 border-b border-ink-100 last:border-0 last:pb-0">
                                <div class="text-[11px] text-ink-400 mb-1">9 Mei 2026</div>
                                <h4 class="text-sm font-semibold text-ink-900 leading-snug clamp-2">
                                    <a href="/berita/karir-setelah-sertifikasi" class="hover:text-accent-600 transition-colors">
                                        Peluang Karir Setelah Tersertifikasi
                                    </a>
                                </h4>
                            </article>
                            
                            <article class="pb-4 border-b border-ink-100 last:border-0 last:pb-0">
                                <div class="text-[11px] text-ink-400 mb-1">7 Mei 2026</div>
                                <h4 class="text-sm font-semibold text-ink-900 leading-snug clamp-2">
                                    <a href="/berita/biaya-sertifikasi" class="hover:text-accent-600 transition-colors">
                                        Informasi Biaya dan Jadwal Sertifikasi
                                    </a>
                                </h4>
                            </article>
                            
                        </div>
                    </div>
                    
                </aside>
                
            </div>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer class="bg-ink-900 text-white py-16 md:py-20">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center gap-2.5 mb-4">
                        <div class="w-8 h-8 bg-accent-700 flex items-center justify-center">
                            <svg viewBox="0 0 316 316" class="w-5 h-5 text-white" fill="currentColor">
                                <path d="M305.8 81.125L251.32 48.275c-1.35-.78-3.01-.78-4.36 0L194.51 78.475l-6.56 3.79v57.36l-43.71 25.17V52.575l-6.56-3.79L93.99 18.585c-1.35-.78-3.01-.78-4.36 0L37.18 48.785l-6.56 3.79v179.66l6.56 3.79 104.91 60.4c.23.13.48.21.72.29.11.04.22.11.35.13.37.1.74.15 1.12.15.38 0 .75-.05 1.12-.15.1-.03.19-.09.29-.12.26-.09.52-.18.76-.31l104.91-60.4 6.56-3.79v-57.36l6.56-3.79 50.26-28.94 6.56-3.79V85.755l-6.56-3.63zM144.2 227.205l-43.63-25.69 45.82-26.38 50.27-28.94 43.67 25.14-32.04 18.29-64.09 36.58z"/>
                            </svg>
                        </div>
                        <div>
                            <div class="text-sm font-bold">LSP UBSI</div>
                            <div class="text-[10px] text-accent-400 uppercase tracking-wider">Sertifikasi Profesi</div>
                        </div>
                    </div>
                    <p class="text-sm text-ink-400 leading-relaxed">
                        Lembaga Sertifikasi Profesi Universitas Bina Sarana Informatika.
                    </p>
                </div>
                
                <div>
                    <h3 class="text-sm font-bold mb-4 uppercase tracking-wider">Navigasi</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/" class="text-ink-400 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="/tentang-kami" class="text-ink-400 hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="/skema" class="text-ink-400 hover:text-white transition-colors">Skema</a></li>
                        <li><a href="/berita" class="text-ink-400 hover:text-white transition-colors">Berita</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-sm font-bold mb-4 uppercase tracking-wider">Layanan</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="text-ink-400 hover:text-white transition-colors">Sertifikasi BNSP</a></li>
                        <li><a href="#" class="text-ink-400 hover:text-white transition-colors">Pelatihan</a></li>
                        <li><a href="#" class="text-ink-400 hover:text-white transition-colors">Asesmen</a></li>
                        <li><a href="#" class="text-ink-400 hover:text-white transition-colors">Konsultasi</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-sm font-bold mb-4 uppercase tracking-wider">Kontak</h3>
                    <ul class="space-y-2 text-sm text-ink-400">
                        <li>Jl. Kramat Raya No.98</li>
                        <li>Jakarta Pusat 10450</li>
                        <li class="pt-2">lsp@ubsi.ac.id</li>
                        <li>(021) 1234-5678</li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-8 border-t border-ink-800 text-center text-sm text-ink-500">
                <p>&copy; 2026 LSP UBSI. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Reveal on scroll
        const reveals = document.querySelectorAll('.reveal');
        
        function checkReveal() {
            reveals.forEach(el => {
                const rect = el.getBoundingClientRect();
                const isVisible = rect.top < window.innerHeight - 100;
                if (isVisible) {
                    el.classList.add('visible');
                }
            });
        }
        
        window.addEventListener('scroll', checkReveal);
        window.addEventListener('load', checkReveal);
        checkReveal();
        
        // Nav scroll effect
        const nav = document.getElementById('topnav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('nav-scrolled');
            } else {
                nav.classList.remove('nav-scrolled');
            }
        });
    </script>

</body>
</html>
