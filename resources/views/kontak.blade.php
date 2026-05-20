<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak Kami - Portal LSP UBSI</title>
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
        
        /* Hover underline animation */
        .link-animate { position: relative; }
        .link-animate::after { content: ''; position: absolute; left: 0; bottom: -2px; width: 0; height: 1.5px; background: #2563eb; transition: width 0.3s ease; }
        .link-animate:hover::after { width: 100%; }
        
        /* Reveal */
        .reveal { opacity: 0; transform: translateY(24px); transition: opacity 0.7s ease, transform 0.7s ease; }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        
        /* Nav scroll state */
        .nav-scrolled { box-shadow: 0 1px 0 rgba(0,0,0,0.06); }
        
        /* Form focus */
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
                    <a href="/tentang-kami" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors link-animate">Tentang</a>
                    <a href="/skema" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors link-animate">Skema</a>
                    <a href="/berita" class="text-[13px] font-medium text-ink-500 hover:text-ink-900 transition-colors link-animate">Berita</a>
                    <a href="/kontak" class="text-[13px] font-bold text-ink-900 transition-colors link-animate">Kontak</a>
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
                <a href="/berita" class="block py-2 text-sm font-medium text-ink-600 hover:text-ink-900">Berita</a>
                <a href="/kontak" class="block py-2 text-sm font-bold text-ink-900">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- ===== HERO ===== -->
    <section class="pt-16 bg-ink-900">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 md:py-28">
            <div class="reveal">
                <p class="text-accent-400 text-xs font-bold uppercase tracking-[0.2em] mb-4">Hubungi Kami</p>
                <h1 class="text-3xl md:text-5xl font-bold text-white heading-tight display mb-4">Kontak</h1>
                <div class="w-12 h-0.5 bg-accent-500 mb-6"></div>
                <p class="text-ink-300 text-lg leading-relaxed max-w-2xl">Kami siap membantu Anda. Hubungi kami untuk informasi lebih lanjut mengenai sertifikasi profesi dan layanan LSP UBSI.</p>
            </div>
        </div>
    </section>

    <!-- ===== CONTACT INFO & FORM ===== -->
    <section class="py-20 md:py-28 bg-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16">
                
                <!-- LEFT: Contact Information -->
                <div class="reveal">
                    <h2 class="text-2xl md:text-3xl font-bold text-ink-900 heading-tight mb-6">Informasi Kontak</h2>
                    <div class="line-accent mb-8"></div>
                    
                    <div class="space-y-6">
                        <!-- Address -->
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-accent-50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-accent-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-ink-900 mb-1">Alamat</h3>
                                <p class="text-ink-600 leading-relaxed">
                                    Jl. Kramat Raya No.98<br>
                                    Jakarta Pusat 10450<br>
                                    DKI Jakarta, Indonesia
                                </p>
                            </div>
                        </div>
                        
                        <!-- Phone -->
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-accent-50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-accent-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-ink-900 mb-1">Telepon</h3>
                                <p class="text-ink-600">
                                    (021) 1234-5678<br>
                                    0812-3456-7890 (WhatsApp)
                                </p>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-accent-50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-accent-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-ink-900 mb-1">Email</h3>
                                <p class="text-ink-600">
                                    lsp@ubsi.ac.id<br>
                                    info@lsp-ubsi.ac.id
                                </p>
                            </div>
                        </div>
                        
                        <!-- Office Hours -->
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-accent-50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-accent-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-ink-900 mb-1">Jam Operasional</h3>
                                <p class="text-ink-600">
                                    Senin - Jumat: 08:00 - 17:00 WIB<br>
                                    Sabtu: 08:00 - 13:00 WIB<br>
                                    Minggu & Libur: Tutup
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="mt-10 pt-10 border-t border-ink-200">
                        <h3 class="font-bold text-ink-900 mb-4">Ikuti Kami</h3>
                        <div class="flex gap-3">
                            <a href="#" class="w-10 h-10 border border-ink-200 flex items-center justify-center text-ink-600 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 border border-ink-200 flex items-center justify-center text-ink-600 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 border border-ink-200 flex items-center justify-center text-ink-600 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </a>
                            <a href="#" class="w-10 h-10 border border-ink-200 flex items-center justify-center text-ink-600 hover:border-accent-600 hover:text-accent-600 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- RIGHT: Contact Form -->
                <div class="reveal delay-100">
                    <h2 class="text-2xl md:text-3xl font-bold text-ink-900 heading-tight mb-6">Kirim Pesan</h2>
                    <div class="line-accent mb-8"></div>
                    
                    <form action="#" method="POST" class="space-y-6">
                        
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-ink-900 mb-2">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-3 border border-ink-300 text-ink-900 transition-colors">
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-ink-900 mb-2">Email</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-ink-300 text-ink-900 transition-colors">
                        </div>
                        
                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-ink-900 mb-2">Nomor Telepon</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-ink-300 text-ink-900 transition-colors">
                        </div>
                        
                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-ink-900 mb-2">Subjek</label>
                            <input type="text" id="subject" name="subject" required class="w-full px-4 py-3 border border-ink-300 text-ink-900 transition-colors">
                        </div>
                        
                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-ink-900 mb-2">Pesan</label>
                            <textarea id="message" name="message" rows="6" required class="w-full px-4 py-3 border border-ink-300 text-ink-900 transition-colors resize-none"></textarea>
                        </div>
                        
                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="w-full px-6 py-3 bg-accent-600 text-white font-semibold hover:bg-accent-700 transition-colors">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>

    <!-- ===== MAP SECTION ===== -->
    <section class="py-20 md:py-28 bg-ink-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="reveal text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-ink-900 heading-tight mb-4">Lokasi Kami</h2>
                <div class="line-accent mx-auto mb-6"></div>
                <p class="text-ink-600 max-w-2xl mx-auto">Kunjungi kantor kami untuk konsultasi langsung mengenai sertifikasi profesi dan layanan LSP UBSI.</p>
            </div>
            
            <!-- Map Placeholder -->
            <div class="reveal aspect-[16/9] bg-ink-200 border border-ink-300 flex items-center justify-center">
                <div class="text-center">
                    <svg class="w-16 h-16 text-ink-400 mx-auto mb-4" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                        <path stroke-linecap="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z"/>
                    </svg>
                    <p class="text-sm text-ink-500">Google Maps Embed</p>
                    <p class="text-xs text-ink-400 mt-1">Jl. Kramat Raya No.98, Jakarta Pusat</p>
                </div>
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
