@extends('layouts.public')

@section('title', ($setting?->site_name ?? 'Portal LSP UBSI') . ' - Lembaga Sertifikasi Profesi')

@section('content')

@php
    $landingPage = \App\Models\LandingPage::first();
    $carouselSlides = \App\Models\CarouselSlide::forPage('welcome')->active()->ordered()->get();
@endphp

    <!-- ===== CAROUSEL (Clean, no text overlay) ===== -->
    <section id="beranda">
        <div class="relative h-[520px] md:h-[600px] overflow-hidden bg-ink-900">
            <div id="track" class="carousel h-full">
                @forelse($carouselSlides as $slide)
                    <div class="w-full flex-shrink-0 relative" style="background: linear-gradient(135deg, {{ $slide->gradient_from ?? '#1e3a8a' }}, {{ $slide->gradient_to ?? '#3b82f6' }}); @if($slide->image_path && $slide->image_path !== 'placeholder.jpg') background-image: url('{{ asset('storage/' . $slide->image_path) }}'); background-size: cover; background-position: center; @endif">
                        <div class="geo-ring w-[600px] h-[600px] -top-[200px] -right-[200px]"></div>
                        <div class="geo-ring w-[400px] h-[400px] top-[100px] -left-[100px] opacity-50"></div>
                        <div class="geo-line w-[200px] h-px top-1/2 right-[10%] rotate-[-30deg]"></div>
                    </div>
                @empty
                    <div class="w-full flex-shrink-0 relative" style="background: linear-gradient(135deg, #1e3a8a, #3b82f6);">
                        <div class="geo-ring w-[600px] h-[600px] -top-[200px] -right-[200px]"></div>
                        <div class="geo-ring w-[400px] h-[400px] top-[100px] -left-[100px] opacity-50"></div>
                        <div class="geo-line w-[200px] h-px top-1/2 right-[10%] rotate-[-30deg]"></div>
                    </div>
                @endforelse
            </div>
            
            <!-- Controls -->
            <button id="prevBtn" class="absolute left-5 md:left-10 top-1/2 -translate-y-1/2 w-11 h-11 flex items-center justify-center text-white/80 hover:text-white border border-white/20 hover:border-white/40 transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button id="nextBtn" class="absolute right-5 md:right-10 top-1/2 -translate-y-1/2 w-11 h-11 flex items-center justify-center text-white/80 hover:text-white border border-white/20 hover:border-white/40 transition-all">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M9 5l7 7-7 7"/></svg>
            </button>
            
            <div class="absolute bottom-7 left-1/2 -translate-x-1/2 flex gap-2">
                @foreach($carouselSlides as $index => $slide)
                    <button class="dot w-2 h-2 bg-white/40 rounded-full transition-all" data-i="{{ $index }}"></button>
                @endforeach
            </div>
        </div>
        
        <!-- Hero text BELOW carousel -->
        <div class="max-w-6xl mx-auto px-6 lg:px-8 -mt-20 relative z-10">
            <div class="bg-white border border-ink-200 p-8 md:p-12 reveal">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
                    <div class="max-w-xl">
                        <div class="hero-content">
                            {!! $landingPage?->hero_content ?? '<p class="text-accent-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">Lembaga Sertifikasi Profesi</p><h1 class="text-3xl md:text-5xl font-bold text-ink-900 heading-tight display mb-4">Portal <span class="text-accent-600">LSP UBSI</span></h1><p class="body-large text-ink-500">Wujudkan kompetensi profesional Anda melalui sertifikasi berstandar nasional. Terlisensi BNSP dan diakui industri.</p>' !!}
                        </div>
                    </div>
                    <div class="flex gap-3 flex-shrink-0">
                        <a href="/skema" class="px-6 py-3 text-white text-sm font-semibold transition-colors" style="background-color: var(--color-accent);" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">Jelajahi Skema</a>
                        <a href="/tentang-kami" class="px-6 py-3 border text-sm font-semibold transition-colors" style="border-color: var(--color-accent); color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">Tentang Kami</a>
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
                    <p class="text-xs font-bold uppercase tracking-[0.2em] mb-4" style="color: var(--color-accent);">{{ $landingPage?->tentang_tagline ?? 'Tentang Kami' }}</p>
                    <h2 class="text-3xl md:text-[2.5rem] font-bold text-ink-900 heading-tight display mb-6">{!! preg_replace('/<span class="text-accent-600">/', '<span style="color: var(--color-accent);">', $landingPage?->tentang_title ?? 'Membangun Kompetensi <span style="color: var(--color-accent);">Profesional Indonesia</span>') !!}</h2>
                    <div class="line-accent mb-8"></div>
                    <div class="space-y-4 text-ink-500 leading-relaxed prose prose-ink max-w-none">
                        {!! $landingPage?->tentang_content ?? '<p>LSP UBSI adalah lembaga sertifikasi profesi yang berkomitmen menghasilkan tenaga kerja Indonesia yang kompeten dan berdaya saing tinggi di era digital.</p><p>Kami menyediakan layanan sertifikasi kompetensi berbasis Standar Kompetensi Kerja Nasional Indonesia (SKKNI) yang diakui secara nasional.</p>' !!}
                    </div>
                    
                    @if($landingPage?->show_stats ?? true)
                    <div class="grid grid-cols-3 gap-8 mt-10 pt-10 border-t border-ink-100">
                        <div>
                            <div class="text-2xl md:text-3xl font-bold text-ink-900 stat-num">{{ $landingPage?->stat_skema ?? '15+' }}</div>
                            <div class="text-[13px] text-ink-400 mt-1">Skema Sertifikasi</div>
                        </div>
                        <div>
                            <div class="text-2xl md:text-3xl font-bold text-ink-900 stat-num">{{ $landingPage?->stat_peserta ?? '2.500+' }}</div>
                            <div class="text-[13px] text-ink-400 mt-1">Peserta Tersertifikasi</div>
                        </div>
                        <div>
                            <div class="text-2xl md:text-3xl font-bold text-ink-900 stat-num">{{ $landingPage?->stat_kelulusan ?? '98%' }}</div>
                            <div class="text-[13px] text-ink-400 mt-1">Tingkat Kelulusan</div>
                        </div>
                    </div>
                    @endif
                    
                    <a href="#kontak" class="inline-flex items-center gap-2 mt-10 text-sm font-semibold transition-colors group" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                        Hubungi Kami
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
                
                <!-- Right: Visual composition -->
                <div class="reveal relative">
                    <div class="relative">
                        <!-- Background large number -->
                        <div class="absolute -top-20 -right-8 text-[160px] font-bold text-ink-100 leading-none select-none pointer-events-none hidden lg:block z-0">LSP</div>
                        
                        <!-- Main image block -->
                        <div class="relative border border-ink-200 bg-white aspect-[4/3] overflow-hidden z-10">
                            @if($landingPage?->tentang_image ?? false)
                                <img src="{{ asset('storage/' . $landingPage->tentang_image) }}" alt="{{ $landingPage?->tentang_title ?? 'Tentang Kami' }}" class="w-full h-full object-cover">
                            @endif
                            
                            <!-- Status badge -->
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <div class="bg-white/20 backdrop-blur-md border border-white/30 px-4 py-3 flex items-center gap-3">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    <div>
                                        <div class="text-sm font-semibold text-white">Sertifikasi Aktif</div>
                                        <div class="text-xs text-white/80">Lisensi BNSP Diterima</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating accent -->
                        <div class="absolute -bottom-4 -right-4 w-24 h-24 -z-10 hidden md:block" style="background-color: var(--color-accent);"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== DAFTAR SKEMA ===== -->
    <section id="skema" class="py-24 md:py-32 bg-ink-50 bg-grid">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <p class="text-xs font-bold uppercase tracking-[0.2em] mb-4" style="color: var(--color-accent);">{{ $landingPage?->skema_tagline ?? 'Layanan Kami' }}</p>
                <h2 class="text-3xl md:text-[2.5rem] font-bold text-ink-900 heading-tight display">{{ $landingPage?->skema_title ?? 'Daftar Skema Sertifikasi' }}</h2>
                <div class="line-accent mx-auto mt-6"></div>
                <p class="text-ink-500 mt-6 max-w-lg mx-auto leading-relaxed">{!! $landingPage?->skema_description ?? 'Pilih skema sertifikasi yang sesuai dengan bidang kompetensi Anda untuk meningkatkan daya saing di dunia kerja.' !!}</p>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-px bg-ink-200 border border-ink-200">
                <!-- Skema 01 -->
                <div class="reveal bg-white p-8 transition-colors group" onmouseover="this.style.backgroundColor='#f9fafb'" onmouseout="this.style.backgroundColor='white'">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold transition-colors tracking-wider block text-center" style="color: var(--color-accent);">SB-001/1/LSP-UBSI/VIII/2023</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">Junior Web Developer</h3>
                </div>
                
                <!-- Skema 02 -->
                <div class="reveal bg-white p-8 transition-colors group delay-100" onmouseover="this.style.backgroundColor='#f9fafb'" onmouseout="this.style.backgroundColor='white'">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold transition-colors tracking-wider block text-center" style="color: var(--color-accent);">SB-015/1/LSP-UBSI/IX/2023</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">Digital Marketing</h3>
                </div>
                
                <!-- Skema 03 -->
                <div class="reveal bg-white p-8 transition-colors group delay-200" onmouseover="this.style.backgroundColor='#f9fafb'" onmouseout="this.style.backgroundColor='white'">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold transition-colors tracking-wider block text-center" style="color: var(--color-accent);">SB-022/1/LSP-UBSI/X/2023</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">Administrasi Sistem</h3>
                </div>
                
                <!-- Skema 04 -->
                <div class="reveal bg-white p-8 transition-colors group delay-300" onmouseover="this.style.backgroundColor='#f9fafb'" onmouseout="this.style.backgroundColor='white'">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold transition-colors tracking-wider block text-center" style="color: var(--color-accent);">SB-028/1/LSP-UBSI/XI/2023</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">Data Analyst</h3>
                </div>
                
                <!-- Skema 05 -->
                <div class="reveal bg-white p-8 transition-colors group" onmouseover="this.style.backgroundColor='#f9fafb'" onmouseout="this.style.backgroundColor='white'">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold transition-colors tracking-wider block text-center" style="color: var(--color-accent);">SB-031/1/LSP-UBSI/XI/2023</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">Mobile Developer</h3>
                </div>
                
                <!-- Skema 06 -->
                <div class="reveal bg-white p-8 transition-colors group delay-100" onmouseover="this.style.backgroundColor='#f9fafb'" onmouseout="this.style.backgroundColor='white'">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold transition-colors tracking-wider block text-center" style="color: var(--color-accent);">SB-036/1/LSP-UBSI/XII/2023</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">Photography</h3>
                </div>
                
                <!-- Skema 07 -->
                <div class="reveal bg-white p-8 transition-colors group delay-200" onmouseover="this.style.backgroundColor='#f9fafb'" onmouseout="this.style.backgroundColor='white'">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold transition-colors tracking-wider block text-center" style="color: var(--color-accent);">SB-042/1/LSP-UBSI/I/2024</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">UI/UX Design</h3>
                </div>
                
                <!-- Skema 08 -->
                <div class="reveal bg-white p-8 transition-colors group delay-300" onmouseover="this.style.backgroundColor='#f9fafb'" onmouseout="this.style.backgroundColor='white'">
                    <div class="flex justify-between items-start mb-8">
                        <span class="text-[13px] font-bold transition-colors tracking-wider block text-center" style="color: var(--color-accent);">SB-048/1/LSP-UBSI/II/2024</span>
                    </div>
                    <h3 class="text-base font-bold text-ink-900 leading-snug">Technical Writer</h3>
                </div>
            </div>
            
            <!-- Tombol Selengkapnya -->
            <div class="text-center mt-12">
                <a href="/skema" class="inline-flex items-center gap-2 px-8 py-3 border text-sm font-semibold transition-colors group" style="border-color: var(--color-accent); color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
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
                <p class="text-xs font-bold uppercase tracking-[0.2em] mb-4" style="color: var(--color-accent);">{{ $landingPage?->berita_tagline ?? 'Update Terbaru' }}</p>
                <h2 class="text-3xl md:text-[2.5rem] font-bold text-ink-900 heading-tight display">{{ $landingPage?->berita_title ?? 'Berita & Informasi' }}</h2>
                <div class="line-accent mt-6"></div>
            </div>
            
            @php
            $latestNews = \App\Models\News::whereNotNull('published_at')
                ->where('published_at', '<=', now())
                ->latest('published_at')
                ->take(4)
                ->get();
            $featuredNews = $latestNews->first();
            $sideNews = $latestNews->skip(1)->take(3);
            @endphp
            
            <div class="grid lg:grid-cols-12 gap-8">
                <!-- LEFT: Main featured (7 cols) -->
                <div class="lg:col-span-7 reveal">
                    @if($featuredNews)
                    <a href="{{ route('berita.detail', $featuredNews->slug) }}" class="group cursor-pointer block">
                        @if($featuredNews->image)
                        <div class="img-mask aspect-[16/10] mb-6 overflow-hidden border border-ink-100 bg-ink-50">
                            <img src="{{ asset('storage/' . $featuredNews->image) }}" alt="{{ $featuredNews->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        @else
                        <div class="img-mask aspect-[16/10] mb-6 flex items-center justify-center border border-ink-100 bg-ink-50">
                            <svg class="w-20 h-20 opacity-20" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1" style="color: var(--color-accent);">
                                <rect x="8" y="10" width="32" height="24" rx="1"/>
                                <line x1="8" y1="18" x2="40" y2="18" stroke-width="1"/>
                                <line x1="14" y1="24" x2="26" y2="24" stroke-width="1"/>
                                <line x1="14" y1="28" x2="22" y2="28" stroke-width="1"/>
                            </svg>
                        </div>
                        @endif
                        <div class="flex items-center gap-4 mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider px-2.5 py-1 bg-ink-50" style="color: var(--color-accent);">Berita</span>
                            <span class="text-xs text-ink-400">{{ $featuredNews->published_at->format('d F Y') }}</span>
                        </div>
                        <h3 class="text-xl md:text-2xl font-bold text-ink-900 heading-tight mb-3 transition-colors leading-snug" onmouseover="this.style.color='var(--color-accent)'" onmouseout="this.style.color='#0f172a'">
                            {{ $featuredNews->title }}
                        </h3>
                        <p class="text-ink-500 leading-relaxed text-[15px] mb-4">
                            {{ Str::limit(strip_tags($featuredNews->content), 200) }}
                        </p>
                        <span class="text-sm font-semibold group-hover:underline underline-offset-4 decoration-1" style="color: var(--color-accent);">Baca Selengkapnya</span>
                    </a>
                    @else
                    <div class="text-center py-12">
                        <p class="text-ink-400">Belum ada berita yang dipublikasikan.</p>
                    </div>
                    @endif
                </div>
                
                <!-- RIGHT: Side list (5 cols) -->
                <div class="lg:col-span-5 space-y-6">
                    @forelse($sideNews as $index => $item)
                    <a href="{{ route('berita.detail', $item->slug) }}" class="reveal flex gap-4 cursor-pointer group delay-{{ ($index + 1) * 100 }} block">
                        @if($item->image)
                        <div class="w-24 h-24 flex-shrink-0 border border-ink-100 overflow-hidden bg-ink-50">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        @else
                        <div class="w-24 h-24 flex-shrink-0 border border-ink-100 flex items-center justify-center bg-ink-50">
                            <svg class="w-8 h-8 opacity-20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" style="color: var(--color-accent);">
                                <rect x="3" y="4" width="18" height="16" rx="1"/>
                                <line x1="3" y1="9" x2="21" y2="9"/>
                            </svg>
                        </div>
                        @endif
                        <div class="min-w-0">
                            <span class="text-[11px] text-ink-400">{{ $item->published_at->format('d F Y') }}</span>
                            <h4 class="text-sm font-bold text-ink-900 mt-1 mb-1 transition-colors clamp-2 leading-snug" onmouseover="this.style.color='var(--color-accent)'" onmouseout="this.style.color='#0f172a'">
                                {{ $item->title }}
                            </h4>
                            <p class="text-xs text-ink-400 clamp-2 leading-relaxed">{{ Str::limit(strip_tags($item->content), 80) }}</p>
                        </div>
                    </a>
                    
                    @if(!$loop->last)
                    <div class="line-gray"></div>
                    @endif
                    @empty
                    @endforelse
                    
                    <!-- Button below cards -->
                    <div class="mt-8 reveal">
                        <a href="{{ route('berita') }}" class="block text-center px-6 py-3 text-white text-sm font-semibold transition-colors" style="background-color: var(--color-accent);" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
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
                <p class="text-xs font-bold uppercase tracking-[0.2em] mb-4" style="color: var(--color-accent);">{{ $landingPage?->kontak_tagline ?? 'Hubungi Kami' }}</p>
                <h2 class="text-3xl md:text-[2.5rem] font-bold text-ink-900 heading-tight display">{{ $landingPage?->kontak_title ?? 'Kontak & Lokasi' }}</h2>
                <div class="line-accent mx-auto mt-6"></div>
            </div>
            
            <div class="grid lg:grid-cols-12 gap-10">
                <!-- Left: Info (7 cols) -->
                <div class="lg:col-span-7 reveal">
                    <div class="bg-white border border-ink-200 p-8 md:p-10">
                        <h3 class="text-lg font-bold text-ink-900 mb-8">Informasi Kontak</h3>
                        
                        <div class="space-y-6">
                            <div class="flex gap-4">
                                <div class="w-10 h-10 flex items-center justify-center flex-shrink-0 mt-0.5 bg-gray-50">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color: var(--color-accent);"><path stroke-linecap="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-ink-900 mb-1">Alamat</h4>
                                    <p class="text-sm text-ink-500 leading-relaxed">{{ $landingPage?->kontak_alamat ?? 'Jl. Kramat Raya No.98, RT.2/RW.9, Kwitang, Kec. Senen, Kota Jakarta Pusat, DKI Jakarta 10450' }}</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="w-10 h-10 flex items-center justify-center flex-shrink-0 bg-gray-50">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color: var(--color-accent);"><path stroke-linecap="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-ink-900 mb-1">Email</h4>
                                    <p class="text-sm text-ink-500">{{ $landingPage?->kontak_email_1 ?? 'lsp@ubsi.ac.id' }}</p>
                                    <p class="text-sm text-ink-500">{{ $landingPage?->kontak_email_2 ?? 'info.lsp@ubsi.ac.id' }}</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="w-10 h-10 flex items-center justify-center flex-shrink-0 bg-gray-50">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color: var(--color-accent);"><path stroke-linecap="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-ink-900 mb-1">Telepon</h4>
                                    <p class="text-sm text-ink-500">{{ $landingPage?->kontak_telepon_1 ?? '(021) 2123-4567' }}</p>
                                    <p class="text-sm text-ink-500">{{ $landingPage?->kontak_telepon_2 ?? '(021) 2123-4568' }}</p>
                                </div>
                            </div>
                            
                            <div class="flex gap-4">
                                <div class="w-10 h-10 flex items-center justify-center flex-shrink-0 bg-gray-50">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color: var(--color-accent);"><path stroke-linecap="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <div>
                                    <h4 class="text-sm font-semibold text-ink-900 mb-1">Jam Operasional</h4>
                                    <p class="text-sm text-ink-500">{{ $landingPage?->kontak_jam_senin_jumat ?? 'Senin - Jumat: 08.00 - 16.00 WIB' }}</p>
                                    <p class="text-sm text-ink-500">{{ $landingPage?->kontak_jam_sabtu ?? 'Sabtu: 08.00 - 12.00 WIB' }}</p>
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
                            <button type="submit" class="w-full py-3.5 text-white text-sm font-semibold transition-colors" style="background-color: var(--color-accent);" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('track');
    const slides = track?.querySelectorAll('.w-full.flex-shrink-0');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dots = document.querySelectorAll('.dot');
    
    if (!track || !slides || slides.length === 0) return;
    
    let currentIndex = 0;
    let autoplayInterval;
    const autoplayDelay = 5000; // 5 seconds
    
    // Set initial state
    track.style.display = 'flex';
    track.style.transition = 'transform 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
    updateCarousel();
    
    // Update carousel position and active states
    function updateCarousel() {
        const offset = -currentIndex * 100;
        track.style.transform = `translateX(${offset}%)`;
        
        // Update dots
        dots.forEach((dot, i) => {
            if (i === currentIndex) {
                dot.classList.remove('bg-white/40');
                dot.classList.add('bg-white', 'w-6');
            } else {
                dot.classList.remove('bg-white', 'w-6');
                dot.classList.add('bg-white/40');
            }
        });
    }
    
    // Navigate to specific slide
    function goToSlide(index) {
        currentIndex = index;
        if (currentIndex < 0) currentIndex = slides.length - 1;
        if (currentIndex >= slides.length) currentIndex = 0;
        updateCarousel();
    }
    
    // Next slide
    function nextSlide() {
        goToSlide(currentIndex + 1);
    }
    
    // Previous slide
    function prevSlide() {
        goToSlide(currentIndex - 1);
    }
    
    // Start autoplay
    function startAutoplay() {
        stopAutoplay();
        autoplayInterval = setInterval(nextSlide, autoplayDelay);
    }
    
    // Stop autoplay
    function stopAutoplay() {
        if (autoplayInterval) {
            clearInterval(autoplayInterval);
            autoplayInterval = null;
        }
    }
    
    // Event listeners for buttons
    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            prevSlide();
            stopAutoplay();
            startAutoplay(); // Restart autoplay after manual navigation
        });
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            nextSlide();
            stopAutoplay();
            startAutoplay(); // Restart autoplay after manual navigation
        });
    }
    
    // Event listeners for dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
            stopAutoplay();
            startAutoplay(); // Restart autoplay after manual navigation
        });
    });
    
    // Pause autoplay on hover
    track.addEventListener('mouseenter', stopAutoplay);
    track.addEventListener('mouseleave', startAutoplay);
    
    // Start autoplay
    startAutoplay();
});
</script>
@endpush