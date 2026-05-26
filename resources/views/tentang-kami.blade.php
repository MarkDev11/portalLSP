@extends('layouts.public')

@section('title', 'Tentang Kami - ' . ($setting?->site_name ?? 'Portal LSP UBSI'))

@section('content')

    <!-- ===== HERO ===== -->
    <section style="background: linear-gradient(to right, #0f172a 0%, #0f172a 70%, var(--color-accent) 100%);">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 md:py-28">
            <div class="reveal">
                <p class="text-sm font-extrabold uppercase tracking-[0.2em] mb-4" style="color: var(--color-accent); -webkit-text-stroke: 0.3px white; text-stroke: 0.3px white;">Profil Lembaga</p>
                <h1 class="text-3xl md:text-5xl font-bold text-white heading-tight display mb-4">{{ $tentangKami?->hero_title ?? 'Tentang Kami' }}</h1>
                <div class="w-12 h-0.5 mb-6" style="background-color: var(--color-accent);"></div>
                <p class="text-ink-300 body-large max-w-2xl">{{ $tentangKami?->hero_subtitle ?? 'Lembaga Sertifikasi Profesi Universitas Bina Sarana Informatika.' }}</p>
            </div>
        </div>
    </section>

    <!-- ===== ABOUT US ===== -->
    <section class="py-24 md:py-32 bg-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="reveal">
                    <p class="text-xs font-bold uppercase tracking-[0.2em] mb-4" style="color: var(--color-accent);">About Us</p>
                    <h2 class="text-3xl md:text-[2.5rem] font-bold text-ink-900 heading-tight display mb-6">{{ $tentangKami?->about_title ?? 'Tentang LSP UBSI' }}</h2>
                    <div class="line-accent mb-8"></div>
                    <div class="space-y-4 text-ink-500 leading-relaxed">
                        {!! $tentangKami?->about_content ?? '<p>Lembaga Sertifikasi Profesi Universitas Bina Sarana Informatika adalah lembaga yang berfokus pada sertifikasi profesi di bidang teknologi informasi.</p>' !!}
                    </div>
                </div>
                
                <div class="reveal relative">
                    <div class="relative">
                        <!-- Background LSP text -->
                        <div class="absolute -top-20 -right-8 text-[160px] font-bold text-ink-100 leading-none select-none pointer-events-none hidden lg:block z-0">LSP</div>
                        
                        <!-- Main image block -->
                        <div class="relative border border-ink-200 bg-white aspect-[4/3] overflow-hidden z-10">
                            @if($landingPage?->tentang_image)
                                <img src="{{ asset('storage/' . $landingPage->tentang_image) }}" alt="{{ $landingPage?->tentang_title ?? 'Tentang LSP UBSI' }}" class="w-full h-full object-cover">
                            @endif
                            
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <div class="bg-white/20 backdrop-blur-md border border-white/30 px-4 py-3 flex items-center gap-3">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    <div>
                                        <div class="text-sm font-semibold text-white">{{ $tentangKami?->license_title ?? 'Tersertifikasi BNSP' }}</div>
                                        <div class="text-xs text-white/80">Nomor Lisensi: {{ $tentangKami?->license_number ?? '-' }}</div>
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

    <!-- ===== VISI & MISI ===== -->
    <section class="py-24 md:py-32 bg-ink-50 bg-grid">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <p class="text-xs font-bold uppercase tracking-[0.2em] mb-4" style="color: var(--color-accent);">Arah dan Tujuan</p>
                <h2 class="text-3xl md:text-[2.5rem] font-bold text-ink-900 heading-tight display">Visi dan Misi</h2>
                <div class="line-accent mx-auto mt-6"></div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-px bg-ink-200 border border-ink-200">
                <!-- Visi -->
                <div class="reveal bg-white p-10 md:p-12">
                    <div class="flex gap-6">
                        <div class="w-12 h-12 flex items-center justify-center flex-shrink-0 bg-gray-50">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color: var(--color-accent);"><path stroke-linecap="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-ink-900 mb-4">Visi</h3>
                            <p class="text-ink-500 leading-relaxed">
                                {!! $tentangKami?->visi_content ?? '<p>Menjadi lembaga sertifikasi profesi yang terpercaya dan unggul di Indonesia.</p>' !!}
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Misi -->
                <div class="reveal bg-white p-10 md:p-12 delay-100">
                    <div class="flex gap-6">
                        <div class="w-12 h-12 flex items-center justify-center flex-shrink-0 bg-gray-50">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color: var(--color-accent);"><path stroke-linecap="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-ink-900 mb-4">Misi</h3>
                            <ul class="space-y-3 text-ink-500 leading-relaxed">
                                @forelse($tentangKami?->misi_items ?? [] as $misi)
                                    <li class="flex gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full mt-2 flex-shrink-0" style="background-color: var(--color-accent); opacity: 0.6;"></span>
                                        <span>{{ $misi }}</span>
                                    </li>
                                @empty
                                    <li class="flex gap-3">
                                        <span class="w-1.5 h-1.5 rounded-full mt-2 flex-shrink-0" style="background-color: var(--color-accent); opacity: 0.6;"></span>
                                        <span>Menyelenggarakan sertifikasi profesi yang berkualitas dan terpercaya.</span>
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    </div>
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
                <p class="text-xs font-bold uppercase tracking-[0.2em] mb-4" style="color: var(--color-accent);">Strategi</p>
                <h2 class="text-3xl md:text-[2.5rem] font-bold text-ink-900 heading-tight display mb-6">{{ $tentangKami?->tujuan_title ?? 'Tujuan LSP UBSI' }}</h2>
                <div class="line-accent mb-8"></div>
                <p class="text-ink-500 leading-relaxed">
                    {{ $tentangKami?->tujuan_subtitle ?? 'Mendukung pengembangan kompetensi profesional di Indonesia.' }}
                </p>
            </div>
                
                <!-- Right: Tujuan list -->
                <div class="lg:col-span-8 space-y-0">
                    @forelse($tentangKami?->tujuan_items ?? [] as $index => $tujuan)
                        <div class="reveal flex gap-6 py-8 border-b border-ink-100 group hover:bg-ink-50 transition-colors px-4 -mx-4 {{ $loop->last ? '' : '' }}">
                            <div class="w-12 h-12 flex items-center justify-center flex-shrink-0 transition-colors bg-gray-50" onmouseover="this.style.backgroundColor='#e5e7eb'" onmouseout="this.style.backgroundColor='#f9fafb'">
                                <span class="text-lg font-bold" style="color: var(--color-accent);">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-ink-900 mb-2">{{ $tujuan['title'] ?? '' }}</h3>
                                <p class="text-ink-500 leading-relaxed">{{ $tujuan['description'] ?? '' }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="reveal py-8 text-ink-500">Belum ada tujuan yang ditetapkan.</div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="py-20 md:py-28" style="background: linear-gradient(to right, var(--color-accent) 0%, #0f172a 50%, var(--color-accent) 100%);">
        <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-white heading-tight display mb-6">{{ $tentangKami?->cta_title ?? 'Siap Mengembangkan Kompetensi Anda?' }}</h2>
            <p class="text-ink-400 body-large mb-10 max-w-2xl mx-auto">{{ $tentangKami?->cta_description ?? 'Hubungi kami untuk informasi lebih lanjut mengenai sertifikasi profesi.' }}</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="/skema" class="w-full sm:w-auto px-8 py-3.5 text-white text-sm font-semibold transition-colors" style="background-color: var(--color-accent);" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">Lihat Skema Sertifikasi</a>
                <a href="/kontak" class="w-full sm:w-auto px-8 py-3.5 border border-ink-600 text-ink-300 text-sm font-semibold hover:border-ink-500 hover:text-white transition-colors">Hubungi Kami</a>
            </div>
        </div>
    </section>

@endsection
