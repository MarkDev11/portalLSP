<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembukaan Pendaftaran Sertifikasi BNSP Batch 10 - Portal LSP UBSI</title>
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
        
        /* Reveal */
        .reveal { opacity: 0; transform: translateY(24px); transition: opacity 0.7s ease, transform 0.7s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        
        /* Nav scroll state */
        .nav-scrolled { box-shadow: 0 1px 0 rgba(0,0,0,0.06); }
        
        /* Article content styles */
        .article-body { font-size: 1.0625rem; line-height: 1.8; color: #334155; }
        .article-body h2 { font-size: 1.5rem; font-weight: 700; margin-top: 2.5rem; margin-bottom: 1rem; color: #0f172a; letter-spacing: -0.02em; }
        .article-body h3 { font-size: 1.25rem; font-weight: 600; margin-top: 2rem; margin-bottom: 0.75rem; color: #0f172a; }
        .article-body p { margin-bottom: 1.25rem; }
        .article-body ul, .article-body ol { margin-bottom: 1.25rem; padding-left: 1.5rem; }
        .article-body li { margin-bottom: 0.5rem; }
        .article-body strong { font-weight: 600; color: #0f172a; }
        .article-body a { color: #2563eb; text-decoration: underline; }
        .article-body a:hover { color: #1d4ed8; }
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

    <!-- ===== BREADCRUMB ===== -->
    <section class="pt-20 pb-6 bg-ink-50 border-b border-ink-200">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-sm text-ink-500">
                <a href="/" class="hover:text-ink-900 transition-colors">Beranda</a>
                <span>/</span>
                <a href="/berita" class="hover:text-ink-900 transition-colors">Berita</a>
                <span>/</span>
                <span class="text-ink-900 font-medium">Pembukaan Pendaftaran Sertifikasi BNSP Batch 10</span>
            </nav>
        </div>
    </section>

    <!-- ===== MAIN CONTENT (75/25 Layout) ===== -->
    <section class="py-16 md:py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12">
                
                <!-- LEFT: Article Content (75% = 9 cols) -->
                <article class="lg:col-span-9">
                    
                    <!-- Article Header -->
                    <header class="reveal mb-8">
                        <div class="flex items-center gap-3 text-[11px] text-accent-600 font-semibold uppercase tracking-wider mb-4">
                            <span>Sertifikasi</span>
                            <span>•</span>
                            <span>15 Mei 2026</span>
                            <span>•</span>
                            <span>5 menit baca</span>
                        </div>
                        
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-ink-900 heading-tight display mb-6">
                            Pembukaan Pendaftaran Sertifikasi BNSP Batch 10
                        </h1>
                        
                        <div class="flex items-center gap-4 text-sm text-ink-500">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                                </svg>
                                <span>Admin LSP UBSI</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                                    <path stroke-linecap="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span>1,234 views</span>
                            </div>
                        </div>
                    </header>
                    
                    <!-- Featured Image -->
                    <div class="reveal mb-10">
                        <div class="aspect-[16/9] bg-accent-100 border border-ink-200 flex items-center justify-center">
                            <svg class="w-24 h-24 text-accent-300" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                <path stroke-linecap="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Article Body -->
                    <div class="reveal article-body">
                        <p class="text-xl font-medium text-ink-800 mb-8 leading-relaxed">
                            LSP UBSI dengan bangga mengumumkan pembukaan pendaftaran sertifikasi profesi batch 10 untuk berbagai skema kompetensi. Ini adalah kesempatan emas bagi Anda yang ingin meningkatkan kompetensi dan mendapatkan sertifikat yang diakui oleh industri.
                        </p>
                        
                        <h2>Tentang Sertifikasi BNSP</h2>
                        <p>
                            Sertifikasi profesi dari Badan Nasional Sertifikasi Profesi (BNSP) merupakan pengakuan formal terhadap kompetensi seseorang dalam bidang keahlian tertentu. Sertifikat ini diakui secara nasional dan menjadi nilai tambah yang signifikan dalam dunia kerja.
                        </p>
                        
                        <p>
                            LSP UBSI sebagai Lembaga Sertifikasi Profesi yang telah terakreditasi oleh BNSP, berkomitmen untuk menghasilkan tenaga profesional yang kompeten dan siap bersaing di dunia industri.
                        </p>
                        
                        <h2>Skema Sertifikasi yang Tersedia</h2>
                        <p>
                            Pada batch 10 ini, kami membuka pendaftaran untuk berbagai skema sertifikasi yang disesuaikan dengan kebutuhan industri saat ini:
                        </p>
                        
                        <ul>
                            <li><strong>Junior Web Developer</strong> - Untuk Anda yang ingin berkarir sebagai pengembang web profesional</li>
                            <li><strong>Junior Graphic Designer</strong> - Bagi yang memiliki passion di bidang desain grafis</li>
                            <li><strong>Digital Marketing Specialist</strong> - Untuk menguasai strategi pemasaran digital</li>
                            <li><strong>Network Administrator</strong> - Mengelola infrastruktur jaringan komputer</li>
                            <li><strong>Database Administrator</strong> - Spesialis pengelolaan basis data</li>
                            <li><strong>Mobile Application Developer</strong> - Pengembangan aplikasi mobile Android/iOS</li>
                        </ul>
                        
                        <h2>Persyaratan Pendaftaran</h2>
                        <p>
                            Untuk dapat mengikuti sertifikasi profesi batch 10, peserta harus memenuhi persyaratan berikut:
                        </p>
                        
                        <ol>
                            <li>Minimal pendidikan SMA/SMK atau sederajat</li>
                            <li>Memiliki pengalaman atau pengetahuan dasar di bidang yang akan disertifikasi</li>
                            <li>Mengisi formulir pendaftaran online</li>
                            <li>Melengkapi dokumen persyaratan (KTP, ijazah, CV, portofolio)</li>
                            <li>Membayar biaya sertifikasi sesuai skema yang dipilih</li>
                        </ol>
                        
                        <h2>Jadwal dan Timeline</h2>
                        <p>
                            Berikut adalah jadwal lengkap untuk sertifikasi batch 10:
                        </p>
                        
                        <ul>
                            <li><strong>Pendaftaran:</strong> 15 Mei - 15 Juni 2026</li>
                            <li><strong>Verifikasi Dokumen:</strong> 16 - 20 Juni 2026</li>
                            <li><strong>Pembayaran:</strong> 21 - 25 Juni 2026</li>
                            <li><strong>Pelatihan (Opsional):</strong> 1 - 15 Juli 2026</li>
                            <li><strong>Uji Kompetensi:</strong> 20 - 25 Juli 2026</li>
                            <li><strong>Pengumuman Hasil:</strong> 5 Agustus 2026</li>
                            <li><strong>Penyerahan Sertifikat:</strong> 15 Agustus 2026</li>
                        </ul>
                        
                        <h2>Biaya Investasi</h2>
                        <p>
                            Biaya sertifikasi bervariasi tergantung skema yang dipilih, mulai dari Rp 1.500.000 hingga Rp 3.000.000. Biaya ini sudah termasuk materi uji kompetensi, asesmen oleh asesor bersertifikat BNSP, sertifikat kompetensi (jika lulus), dan konsultasi pra-asesmen.
                        </p>
                        
                        <p>
                            <strong>Promo Spesial:</strong> Dapatkan diskon 15% untuk pendaftaran early bird (sebelum 31 Mei 2026) dan diskon 20% untuk pendaftaran kelompok (minimal 5 orang).
                        </p>
                        
                        <h2>Manfaat Sertifikasi</h2>
                        <p>
                            Dengan mengikuti sertifikasi profesi di LSP UBSI, Anda akan mendapatkan berbagai manfaat:
                        </p>
                        
                        <ul>
                            <li>Sertifikat kompetensi yang diakui secara nasional oleh BNSP</li>
                            <li>Meningkatkan kredibilitas dan daya saing di dunia kerja</li>
                            <li>Akses ke job fair dan rekrutmen dari perusahaan partner</li>
                            <li>Networking dengan profesional di bidang yang sama</li>
                            <li>Peluang karir yang lebih luas dan gaji yang lebih kompetitif</li>
                            <li>Pengakuan kompetensi dari industri</li>
                        </ul>
                        
                        <h2>Cara Mendaftar</h2>
                        <p>
                            Pendaftaran dapat dilakukan secara online melalui portal LSP UBSI. Kunjungi website resmi, pilih skema sertifikasi yang diinginkan, isi formulir pendaftaran dengan lengkap, upload dokumen persyaratan, dan lakukan pembayaran setelah dokumen diverifikasi.
                        </p>
                        
                        <h2>Informasi Lebih Lanjut</h2>
                        <p>
                            Untuk informasi lebih detail mengenai sertifikasi batch 10, Anda dapat menghubungi kami melalui email di <a href="mailto:lsp@ubsi.ac.id">lsp@ubsi.ac.id</a>, telepon (021) 1234-5678, atau WhatsApp 0812-3456-7890.
                        </p>
                        
                        <p>
                            Jangan lewatkan kesempatan emas ini! Daftarkan diri Anda sekarang dan raih masa depan yang lebih cerah dengan sertifikasi profesi dari LSP UBSI.
                        </p>
                    </div>
                    
                    <!-- Author Info -->
                    <div class="reveal mt-12 pt-8 border-t border-ink-200">
                        <div class="flex items-start gap-4">
                            <div class="w-16 h-16 bg-accent-600 flex items-center justify-center flex-shrink-0">
                                <span class="text-white font-bold text-2xl">A</span>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-ink-900 mb-1">Admin LSP UBSI</h3>
                                <p class="text-sm text-ink-500 mb-2">Tim Redaksi LSP UBSI</p>
                                <p class="text-sm text-ink-600 leading-relaxed">
                                    Tim redaksi LSP UBSI berkomitmen untuk menyajikan informasi terkini seputar sertifikasi profesi, pelatihan, dan perkembangan dunia kerja.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tags -->
                    <div class="reveal mt-8 pt-8 border-t border-ink-200">
                        <h3 class="text-sm font-bold text-ink-900 uppercase tracking-wider mb-3">Tags</h3>
                        <div class="flex flex-wrap gap-2">
                            <a href="/berita?tag=sertifikasi" class="px-3 py-1.5 text-xs font-medium text-ink-700 border border-ink-200 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                Sertifikasi
                            </a>
                            <a href="/berita?tag=bnsp" class="px-3 py-1.5 text-xs font-medium text-ink-700 border border-ink-200 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                BNSP
                            </a>
                            <a href="/berita?tag=pendaftaran" class="px-3 py-1.5 text-xs font-medium text-ink-700 border border-ink-200 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                Pendaftaran
                            </a>
                            <a href="/berita?tag=kompetensi" class="px-3 py-1.5 text-xs font-medium text-ink-700 border border-ink-200 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                Kompetensi
                            </a>
                            <a href="/berita?tag=karir" class="px-3 py-1.5 text-xs font-medium text-ink-700 border border-ink-200 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                Karir
                            </a>
                        </div>
                    </div>
                    
                    <!-- Back to News -->
                    <div class="reveal mt-10">
                        <a href="/berita" class="inline-flex items-center gap-2 px-6 py-3 bg-accent-600 text-white text-sm font-semibold hover:bg-accent-700 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                            </svg>
                            Kembali ke Daftar Berita
                        </a>
                    </div>
                    
                </article>
                
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
                            <a href="/berita?kategori=semua" class="block px-3 py-2 text-sm font-medium text-ink-700 border border-ink-200 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                Semua Berita
                            </a>
                            <a href="/berita?kategori=sertifikasi" class="block px-3 py-2 text-sm font-medium text-white bg-accent-600 hover:bg-accent-700 transition-colors">
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
                                <h4 class="text-sm font-semibold text-ink-900 leading-snug">
                                    <a href="/berita/tips-lolos-sertifikasi" class="hover:text-accent-600 transition-colors">
                                        Tips Lolos Uji Sertifikasi Kompetensi
                                    </a>
                                </h4>
                            </article>
                            
                            <article class="pb-4 border-b border-ink-100 last:border-0 last:pb-0">
                                <div class="text-[11px] text-ink-400 mb-1">16 Mei 2026</div>
                                <h4 class="text-sm font-semibold text-ink-900 leading-snug">
                                    <a href="/berita/manfaat-sertifikasi-profesi" class="hover:text-accent-600 transition-colors">
                                        5 Manfaat Memiliki Sertifikat Profesi
                                    </a>
                                </h4>
                            </article>
                            
                            <article class="pb-4 border-b border-ink-100 last:border-0 last:pb-0">
                                <div class="text-[11px] text-ink-400 mb-1">14 Mei 2026</div>
                                <h4 class="text-sm font-semibold text-ink-900 leading-snug">
                                    <a href="/berita/skema-populer-2026" class="hover:text-accent-600 transition-colors">
                                        Skema Sertifikasi Paling Diminati 2026
                                    </a>
                                </h4>
                            </article>
                            
                            <article class="pb-4 border-b border-ink-100 last:border-0 last:pb-0">
                                <div class="text-[11px] text-ink-400 mb-1">11 Mei 2026</div>
                                <h4 class="text-sm font-semibold text-ink-900 leading-snug">
                                    <a href="/berita/persiapan-uji-kompetensi" class="hover:text-accent-600 transition-colors">
                                        Panduan Persiapan Uji Kompetensi
                                    </a>
                                </h4>
                            </article>
                            
                            <article class="pb-4 border-b border-ink-100 last:border-0 last:pb-0">
                                <div class="text-[11px] text-ink-400 mb-1">9 Mei 2026</div>
                                <h4 class="text-sm font-semibold text-ink-900 leading-snug">
                                    <a href="/berita/karir-setelah-sertifikasi" class="hover:text-accent-600 transition-colors">
                                        Peluang Karir Setelah Tersertifikasi
                                    </a>
                                </h4>
                            </article>
                            
                            <article class="pb-4 border-b border-ink-100 last:border-0 last:pb-0">
                                <div class="text-[11px] text-ink-400 mb-1">7 Mei 2026</div>
                                <h4 class="text-sm font-semibold text-ink-900 leading-snug">
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
