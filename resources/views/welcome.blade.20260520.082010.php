<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UBSI Portal LSP - Lembaga Sertifikasi Profesi</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Figtree', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Smooth scroll */
        html { scroll-behavior: smooth; }
        
        /* Carousel transitions */
        .carousel-track {
            transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        /* Fade up animation */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-up {
            animation: fadeUp 0.8s ease-out forwards;
        }
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        
        /* Geometric pattern for carousel */
        .geo-pattern {
            background-image: 
                radial-gradient(circle at 20% 50%, rgba(255,255,255,0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255,255,255,0.1) 0%, transparent 50%);
        }
        
        /* Subtle grid pattern */
        .grid-pattern {
            background-image: 
                linear-gradient(rgba(37, 99, 235, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(37, 99, 235, 0.03) 1px, transparent 1px);
            background-size: 60px 60px;
        }
        
        /* Card hover effect */
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px -12px rgba(37, 99, 235, 0.15);
        }
        
        /* Smooth gradient */
        .hero-gradient {
            background: linear-gradient(135deg, #2563eb 0%, #3b82f6 40%, #60a5fa 70%, #93c5fd 100%);
        }
        .hero-gradient-2 {
            background: linear-gradient(135deg, #1e40af 0%, #2563eb 40%, #3b82f6 70%, #60a5fa 100%);
        }
        .hero-gradient-3 {
            background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 35%, #3b82f6 60%, #bfdbfe 100%);
        }
        
        /* Scroll reveal */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-700 bg-white">

    <!-- ==================== NAVIGATION ==================== -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white/80 backdrop-blur-xl border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="#beranda" class="flex items-center gap-3 group">
                    <!-- Laravel Logo SVG -->
                    <div class="w-10 h-10 rounded-xl bg-primary-600 flex items-center justify-center shadow-lg shadow-primary-500/25 group-hover:shadow-primary-500/40 transition-shadow">
                        <svg viewBox="0 0 316 316" class="w-6 h-6 text-white" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path d="M305.8 81.125C305.77 80.995 305.69 80.885 305.65 80.755C305.56 80.525 305.49 80.285 305.37 80.075C305.29 79.935 305.17 79.815 305.07 79.685C304.94 79.515 304.83 79.325 304.68 79.175C304.55 79.045 304.39 78.955 304.25 78.845C304.09 78.715 303.95 78.575 303.77 78.475L251.32 48.275C249.97 47.495 248.31 47.495 246.96 48.275L194.51 78.475C194.33 78.575 194.19 78.725 194.03 78.845C193.89 78.955 193.73 79.045 193.6 79.175C193.45 79.325 193.34 79.515 193.21 79.685C193.11 79.815 192.99 79.935 192.91 80.075C192.79 80.285 192.71 80.525 192.63 80.755C192.58 80.875 192.51 80.995 192.48 81.125C192.38 81.495 192.33 81.875 192.33 82.265V139.625L148.62 164.795V52.575C148.62 52.185 148.57 51.805 148.47 51.435C148.44 51.305 148.36 51.195 148.32 51.065C148.23 50.835 148.16 50.595 148.04 50.385C147.96 50.245 147.84 50.125 147.74 49.995C147.61 49.825 147.5 49.635 147.35 49.485C147.22 49.355 147.06 49.265 146.92 49.155C146.76 49.025 146.62 48.885 146.44 48.785L93.99 18.585C92.64 17.805 90.98 17.805 89.63 18.585L37.18 48.785C37 48.885 36.86 49.035 36.7 49.155C36.56 49.265 36.4 49.355 36.27 49.485C36.12 49.635 36.01 49.825 35.88 49.995C35.78 50.125 35.66 50.245 35.58 50.385C35.46 50.595 35.38 50.835 35.3 51.065C35.25 51.185 35.18 51.305 35.15 51.435C35.05 51.805 35 52.185 35 52.575V232.235C35 233.795 35.84 235.245 37.19 236.025L142.1 296.425C142.33 296.555 142.58 296.635 142.82 296.725C142.93 296.765 143.04 296.835 143.16 296.865C143.53 296.965 143.9 297.015 144.28 297.015C144.66 297.015 145.03 296.965 145.4 296.865C145.5 296.835 145.59 296.775 145.69 296.745C145.95 296.655 146.21 296.565 146.45 296.435L251.36 236.035C252.72 235.255 253.55 233.815 253.55 232.245V174.885L303.81 145.945C305.17 145.165 306 143.725 306 142.155V82.265C305.95 81.875 305.89 81.495 305.8 81.125ZM144.2 227.205L100.57 202.515L146.39 176.135L196.66 147.195L240.33 172.335L208.29 190.625L144.2 227.205Z"/>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg font-bold text-gray-900 leading-tight">UBSI Portal LSP</span>
                        <span class="text-[10px] text-primary-600 font-semibold uppercase tracking-wider">Lembaga Sertifikasi Profesi</span>
                    </div>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center gap-1">
                    <a href="#beranda" class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-primary-600 rounded-lg hover:bg-primary-50 transition-colors">Beranda</a>
                    <a href="#tentang" class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-primary-600 rounded-lg hover:bg-primary-50 transition-colors">Tentang</a>
                    <a href="#skema" class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-primary-600 rounded-lg hover:bg-primary-50 transition-colors">Skema</a>
                    <a href="#berita" class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-primary-600 rounded-lg hover:bg-primary-50 transition-colors">Berita</a>
                    <a href="#kontak" class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-primary-600 rounded-lg hover:bg-primary-50 transition-colors">Kontak</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-100">
            <div class="px-4 py-3 space-y-1">
                <a href="#beranda" class="block px-4 py-3 text-sm font-medium text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">Beranda</a>
                <a href="#tentang" class="block px-4 py-3 text-sm font-medium text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">Tentang</a>
                <a href="#skema" class="block px-4 py-3 text-sm font-medium text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">Skema</a>
                <a href="#berita" class="block px-4 py-3 text-sm font-medium text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">Berita</a>
                <a href="#kontak" class="block px-4 py-3 text-sm font-medium text-gray-600 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- ==================== HERO CAROUSEL ==================== -->
    <section id="beranda" class="relative pt-20">
        <div class="relative h-[560px] md:h-[640px] overflow-hidden bg-gray-50">
            <!-- Carousel Track -->
            <div id="carousel-track" class="carousel-track flex h-full">
                <!-- Slide 1 -->
                <div class="w-full flex-shrink-0 relative hero-gradient geo-pattern">
                    <div class="absolute inset-0 opacity-20">
                        <svg class="w-full h-full" viewBox="0 0 800 600" preserveAspectRatio="xMidYMid slice">
                            <circle cx="100" cy="100" r="200" fill="white" opacity="0.1"/>
                            <circle cx="700" cy="500" r="250" fill="white" opacity="0.08"/>
                            <rect x="300" y="50" width="100" height="100" fill="none" stroke="white" stroke-width="2" opacity="0.15" transform="rotate(15 350 100)"/>
                            <rect x="600" y="300" width="80" height="80" fill="none" stroke="white" stroke-width="2" opacity="0.12" transform="rotate(-10 640 340)"/>
                        </svg>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="w-full flex-shrink-0 relative hero-gradient-2 geo-pattern">
                    <div class="absolute inset-0 opacity-20">
                        <svg class="w-full h-full" viewBox="0 0 800 600" preserveAspectRatio="xMidYMid slice">
                            <polygon points="400,50 700,250 400,450 100,250" fill="white" opacity="0.06"/>
                            <circle cx="650" cy="150" r="100" fill="white" opacity="0.1"/>
                            <rect x="50" y="400" width="120" height="120" fill="none" stroke="white" stroke-width="2" opacity="0.1" transform="rotate(25 110 460)"/>
                        </svg>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="w-full flex-shrink-0 relative hero-gradient-3 geo-pattern">
                    <div class="absolute inset-0 opacity-20">
                        <svg class="w-full h-full" viewBox="0 0 800 600" preserveAspectRatio="xMidYMid slice">
                            <circle cx="200" cy="300" r="150" fill="none" stroke="white" stroke-width="2" opacity="0.12"/>
                            <circle cx="200" cy="300" r="250" fill="none" stroke="white" stroke-width="1" opacity="0.08"/>
                            <circle cx="600" cy="200" r="180" fill="white" opacity="0.06"/>
                            <rect x="400" y="350" width="60" height="60" fill="white" opacity="0.08" transform="rotate(45 430 380)"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button id="prev-slide" class="absolute left-4 md:left-8 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/20 backdrop-blur-sm text-white border border-white/30 flex items-center justify-center hover:bg-white/30 transition-all z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            <button id="next-slide" class="absolute right-4 md:right-8 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/20 backdrop-blur-sm text-white border border-white/30 flex items-center justify-center hover:bg-white/30 transition-all z-10">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>

            <!-- Dot Indicators -->
            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex items-center gap-3 z-10">
                <button class="carousel-dot w-3 h-3 rounded-full bg-white/50 transition-all duration-300" data-slide="0"></button>
                <button class="carousel-dot w-3 h-3 rounded-full bg-white/50 transition-all duration-300" data-slide="1"></button>
                <button class="carousel-dot w-3 h-3 rounded-full bg-white/50 transition-all duration-300" data-slide="2"></button>
            </div>
        </div>

        <!-- Hero Text Content (Below Carousel - Clean Layout) -->
        <div class="relative -mt-32 z-20 px-4 mb-12">
            <div class="max-w-4xl mx-auto text-center animate-fade-up">
                <div class="bg-white/90 backdrop-blur-xl rounded-3xl shadow-xl shadow-primary-500/10 border border-gray-100 p-8 md:p-12">
                    <h1 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4 leading-tight">
                        Portal <span class="text-primary-600">LSP UBSI</span>
                    </h1>
                    <p class="text-base md:text-lg text-gray-600 mb-8 max-w-2xl mx-auto leading-relaxed">
                        Lembaga Sertifikasi Profesi Universitas Bina Sarana Informatika. Wujudkan kompetensi profesional Anda melalui sertifikasi berstandar nasional.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="#skema" class="w-full sm:w-auto px-8 py-3.5 bg-primary-600 text-white font-semibold rounded-xl hover:bg-primary-700 transition-colors shadow-lg shadow-primary-500/25 hover:shadow-primary-500/40">
                            Jelajahi Skema
                        </a>
                        <a href="#tentang" class="w-full sm:w-auto px-8 py-3.5 border-2 border-gray-200 text-gray-700 font-semibold rounded-xl hover:border-primary-300 hover:text-primary-600 transition-colors">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== TENTANG KAMI ==================== -->
    <section id="tentang" class="py-20 md:py-28 bg-white grid-pattern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <!-- Left: Text -->
                <div class="reveal">
                    <span class="inline-block px-4 py-1.5 bg-primary-50 text-primary-700 text-sm font-semibold rounded-full mb-6">Tentang Kami</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-tight">
                        Membangun Kompetensi <span class="text-primary-600">Profesional Indonesia</span>
                    </h2>
                    <div class="space-y-4 text-gray-600 leading-relaxed mb-8">
                        <p>
                            LSP UBSI adalah lembaga sertifikasi profesi yang berkomitmen untuk menghasilkan tenaga kerja Indonesia yang kompeten dan berdaya saing tinggi di era digital.
                        </p>
                        <p>
                            Kami menyediakan layanan sertifikasi kompetensi berbasis Standar Kompetensi Kerja Nasional Indonesia (SKKNI) yang diakui secara nasional.
                        </p>
                    </div>
                    <div class="grid grid-cols-3 gap-6 mb-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary-600 mb-1">15+</div>
                            <div class="text-sm text-gray-500">Skema Sertifikasi</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary-600 mb-1">2.500+</div>
                            <div class="text-sm text-gray-500">Peserta Tersertifikasi</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary-600 mb-1">98%</div>
                            <div class="text-sm text-gray-500">Tingkat Kelulusan</div>
                        </div>
                    </div>
                    <a href="#kontak" class="inline-flex items-center gap-2 text-primary-600 font-semibold hover:text-primary-700 transition-colors">
                        Hubungi Kami
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>

                <!-- Right: Image/Visual -->
                <div class="reveal relative">
                    <div class="relative">
                        <!-- Background decoration -->
                        <div class="absolute -inset-4 bg-primary-50 rounded-3xl"></div>
                        <!-- Main visual -->
                        <div class="relative bg-white rounded-2xl shadow-xl shadow-primary-500/10 p-8">
                            <div class="aspect-[4/3] rounded-xl bg-primary-600 flex items-center justify-center relative overflow-hidden">
                                <!-- SVG Illustration -->
                                <svg class="w-48 h-48 text-white/20" viewBox="0 0 200 200" fill="currentColor">
                                    <circle cx="100" cy="100" r="80" fill="none" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="100" cy="100" r="60" fill="none" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="100" cy="100" r="40" fill="none" stroke="currentColor" stroke-width="2"/>
                                    <path d="M60 100h80M100 60v80" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="100" cy="100" r="15" fill="white" opacity="0.3"/>
                                    <rect x="135" y="135" width="25" height="25" rx="5" fill="white" opacity="0.2"/>
                                    <rect x="40" y="40" width="20" height="20" rx="4" fill="white" opacity="0.15"/>
                                </svg>
                                <div class="absolute bottom-6 left-6 right-6">
                                    <div class="bg-white/15 backdrop-blur-sm rounded-lg p-4 border border-white/20">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-full bg-white/25 flex items-center justify-center">
                                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <div class="text-white font-semibold text-sm">Sertifikasi Aktif</div>
                                                <div class="text-white/70 text-xs">Lisensi BNSP Diterima</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Floating badges -->
                            <div class="absolute -top-4 -right-4 bg-white rounded-xl shadow-lg p-3 border border-gray-100">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-lg bg-green-50 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </div>
                                    <span class="text-sm font-semibold text-gray-700">BNSP Terlisensi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== DAFTAR SKEMA ==================== -->
    <section id="skema" class="py-20 md:py-28 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="inline-block px-4 py-1.5 bg-primary-50 text-primary-700 text-sm font-semibold rounded-full mb-4">Skema Sertifikasi</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Daftar Skema Sertifikasi</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Pilih skema sertifikasi yang sesuai dengan bidang kompetensi Anda untuk meningkatkan daya saing di dunia kerja.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Skema 1 -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 border border-gray-100">
                    <div class="w-14 h-14 rounded-xl bg-primary-50 flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Junior Web Developer</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">Sertifikasi kompetensi pengembangan aplikasi web front-end dan back-end.</p>
                    <a href="#" class="text-sm font-semibold text-primary-600 hover:text-primary-700 inline-flex items-center gap-1">
                        Detail
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Skema 2 -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 border border-gray-100 delay-100">
                    <div class="w-14 h-14 rounded-xl bg-primary-50 flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Digital Marketing</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">Kompetensi pemasaran digital, media sosial, dan strategi konten online.</p>
                    <a href="#" class="text-sm font-semibold text-primary-600 hover:text-primary-700 inline-flex items-center gap-1">
                        Detail
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Skema 3 -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 border border-gray-100 delay-200">
                    <div class="w-14 h-14 rounded-xl bg-primary-50 flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Administrasi Sistem</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">Manajemen infrastruktur IT, jaringan, dan administrasi server.</p>
                    <a href="#" class="text-sm font-semibold text-primary-600 hover:text-primary-700 inline-flex items-center gap-1">
                        Detail
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Skema 4 -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 border border-gray-100 delay-300">
                    <div class="w-14 h-14 rounded-xl bg-primary-50 flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Data Analyst</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">Analisis data, visualisasi informasi, dan pengambilan keputusan berbasis data.</p>
                    <a href="#" class="text-sm font-semibold text-primary-600 hover:text-primary-700 inline-flex items-center gap-1">
                        Detail
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Skema 5 -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 border border-gray-100">
                    <div class="w-14 h-14 rounded-xl bg-primary-50 flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Mobile Developer</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">Pengembangan aplikasi mobile native dan cross-platform.</p>
                    <a href="#" class="text-sm font-semibold text-primary-600 hover:text-primary-700 inline-flex items-center gap-1">
                        Detail
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Skema 6 -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 border border-gray-100 delay-100">
                    <div class="w-14 h-14 rounded-xl bg-primary-50 flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Photography</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">Kompetensi fotografi digital, editing, dan produksi visual konten.</p>
                    <a href="#" class="text-sm font-semibold text-primary-600 hover:text-primary-700 inline-flex items-center gap-1">
                        Detail
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Skema 7 -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 border border-gray-100 delay-200">
                    <div class="w-14 h-14 rounded-xl bg-primary-50 flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">UI/UX Design</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">Perancangan antarmuka dan pengalaman pengguna aplikasi digital.</p>
                    <a href="#" class="text-sm font-semibold text-primary-600 hover:text-primary-700 inline-flex items-center gap-1">
                        Detail
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>

                <!-- Skema 8 -->
                <div class="reveal card-hover bg-white rounded-2xl p-6 border border-gray-100 delay-300">
                    <div class="w-14 h-14 rounded-xl bg-primary-50 flex items-center justify-center mb-5">
                        <svg class="w-7 h-7 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Technical Writer</h3>
                    <p class="text-sm text-gray-500 leading-relaxed mb-4">Penulisan dokumentasi teknis, manual, dan konten edukasi IT.</p>
                    <a href="#" class="text-sm font-semibold text-primary-600 hover:text-primary-700 inline-flex items-center gap-1">
                        Detail
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== BERITA ==================== -->
    <section id="berita" class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="inline-block px-4 py-1.5 bg-primary-50 text-primary-700 text-sm font-semibold rounded-full mb-4">Berita & Informasi</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Berita Terkini</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Update terbaru seputar kegiatan sertifikasi, pelatihan, dan informasi penting lainnya dari LSP UBSI.</p>
            </div>

            <div class="grid lg:grid-cols-5 gap-8">
                <!-- LEFT: Big Card (3 cols) -->
                <div class="lg:col-span-3 reveal">
                    <article class="group bg-white rounded-2xl border border-gray-100 overflow-hidden card-hover">
                        <div class="aspect-[16/10] bg-primary-50 relative overflow-hidden">
                            <!-- Placeholder Illustration -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-32 h-32 text-primary-200" viewBox="0 0 200 200" fill="currentColor">
                                    <rect x="30" y="40" width="140" height="100" rx="8" fill="none" stroke="currentColor" stroke-width="2"/>
                                    <rect x="45" y="55" width="110" height="8" rx="4" fill="currentColor" opacity="0.3"/>
                                    <rect x="45" y="72" width="80" height="6" rx="3" fill="currentColor" opacity="0.2"/>
                                    <rect x="45" y="85" width="90" height="6" rx="3" fill="currentColor" opacity="0.2"/>
                                    <rect x="45" y="98" width="70" height="6" rx="3" fill="currentColor" opacity="0.2"/>
                                    <circle cx="160" cy="160" r="25" fill="none" stroke="currentColor" stroke-width="2"/>
                                    <path d="M150 160l7 7 10-14" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <div class="p-6 md:p-8">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-primary-50 text-primary-700 text-xs font-semibold rounded-full">Informasi</span>
                                <span class="text-sm text-gray-400">15 Januari 2026</span>
                            </div>
                            <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors">
                                Pembukaan Pendaftaran Sertifikasi Kompetensi Periode Januari 2026
                            </h3>
                            <p class="text-gray-600 leading-relaxed mb-6">
                                LSP UBSI kembali membuka kesempatan bagi masyarakat umum dan mahasiswa untuk mengikuti uji sertifikasi kompetensi pada periode Januari 2026. Terdapat 8 skema sertifikasi yang dibuka pada periode ini mulai dari Junior Web Developer, Digital Marketing, hingga Data Analyst...
                            </p>
                            <a href="#" class="inline-flex items-center gap-2 text-primary-600 font-semibold hover:gap-3 transition-all">
                                Baca Selengkapnya
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                </div>

                <!-- RIGHT: 3 Small Cards (2 cols) -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Card Kecil 1 -->
                    <article class="reveal card-hover flex gap-4 bg-white rounded-xl border border-gray-100 p-4 group delay-100">
                        <div class="w-24 h-24 flex-shrink-0 bg-primary-50 rounded-lg flex items-center justify-center">
                            <svg class="w-10 h-10 text-primary-300" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5">
                                <rect x="8" y="8" width="32" height="28" rx="3"/>
                                <path d="M8 16h32M16 24h8M16 30h5"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="text-xs text-gray-400 mb-1 block">10 Januari 2026</span>
                            <h4 class="font-bold text-gray-900 mb-1 line-clamp-2 group-hover:text-primary-600 transition-colors">
                                Workshop Persiapan Uji Kompetensi Batch 12
                            </h4>
                            <p class="text-sm text-gray-500 line-clamp-2">Workshop intensif untuk mempersiapkan peserta uji kompetensi...</p>
                        </div>
                    </article>

                    <!-- Card Kecil 2 -->
                    <article class="reveal card-hover flex gap-4 bg-white rounded-xl border border-gray-100 p-4 group delay-200">
                        <div class="w-24 h-24 flex-shrink-0 bg-primary-50 rounded-lg flex items-center justify-center">
                            <svg class="w-10 h-10 text-primary-300" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5">
                                <circle cx="24" cy="24" r="14"/>
                                <path d="M24 16v8l5 5"/>
                                <path d="M12 24H8M40 24h-4M24 12V8M24 40v-4"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="text-xs text-gray-400 mb-1 block">5 Januari 2026</span>
                            <h4 class="font-bold text-gray-900 mb-1 line-clamp-2 group-hover:text-primary-600 transition-colors">
                                Perpanjangan Lisensi BNSP LSP UBSI hingga 2028
                            </h4>
                            <p class="text-sm text-gray-500 line-clamp-2">LSP UBSI berhasil memperpanjang lisensi Badan Nasional...</p>
                        </div>
                    </article>

                    <!-- Card Kecil 3 -->
                    <article class="reveal card-hover flex gap-4 bg-white rounded-xl border border-gray-100 p-4 group delay-300">
                        <div class="w-24 h-24 flex-shrink-0 bg-primary-50 rounded-lg flex items-center justify-center">
                            <svg class="w-10 h-10 text-primary-300" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5">
                                <path d="M12 32c0-6.627 5.373-12 12-12s12 5.373 12 12"/>
                                <circle cx="24" cy="14" r="6"/>
                                <path d="M8 38h32"/>
                            </svg>
                        </div>
                        <div class="flex-1 min-w-0">
                            <span class="text-xs text-gray-400 mb-1 block">28 Desember 2025</span>
                            <h4 class="font-bold text-gray-900 mb-1 line-clamp-2 group-hover:text-primary-600 transition-colors">
                                500 Peserta Tersertifikasi pada Tahun 2025
                            </h4>
                            <p class="text-sm text-gray-500 line-clamp-2">Pencapaian gemilang dengan 500 peserta berhasil lulus...</p>
                        </div>
                    </article>

                    <!-- Link Lihat Semua -->
                    <div class="reveal text-right pt-2">
                        <a href="#" class="inline-flex items-center gap-2 text-sm font-semibold text-primary-600 hover:text-primary-700">
                            Lihat Semua Berita
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== KONTAK KAMI ==================== -->
    <section id="kontak" class="py-20 md:py-28 bg-primary-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <span class="inline-block px-4 py-1.5 bg-white text-primary-700 text-sm font-semibold rounded-full mb-4 shadow-sm">Kontak</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Hubungi Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Tim kami siap membantu menjawab pertanyaan terkait sertifikasi kompetensi dan layanan lainnya.</p>
            </div>

            <div class="grid lg:grid-cols-5 gap-8 lg:gap-12">
                <!-- Left: Contact Info (3 cols) -->
                <div class="lg:col-span-3 reveal">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Informasi Kontak</h3>
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary-50 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Alamat</h4>
                                    <p class="text-gray-600 text-sm leading-relaxed">Jl. Kramat Raya No.98, RT.2/RW.9, Kwitang, Kec. Senen, Kota Jakarta Pusat, DKI Jakarta 10450</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary-50 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Email</h4>
                                    <p class="text-gray-600 text-sm">lsp@ubsi.ac.id</p>
                                    <p class="text-gray-600 text-sm">info.lsp@ubsi.ac.id</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary-50 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Telepon</h4>
                                    <p class="text-gray-600 text-sm">(021) 2123-4567</p>
                                    <p class="text-gray-600 text-sm">(021) 2123-4568</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-primary-50 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900 mb-1">Jam Operasional</h4>
                                    <p class="text-gray-600 text-sm">Senin - Jumat: 08.00 - 16.00 WIB</p>
                                    <p class="text-gray-600 text-sm">Sabtu: 08.00 - 12.00 WIB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Contact Form (2 cols) -->
                <div class="lg:col-span-2 reveal">
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 h-full">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Kirim Pesan</h3>
                        <form action="#" method="POST" class="space-y-5">
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1.5">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" 
                                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-primary-300 focus:ring-2 focus:ring-primary-100 outline-none transition-all text-sm">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
                                <input type="email" id="email" name="email" placeholder="nama@email.com" 
                                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-primary-300 focus:ring-2 focus:ring-primary-100 outline-none transition-all text-sm">
                            </div>
                            <div>
                                <label for="subjek" class="block text-sm font-medium text-gray-700 mb-1.5">Subjek</label>
                                <input type="text" id="subjek" name="subjek" placeholder="Subjek pesan" 
                                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-primary-300 focus:ring-2 focus:ring-primary-100 outline-none transition-all text-sm">
                            </div>
                            <div>
                                <label for="pesan" class="block text-sm font-medium text-gray-700 mb-1.5">Pesan</label>
                                <textarea id="pesan" name="pesan" rows="4" placeholder="Tulis pesan Anda di sini..." 
                                    class="w-full px-4 py-2.5 rounded-xl border border-gray-200 focus:border-primary-300 focus:ring-2 focus:ring-primary-100 outline-none transition-all resize-none text-sm"></textarea>
                            </div>
                            <button type="submit" 
                                class="w-full px-6 py-3 bg-primary-600 text-white font-semibold rounded-xl hover:bg-primary-700 transition-colors shadow-lg shadow-primary-500/25">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FOOTER ==================== -->
    <footer class="bg-gray-900 text-gray-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Kolom 1: Brand -->
                <div class="lg:col-span-1">
                    <a href="#beranda" class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-primary-600 flex items-center justify-center">
                            <svg viewBox="0 0 316 316" class="w-6 h-6 text-white" fill="white" xmlns="http://www.w3.org/2000/svg">
                                <path d="M305.8 81.125C305.77 80.995 305.69 80.885 305.65 80.755C305.56 80.525 305.49 80.285 305.37 80.075C305.29 79.935 305.17 79.815 305.07 79.685C304.94 79.515 304.83 79.325 304.68 79.175C304.55 79.045 304.39 78.955 304.25 78.845C304.09 78.715 303.95 78.575 303.77 78.475L251.32 48.275C249.97 47.495 248.31 47.495 246.96 48.275L194.51 78.475C194.33 78.575 194.19 78.725 194.03 78.845C193.89 78.955 193.73 79.045 193.6 79.175C193.45 79.325 193.34 79.515 193.21 79.685C193.11 79.815 192.99 79.935 192.91 80.075C192.79 80.285 192.71 80.525 192.63 80.755C192.58 80.875 192.51 80.995 192.48 81.125C192.38 81.495 192.33 81.875 192.33 82.265V139.625L148.62 164.795V52.575C148.62 52.185 148.57 51.805 148.47 51.435C148.44 51.305 148.36 51.195 148.32 51.065C148.23 50.835 148.16 50.595 148.04 50.385C147.96 50.245 147.84 50.125 147.74 49.995C147.61 49.825 147.5 49.635 147.35 49.485C147.22 49.355 147.06 49.265 146.92 49.155C146.76 49.025 146.62 48.885 146.44 48.785L93.99 18.585C92.64 17.805 90.98 17.805 89.63 18.585L37.18 48.785C37 48.885 36.86 49.035 36.7 49.155C36.56 49.265 36.4 49.355 36.27 49.485C36.12 49.635 36.01 49.825 35.88 49.995C35.78 50.125 35.66 50.245 35.58 50.385C35.46 50.595 35.38 50.835 35.3 51.065C35.25 51.185 35.18 51.305 35.15 51.435C35.05 51.805 35 52.185 35 52.575V232.235C35 233.795 35.84 235.245 37.19 236.025L142.1 296.425C142.33 296.555 142.58 296.635 142.82 296.725C142.93 296.765 143.04 296.835 143.16 296.865C143.53 296.965 143.9 297.015 144.28 297.015C144.66 297.015 145.03 296.965 145.4 296.865C145.5 296.835 145.59 296.775 145.69 296.745C145.95 296.655 146.21 296.565 146.45 296.435L251.36 236.035C252.72 235.255 253.55 233.815 253.55 232.245V174.885L303.81 145.945C305.17 145.165 306 143.725 306 142.155V82.265C305.95 81.875 305.89 81.495 305.8 81.125ZM144.2 227.205L100.57 202.515L146.39 176.135L196.66 147.195L240.33 172.335L208.29 190.625L144.2 227.205Z"/>
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-lg font-bold text-white leading-tight">UBSI Portal LSP</span>
                            <span class="text-[10px] text-gray-400 uppercase tracking-wider">Lembaga Sertifikasi Profesi</span>
                        </div>
                    </a>
                    <p class="text-sm text-gray-400 leading-relaxed mb-6">
                        Lembaga Sertifikasi Profesi Universitas Bina Sarana Informatika yang berkomitmen menghasilkan tenaga kerja kompeten dan berdaya saing tinggi.
                    </p>
                    <div class="flex items-center gap-3">
                        <a href="#" class="w-9 h-9 rounded-lg bg-gray-800 flex items-center justify-center hover:bg-primary-600 transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-lg bg-gray-800 flex items-center justify-center hover:bg-primary-600 transition-colors">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Kolom 2: Link Cepat -->
                <div>
                    <h4 class="text-white font-semibold mb-5">Link Cepat</h4>
                    <ul class="space-y-3">
                        <li><a href="#beranda" class="text-sm text-gray-400 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="#tentang" class="text-sm text-gray-400 hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="#skema" class="text-sm text-gray-400 hover:text-white transition-colors">Daftar Skema</a></li>
                        <li><a href="#berita" class="text-sm text-gray-400 hover:text-white transition-colors">Berita</a></li>
                        <li><a href="#kontak" class="text-sm text-gray-400 hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Layanan -->
                <div>
                    <h4 class="text-white font-semibold mb-5">Layanan</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Sertifikasi Profesi</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Pelatihan Kompetensi</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Asesmen Mandiri</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Konsultasi Karir</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">Kerjasama Industri</a></li>
                    </ul>
                </div>

                <!-- Kolom 4: Kontak -->
                <div>
                    <h4 class="text-white font-semibold mb-5">Hubungi Kami</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="text-gray-400">Jl. Kramat Raya No.98<br>Jakarta Pusat, 10450</li>
                        <li><a href="mailto:lsp@ubsi.ac.id" class="text-gray-400 hover:text-white transition-colors">lsp@ubsi.ac.id</a></li>
                        <li class="text-gray-400">(021) 2123-4567</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Copyright Bar -->
        <div class="border-t border-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                    <p class="text-sm text-gray-500">
                        &copy; 2026 UBSI Portal LSP. Hak Cipta Dilindungi.
                    </p>
                    <div class="flex items-center gap-6 text-sm">
                        <a href="#" class="text-gray-500 hover:text-white transition-colors">Kebijakan Privasi</a>
                        <a href="#" class="text-gray-500 hover:text-white transition-colors">Syarat & Ketentuan</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ==================== SCRIPTS ==================== -->
    <script>
        // ====== CAROUSEL ======
        const track = document.getElementById('carousel-track');
        const dots = document.querySelectorAll('.carousel-dot');
        const prevBtn = document.getElementById('prev-slide');
        const nextBtn = document.getElementById('next-slide');
        let currentSlide = 0;
        const totalSlides = 3;
        let autoPlayInterval;
        let isPaused = false;

        function goToSlide(index) {
            if (index < 0) index = totalSlides - 1;
            if (index >= totalSlides) index = 0;
            currentSlide = index;
            track.style.transform = `translateX(-${currentSlide * 100}%)`;
            
            dots.forEach((dot, i) => {
                if (i === currentSlide) {
                    dot.classList.remove('bg-white/50');
                    dot.classList.add('bg-white', 'w-8');
                } else {
                    dot.classList.remove('bg-white', 'w-8');
                    dot.classList.add('bg-white/50');
                }
            });
        }

        function nextSlide() {
            goToSlide(currentSlide + 1);
        }

        function prevSlide() {
            goToSlide(currentSlide - 1);
        }

        function startAutoPlay() {
            autoPlayInterval = setInterval(() => {
                if (!isPaused) nextSlide();
            }, 5000);
        }

        function stopAutoPlay() {
            clearInterval(autoPlayInterval);
        }

        // Event Listeners
        prevBtn.addEventListener('click', () => {
            prevSlide();
            stopAutoPlay();
            startAutoPlay();
        });

        nextBtn.addEventListener('click', () => {
            nextSlide();
            stopAutoPlay();
            startAutoPlay();
        });

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                goToSlide(parseInt(dot.dataset.slide));
                stopAutoPlay();
                startAutoPlay();
            });
        });

        // Pause on hover
        track.parentElement.addEventListener('mouseenter', () => isPaused = true);
        track.parentElement.addEventListener('mouseleave', () => isPaused = false);

        // Initialize
        goToSlide(0);
        startAutoPlay();

        // ====== MOBILE MENU ======
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu on link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // ====== SCROLL REVEAL ======
        const revealElements = document.querySelectorAll('.reveal');
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1 });

        revealElements.forEach(el => revealObserver.observe(el));

        // ====== NAVBAR SCROLL EFFECT ======
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                navbar.classList.add('shadow-md');
            } else {
                navbar.classList.remove('shadow-md');
            }
        });
    </script>
</body>
</html>
