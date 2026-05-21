@extends('layouts.public')

@section('title', 'Kontak Kami - ' . ($setting->site_name ?? 'Portal LSP UBSI'))

@section('content')

    <!-- ARTICLE HEADER -->
    <section style="background: linear-gradient(to right, #0f172a 0%, #0f172a 70%, var(--color-accent) 100%);">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 md:py-28">
            <div class="reveal">
                <p class="text-sm font-extrabold uppercase tracking-[0.2em] mb-4" style="color: var(--color-accent); -webkit-text-stroke: 0.3px white; text-stroke: 0.3px white;">{{ $kontak->hero_eyebrow ?? 'Hubungi Kami' }}</p>
                <h1 class="text-3xl md:text-5xl font-bold text-white heading-tight display mb-4">{{ $kontak->hero_title ?? 'Kontak' }}</h1>
                <div class="w-12 h-0.5 mb-6" style="background-color: var(--color-accent);"></div>
                <p class="text-ink-300 text-lg leading-relaxed max-w-2xl">{{ $kontak->hero_description ?? 'Kami siap membantu Anda. Hubungi kami untuk informasi lebih lanjut mengenai sertifikasi profesi dan layanan LSP UBSI.' }}</p>
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
                            <div class="w-12 h-12 bg-gray-50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color: var(--color-accent);">
                                    <path stroke-linecap="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-ink-900 mb-1">Alamat</h3>
                                <p class="text-ink-600 leading-relaxed">{!! nl2br(e($landingPage->kontak_alamat ?? "Jl. Kramat Raya No.98\nJakarta Pusat 10450\nDKI Jakarta, Indonesia")) !!}</p>
                            </div>
                        </div>
                        
                        <!-- Phone -->
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-gray-50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color: var(--color-accent);">
                                    <path stroke-linecap="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-ink-900 mb-1">Telepon</h3>
                                <p class="text-ink-600">
                                    {{ $landingPage->kontak_telepon_1 ?? '(021) 1234-5678' }}<br>
                                    {{ $landingPage->kontak_telepon_2 ?? '0812-3456-7890' }} (WhatsApp)
                                </p>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-gray-50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color: var(--color-accent);">
                                    <path stroke-linecap="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-ink-900 mb-1">Email</h3>
                                <p class="text-ink-600">
                                    {{ $landingPage->kontak_email_1 ?? 'lsp@ubsi.ac.id' }}<br>
                                    {{ $landingPage->kontak_email_2 ?? 'info@lsp-ubsi.ac.id' }}
                                </p>
                            </div>
                        </div>
                        
                        <!-- Office Hours -->
                        <div class="flex gap-4">
                            <div class="w-12 h-12 bg-gray-50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color: var(--color-accent);">
                                    <path stroke-linecap="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-ink-900 mb-1">Jam Operasional</h3>
                                <p class="text-ink-600">
                                    Senin - Jumat: {{ $landingPage->kontak_jam_senin_jumat ?? '08:00 - 17:00 WIB' }}<br>
                                    Sabtu: {{ $landingPage->kontak_jam_sabtu ?? '08:00 - 13:00 WIB' }}<br>
                                    {{ $kontak->office_hours_sunday ?? 'Minggu & Libur: Tutup' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="mt-10 pt-10 border-t border-ink-200">
                        <h3 class="font-bold text-ink-900 mb-4">Ikuti Kami</h3>
                        <div class="flex gap-3">
                            @if($kontak->social_facebook)
                            <a href="{{ $kontak->social_facebook }}" target="_blank" class="w-10 h-10 border border-ink-200 flex items-center justify-center text-ink-600 transition-colors" onmouseover="this.style.borderColor='var(--color-accent)'; this.style.color='var(--color-accent)';" onmouseout="this.style.borderColor=''; this.style.color='';">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                            @endif
                            @if($kontak->social_instagram)
                            <a href="{{ $kontak->social_instagram }}" target="_blank" class="w-10 h-10 border border-ink-200 flex items-center justify-center text-ink-600 transition-colors" onmouseover="this.style.borderColor='var(--color-accent)'; this.style.color='var(--color-accent)';" onmouseout="this.style.borderColor=''; this.style.color='';">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                            @endif
                            @if($kontak->social_twitter)
                            <a href="{{ $kontak->social_twitter }}" target="_blank" class="w-10 h-10 border border-ink-200 flex items-center justify-center text-ink-600 transition-colors" onmouseover="this.style.borderColor='var(--color-accent)'; this.style.color='var(--color-accent)';" onmouseout="this.style.borderColor=''; this.style.color='';">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </a>
                            @endif
                            @if($kontak->social_linkedin)
                            <a href="{{ $kontak->social_linkedin }}" target="_blank" class="w-10 h-10 border border-ink-200 flex items-center justify-center text-ink-600 transition-colors" onmouseover="this.style.borderColor='var(--color-accent)'; this.style.color='var(--color-accent)';" onmouseout="this.style.borderColor=''; this.style.color='';">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                
                <!-- RIGHT: Contact Form -->
                <div class="reveal delay-100">
                    <h2 class="text-2xl md:text-3xl font-bold text-ink-900 heading-tight mb-6">Kirim Pesan</h2>
                    <div class="line-accent mb-8"></div>
                    
                    @if(session('success'))
                        <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($kontak->form_enabled ?? true)
                    <form action="{{ route('kontak.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
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
                            <button type="submit" class="w-full px-6 py-3 text-white font-semibold transition-colors" style="background-color: var(--color-accent);" onmouseover="this.style.opacity='0.9';" onmouseout="this.style.opacity='1';">
                                Kirim Pesan
                            </button>
                        </div>
                        
                    </form>
                    @else
                    <div class="text-center py-12 bg-gray-50 rounded">
                        <p class="text-gray-600">Form kontak saat ini tidak tersedia.</p>
                    </div>
                    @endif
                </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- ===== MAP SECTION ===== -->
    <section class="py-20 md:py-28 bg-ink-50">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="reveal text-center mb-12">
                <h2 class="text-2xl md:text-3xl font-bold text-ink-900 heading-tight mb-4">{{ $kontak->map_title ?? 'Lokasi Kami' }}</h2>
                <div class="line-accent mx-auto mb-6"></div>
                <p class="text-ink-600 max-w-2xl mx-auto">{{ $kontak->map_description ?? 'Kunjungi kantor kami untuk konsultasi langsung mengenai sertifikasi profesi dan layanan LSP UBSI.' }}</p>
            </div>
            
            <!-- Map Embed -->
            @if($kontak->map_embed_url)
            <div class="reveal aspect-[16/9]">
                {!! $kontak->map_embed_url !!}
            </div>
            @else
            <div class="reveal aspect-[16/9] bg-ink-200 border border-ink-300 flex items-center justify-center">
                <div class="text-center">
                    <svg class="w-16 h-16 text-ink-400 mx-auto mb-4" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                        <path stroke-linecap="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z"/>
                    </svg>
                    <p class="text-sm text-ink-500">Google Maps Embed</p>
                    <p class="text-xs text-ink-400 mt-1">{{ $landingPage->kontak_alamat ?? 'Jl. Kramat Raya No.98, Jakarta Pusat' }}</p>
                </div>
            </div>
            @endif
        </div>
    </section>

@endsection
