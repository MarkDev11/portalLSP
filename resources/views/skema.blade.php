<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Skema - Portal LSP UBSI</title>
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
        .display { letter-spacing: -0.03em; line-height: 1.1; }
        .heading-tight { letter-spacing: -0.02em; line-height: 1.15; }
        .line-accent { width: 48px; height: 2px; background: #2563eb; }
        .reveal { opacity: 0; transform: translateY(24px); transition: opacity 0.7s ease, transform 0.7s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        .nav-scrolled { box-shadow: 0 1px 0 rgba(0,0,0,0.06); }
        
        /* Table styles */
        .table-header { background: #f8fafc; }
        .table-row { transition: background 0.2s ease; }
        .table-row:hover { background: #eff6ff; }
        .table-row td { border-bottom: 1px solid #e2e8f0; }
        .table-row:last-child td { border-bottom: none; }
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
                    <a href="/" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors">Beranda</a>
                    <a href="/tentang-kami" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors">Tentang</a>
                    <a href="/skema" class="text-[13px] font-bold text-ink-900 transition-colors">Skema</a>
                    <a href="/berita" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors">Berita</a>
                    <a href="/kontak" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors">Kontak</a>
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
                <a href="/skema" class="block py-2 text-sm font-bold text-ink-900">Skema</a>
                <a href="/berita" class="block py-2 text-sm font-medium text-ink-600 hover:text-ink-900">Berita</a>
                <a href="/kontak" class="block py-2 text-sm font-medium text-ink-600 hover:text-ink-900">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- ===== HERO ===== -->
    <section class="pt-16 bg-ink-900">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 md:py-28">
            <div class="reveal">
                <p class="text-accent-400 text-xs font-bold uppercase tracking-[0.2em] mb-4">Data Referensi</p>
                <h1 class="text-3xl md:text-5xl font-bold text-white heading-tight display mb-4">Daftar Skema Sertifikasi</h1>
                <div class="w-12 h-0.5 bg-accent-500 mb-6"></div>
                <p class="text-ink-300 text-lg leading-relaxed max-w-2xl">Daftar lengkap skema sertifikasi kompetensi yang diselenggarakan oleh LSP UBSI beserta dokumen pendukungnya.</p>
            </div>
        </div>
    </section>

    <!-- ===== TABLE SECTION ===== -->
    <section class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="reveal">
                <div class="border border-ink-200 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="table-header">
                                    <th class="px-6 py-4 text-xs font-bold text-ink-500 uppercase tracking-wider w-16">No.</th>
                                    <th class="px-6 py-4 text-xs font-bold text-ink-500 uppercase tracking-wider">Kode Skema</th>
                                    <th class="px-6 py-4 text-xs font-bold text-ink-500 uppercase tracking-wider">Nama Skema</th>
                                    <th class="px-6 py-4 text-xs font-bold text-ink-500 uppercase tracking-wider text-center">Unduh Skema</th>
                                    <th class="px-6 py-4 text-xs font-bold text-ink-500 uppercase tracking-wider text-center">Unduh SKKNI</th>
                                    <th class="px-6 py-4 text-xs font-bold text-ink-500 uppercase tracking-wider text-center">Detail Unit</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">01</td>
                                    <td class="px-6 py-5 text-accent-600 font-medium">SB-001/1/LSP-UBSI/VIII/2023</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">Junior Web Developer</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">02</td>
                                    <td class="px-6 py-5 text-accent-600 font-medium">SB-015/1/LSP-UBSI/IX/2023</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">Digital Marketing</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">03</td>
                                    <td class="px-6 py-5 text-accent-600 font-medium">SB-022/1/LSP-UBSI/X/2023</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">Administrasi Sistem</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">04</td>
                                    <td class="px-6 py-5 text-accent-600 font-medium">SB-028/1/LSP-UBSI/XI/2023</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">Data Analyst</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">05</td>
                                    <td class="px-6 py-5 text-accent-600 font-medium">SB-031/1/LSP-UBSI/XI/2023</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">Mobile Developer</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">06</td>
                                    <td class="px-6 py-5 text-accent-600 font-medium">SB-036/1/LSP-UBSI/XII/2023</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">Photography</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">07</td>
                                    <td class="px-6 py-5 text-accent-600 font-medium">SB-042/1/LSP-UBSI/I/2024</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">UI/UX Design</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">08</td>
                                    <td class="px-6 py-5 text-accent-600 font-medium">SB-048/1/LSP-UBSI/II/2024</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">Technical Writer</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 text-accent-600 hover:text-accent-700 font-medium text-xs">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Note -->
                <div class="mt-8 flex items-start gap-3 text-sm text-ink-500">
                    <svg class="w-5 h-5 text-accent-400 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/></svg>
                    <p>Klik ikon <strong>PDF</strong> untuk mengunduh dokumen skema, <strong>SKKNI</strong> untuk Standar Kompetensi Kerja Nasional Indonesia, atau ikon dokumen untuk melihat detail unit kompetensi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== FOOTER ===== -->
    <footer class="bg-ink-900 text-ink-400 border-t border-ink-800">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-16">
            <div class="grid md:grid-cols-12 gap-10">
                <div class="md:col-span-5">
                    <a href="/" class="flex items-center gap-2.5 mb-5">
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
                
                <div class="md:col-span-7 grid grid-cols-3 gap-8">
                    <div>
                        <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-4">Navigasi</h4>
                        <ul class="space-y-2.5">
                            <li><a href="/" class="text-sm hover:text-white transition-colors">Beranda</a></li>
                            <li><a href="/tentang-kami" class="text-sm hover:text-white transition-colors">Tentang</a></li>
                            <li><a href="/skema" class="text-sm hover:text-white transition-colors">Skema</a></li>
                            <li><a href="/#berita" class="text-sm hover:text-white transition-colors">Berita</a></li>
                            <li><a href="/#kontak" class="text-sm hover:text-white transition-colors">Kontak</a></li>
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

    <script>
        // Mobile menu
        document.getElementById('menuBtn').addEventListener('click', () => {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });
        document.querySelectorAll('#mobileMenu a').forEach(a => {
            a.addEventListener('click', () => document.getElementById('mobileMenu').classList.add('hidden'));
        });

        // Scroll reveal
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Nav shadow
        const nav = document.getElementById('topnav');
        window.addEventListener('scroll', () => {
            nav.classList.toggle('nav-scrolled', window.scrollY > 10);
        });
    </script>
</body>
</html>
