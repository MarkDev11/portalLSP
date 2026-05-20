<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang Kami - Portal LSP UBSI</title>
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
        .body-large { font-size: 1.125rem; line-height: 1.75; letter-spacing: -0.01em; }
        .line-accent { width: 48px; height: 2px; background: #2563eb; }
        .line-gray { width: 100%; height: 1px; background: #e2e8f0; }
        .link-animate { position: relative; }
        .link-animate::after { content: ''; position: absolute; left: 0; bottom: -2px; width: 0; height: 1.5px; background: #2563eb; transition: width 0.3s ease; }
        .link-animate:hover::after { width: 100%; }
        .reveal { opacity: 0; transform: translateY(24px); transition: opacity 0.7s ease, transform 0.7s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        .nav-scrolled { box-shadow: 0 1px 0 rgba(0,0,0,0.06); }
        .stat-num { font-feature-settings: 'tnum'; font-variant-numeric: tabular-nums; }
        input:focus, textarea:focus { outline: none; border-color: #2563eb; }
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
                    <a href="/tentang-kami" class="text-[13px] font-bold text-ink-900 transition-colors link-animate">Tentang</a>
                    <a href="/skema" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors link-animate">Skema</a>
                    <a href="/berita" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors link-animate">Berita</a>
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
                <a href="/tentang-kami" class="block py-2 text-sm font-bold text-ink-900">Tentang</a>
                <a href="/skema" class="block py-2 text-sm font-medium text-ink-600 hover:text-ink-900">Skema</a>
                <a href="/berita" class="block py-2 text-sm font-medium text-ink-600 hover:text-ink-900">Berita</a>
                <a href="/kontak" class="block py-2 text-sm font-medium text-ink-600 hover:text-ink-900">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- ===== HERO ===== -->
    <section class="pt-16 bg-ink-900">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 md:py-28">
            <div class="reveal">
                <p class="text-accent-400 text-xs font-bold uppercase tracking-[0.2em] mb-4">Profil Lembaga</p>
                <h1 class="text-3xl md:text-5xl font-bold text-white heading-tight display mb-4">Tentang Kami</h1>
                <div class="w-12 h-0.5 bg-accent-500 mb-6"></div>
                <p class="text-ink-300 body-large max-w-2xl">Mengenal lebih dekat Lembaga Sertifikasi Profesi UBSI dan komitmen kami dalam membangun kompetensi bangsa.</p>
            </div>
        </div>
    </section>

    <!-- ===== ABOUT US ===== -->
    <section class="py-24 md:py-32 bg-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="reveal">
                    <p class="text-accent-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">About Us</p>
                    <h2 class="text-3xl md:text-[2.5rem] font-bold text-ink-900 heading-tight display mb-6">Lembaga Sertifikasi Profesi UBSI</h2>
                    <div class="line-accent mb-8"></div>
                    <div class="space-y-4 text-ink-500 leading-relaxed">
                        <p>
                            LSP UBSI merupakan lembaga sertifikasi profesi yang didirikan di bawah naungan Universitas Bina Sarana Informatika. Sebagai lembaga yang terlisensi oleh Badan Nasional Sertifikasi Profesi (BNSP), kami berkomitmen untuk menghasilkan tenaga kerja Indonesia yang kompeten, terampil, dan berdaya saing tinggi di era digital.
                        </p>
                        <p>
                            Sejak berdiri, LSP UBSI telah memberikan kontribusi nyata dalam pengembangan sumber daya manusia Indonesia melalui program sertifikasi kompetensi yang berbasis Standar Kompetensi Kerja Nasional Indonesia (SKKNI). Kami percaya bahwa sertifikasi bukan sekadar dokumen, melainkan bukti kompetensi yang diakui secara nasional dan internasional.
                        </p>
                        <p>
                            Dengan didukung oleh tim asesor yang berpengalaman dan fasilitas yang memadai, kami siap membantu individu maupun organisasi untuk mencapai standar kompetensi yang diinginkan.
                        </p>
                    </div>
                </div>
                
                <div class="reveal relative">
                    <div class="relative">
                        <!-- Background LSP text -->
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
                            
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <div class="bg-white border border-ink-200 px-4 py-3 flex items-center gap-3">
                                    <svg class="w-5 h-5 text-accent-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    <div>
                                        <div class="text-sm font-semibold text-ink-900">Terlisensi BNSP</div>
                                        <div class="text-xs text-ink-400">Nomor Lisensi: LSP-001/BNSP/2020</div>
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

    <!-- ===== VISI & MISI ===== -->
    <section class="py-24 md:py-32 bg-ink-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <p class="text-accent-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">Arah dan Tujuan</p>
                <h2 class="text-3xl md:text-[2.5rem] font-bold text-ink-900 heading-tight display">Visi dan Misi</h2>
                <div class="line-accent mx-auto mt-6"></div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-px bg-ink-200 border border-ink-200">
                <!-- Visi -->
                <div class="reveal bg-white p-10 md:p-12">
                    <div class="w-12 h-12 bg-accent-50 flex items-center justify-center mb-8">
                        <svg class="w-6 h-6 text-accent-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-ink-900 mb-4">Visi</h3>
                    <p class="text-ink-500 leading-relaxed">
                        Menjadi lembaga sertifikasi profesi terdepan yang menghasilkan tenaga kerja Indonesia yang kompeten, profesional, dan berdaya saing global di bidang teknologi informasi dan komunikasi.
                    </p>
                </div>
                
                <!-- Misi -->
                <div class="reveal bg-white p-10 md:p-12 delay-100">
                    <div class="w-12 h-12 bg-accent-50 flex items-center justify-center mb-8">
                        <svg class="w-6 h-6 text-accent-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                    </div>
                    <h3 class="text-xl font-bold text-ink-900 mb-4">Misi</h3>
                    <ul class="space-y-3 text-ink-500 leading-relaxed">
                        <li class="flex gap-3">
                            <span class="w-1.5 h-1.5 bg-accent-400 rounded-full mt-2 flex-shrink-0"></span>
                            <span>Menyelenggarakan sertifikasi kompetensi berstandar nasional dan internasional secara profesional dan transparan.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="w-1.5 h-1.5 bg-accent-400 rounded-full mt-2 flex-shrink-0"></span>
                            <span>Mengembangkan skema sertifikasi yang sesuai dengan kebutuhan industri dan perkembangan teknologi.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="w-1.5 h-1.5 bg-accent-400 rounded-full mt-2 flex-shrink-0"></span>
                            <span>Membangun kemitraan strategis dengan dunia usaha dan dunia industri untuk penyerapan lulusan.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="w-1.5 h-1.5 bg-accent-400 rounded-full mt-2 flex-shrink-0"></span>
                            <span>Meningkatkan kualitas sumber daya manusia melalui program pelatihan dan pengembangan berkelanjutan.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TUJUAN LSP ===== -->
    <section class="py-24 md:py-32 bg-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12">
                <!-- Left: Heading -->
                <div class="lg:col-span-4 reveal">
                    <p class="text-accent-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">Strategi</p>
                    <h2 class="text-3xl md:text-[2.5rem] font-bold text-ink-900 heading-tight display mb-6">Tujuan LSP</h2>
                    <div class="line-accent mb-8"></div>
                    <p class="text-ink-500 leading-relaxed">
                        Tujuan yang ingin kami capai dalam setiap program sertifikasi demi mewujudkan kompetensi bangsa.
                    </p>
                </div>
                
                <!-- Right: Tujuan list -->
                <div class="lg:col-span-8 space-y-0">
                    <div class="reveal flex gap-6 py-8 border-b border-ink-100 group hover:bg-ink-50 transition-colors px-4 -mx-4">
                        <div class="w-12 h-12 bg-accent-50 flex items-center justify-center flex-shrink-0 group-hover:bg-accent-100 transition-colors">
                            <span class="text-lg font-bold text-accent-600">01</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-ink-900 mb-2">Penyelenggaraan Sertifikasi Profesional</h3>
                            <p class="text-ink-500 leading-relaxed">Menyelenggarakan uji kompetensi dan sertifikasi secara profesional, transparan, dan akuntabel sesuai dengan standar yang ditetapkan BNSP.</p>
                        </div>
                    </div>
                    
                    <div class="reveal flex gap-6 py-8 border-b border-ink-100 group hover:bg-ink-50 transition-colors px-4 -mx-4 delay-100">
                        <div class="w-12 h-12 bg-accent-50 flex items-center justify-center flex-shrink-0 group-hover:bg-accent-100 transition-colors">
                            <span class="text-lg font-bold text-accent-600">02</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-ink-900 mb-2">Pengembangan Skema Kompetensi</h3>
                            <p class="text-ink-500 leading-relaxed">Mengembangkan dan memperbarui skema sertifikasi secara berkala untuk mengikuti perkembangan teknologi dan kebutuhan industri.</p>
                        </div>
                    </div>
                    
                    <div class="reveal flex gap-6 py-8 border-b border-ink-100 group hover:bg-ink-50 transition-colors px-4 -mx-4 delay-200">
                        <div class="w-12 h-12 bg-accent-50 flex items-center justify-center flex-shrink-0 group-hover:bg-accent-100 transition-colors">
                            <span class="text-lg font-bold text-accent-600">03</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-ink-900 mb-2">Peningkatan Kualitas SDM</h3>
                            <p class="text-ink-500 leading-relaxed">Berperan aktif dalam meningkatkan kualitas sumber daya manusia Indonesia melalui program pelatihan, workshop, dan pengembangan kompetensi berkelanjutan.</p>
                        </div>
                    </div>
                    
                    <div class="reveal flex gap-6 py-8 border-b border-ink-100 group hover:bg-ink-50 transition-colors px-4 -mx-4 delay-300">
                        <div class="w-12 h-12 bg-accent-50 flex items-center justify-center flex-shrink-0 group-hover:bg-accent-100 transition-colors">
                            <span class="text-lg font-bold text-accent-600">04</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-ink-900 mb-2">Kerjasama Industri</h3>
                            <p class="text-ink-500 leading-relaxed">Membangun jaringan kerjasama yang luas dengan dunia usaha, dunia industri, dan institusi pendidikan untuk penyerapan lulusan sertifikasi.</p>
                        </div>
                    </div>
                    
                    <div class="reveal flex gap-6 py-8 group hover:bg-ink-50 transition-colors px-4 -mx-4">
                        <div class="w-12 h-12 bg-accent-50 flex items-center justify-center flex-shrink-0 group-hover:bg-accent-100 transition-colors">
                            <span class="text-lg font-bold text-accent-600">05</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-ink-900 mb-2">Pengakuan Kompetensi</h3>
                            <p class="text-ink-500 leading-relaxed">Meningkatkan pengakuan dan kepercayaan masyarakat terhadap nilai sertifikasi kompetensi sebagai bukti keahlian yang valid dan diakui secara nasional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="py-20 md:py-28 bg-ink-900">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-white heading-tight display mb-6">Siap Untuk Tersertifikasi?</h2>
            <p class="text-ink-400 body-large mb-10 max-w-2xl mx-auto">Daftarkan diri Anda sekarang dan mulai perjalanan untuk mendapatkan sertifikasi kompetensi yang diakui secara nasional.</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="/skema" class="w-full sm:w-auto px-8 py-3.5 bg-accent-600 text-white text-sm font-semibold hover:bg-accent-700 transition-colors">Lihat Skema Sertifikasi</a>
                <a href="/#kontak" class="w-full sm:w-auto px-8 py-3.5 border border-ink-600 text-ink-300 text-sm font-semibold hover:border-ink-500 hover:text-white transition-colors">Hubungi Kami</a>
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
