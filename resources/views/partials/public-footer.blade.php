<!-- Footer -->
<footer class="text-ink-400" style="background-color: var(--color-footer);">
    <div class="container mx-auto px-4 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            
            <!-- Brand Column -->
            <div>
                <div class="flex items-center gap-2 mb-4">
                    @if($setting->logo_icon_path)
                        <img src="{{ asset('storage/' . $setting->logo_icon_path) }}" 
                             alt="{{ $setting->site_name }}" 
                             class="h-8 w-8 object-contain">
                    @else
                        <div class="w-8 h-8 flex items-center justify-center rounded" style="background-color: var(--color-accent);">
                            <svg viewBox="0 0 316 316" class="w-5 h-5 text-white" fill="currentColor">
                                <path d="M305.8 81.125L251.32 48.275c-1.35-.78-3.01-.78-4.36 0L194.51 78.475l-6.56 3.79v57.36l-43.71 25.17V52.575l-6.56-3.79L93.99 18.585c-1.35-.78-3.01-.78-4.36 0L37.18 48.785l-6.56 3.79v179.66l6.56 3.79 104.91 60.4c.23.13.48.21.72.29.11.04.22.11.35.13.37.1.74.15 1.12.15.38 0 .75-.05 1.12-.15.1-.03.19-.09.29-.12.26-.09.52-.18.76-.31l104.91-60.4 6.56-3.79v-57.36l6.56-3.79 50.26-28.94 6.56-3.79V85.755l-6.56-3.63zM144.2 227.205l-43.63-25.69 45.82-26.38 50.27-28.94 43.67 25.14-32.04 18.29-64.09 36.58z"/>
                            </svg>
                        </div>
                    @endif
                    <span class="text-lg font-bold text-white">{{ $setting->site_name }}</span>
                </div>
                <p class="text-sm mb-3">{{ $setting->site_tagline ?? 'Lembaga Sertifikasi Profesi' }}</p>
                <p class="text-sm text-ink-500">{{ $setting->footer_description ?? 'Lembaga Sertifikasi Profesi yang terpercaya untuk mengembangkan kompetensi profesional Anda.' }}</p>
            </div>
            
            <!-- Navigasi Column -->
            <div>
                <h4 class="text-white font-semibold mb-4">Navigasi</h4>
                <ul class="space-y-2">
                    <li><a href="/" class="text-sm hover:text-white transition-colors">Beranda</a></li>
                    <li><a href="/tentang-kami" class="text-sm hover:text-white transition-colors">Tentang Kami</a></li>
                    <li><a href="/skema" class="text-sm hover:text-white transition-colors">Skema Sertifikasi</a></li>
                    <li><a href="/berita" class="text-sm hover:text-white transition-colors">Berita</a></li>
                    <li><a href="/kontak" class="text-sm hover:text-white transition-colors">Kontak</a></li>
                </ul>
            </div>
            
            <!-- Layanan Column (Services - dynamic from settings) -->
            <div>
                <h4 class="text-white font-semibold mb-4">Layanan</h4>
                <ul class="space-y-2">
                    @if($setting->service_1_name)
                        <li>
                            <a href="{{ $setting->service_1_url ?? '#' }}" class="text-sm hover:text-white transition-colors">
                                {{ $setting->service_1_name }}
                            </a>
                        </li>
                    @endif
                    @if($setting->service_2_name)
                        <li>
                            <a href="{{ $setting->service_2_url ?? '#' }}" class="text-sm hover:text-white transition-colors">
                                {{ $setting->service_2_name }}
                            </a>
                        </li>
                    @endif
                    @if($setting->service_3_name)
                        <li>
                            <a href="{{ $setting->service_3_url ?? '#' }}" class="text-sm hover:text-white transition-colors">
                                {{ $setting->service_3_name }}
                            </a>
                        </li>
                    @endif
                    @if($setting->service_4_name)
                        <li>
                            <a href="{{ $setting->service_4_url ?? '#' }}" class="text-sm hover:text-white transition-colors">
                                {{ $setting->service_4_name }}
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
            
            <!-- Kontak Column (Contact info - synced with Kontak model) -->
            <div>
                <h4 class="text-white font-semibold mb-4">Kontak</h4>
                <ul class="space-y-3 text-sm">
                    @if(isset($kontak) && $kontak)
                        @if($kontak->kontak_alamat)
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color: var(--color-accent);">
                                    <path stroke-linecap="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                                </svg>
                                <span>{{ $kontak->kontak_alamat }}</span>
                            </li>
                        @endif
                        
                        @if($kontak->kontak_email_1)
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color: var(--color-accent);">
                                    <path stroke-linecap="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                                </svg>
                                <a href="mailto:{{ $kontak->kontak_email_1 }}" class="hover:text-white transition-colors">{{ $kontak->kontak_email_1 }}</a>
                            </li>
                        @endif
                        
                        @if($kontak->kontak_telepon_1)
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color: var(--color-accent);">
                                    <path stroke-linecap="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                                </svg>
                                <a href="tel:{{ $kontak->kontak_telepon_1 }}" class="hover:text-white transition-colors">{{ $kontak->kontak_telepon_1 }}</a>
                            </li>
                        @endif
                        
                        @if($kontak->kontak_telepon_2)
                            <li class="flex items-center gap-2">
                                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color: var(--color-accent);">
                                    <path stroke-linecap="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                                </svg>
                                <a href="tel:{{ $kontak->kontak_telepon_2 }}" class="hover:text-white transition-colors">{{ $kontak->kontak_telepon_2 }}</a>
                            </li>
                        @endif
                    @endif
                </ul>
                
                <!-- Social Media Links (from Kontak model) -->
                @if(isset($kontak) && $kontak)
                    <div class="flex items-center gap-3 mt-6">
                        @if($kontak->social_facebook)
                            <a href="{{ $kontak->social_facebook }}" target="_blank" class="w-8 h-8 bg-ink-800 rounded flex items-center justify-center transition-colors" onmouseover="this.style.backgroundColor='var(--color-accent)'" onmouseout="this.style.backgroundColor='#1e293b'">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                        @endif
                        @if($kontak->social_twitter)
                            <a href="{{ $kontak->social_twitter }}" target="_blank" class="w-8 h-8 bg-ink-800 rounded flex items-center justify-center transition-colors" onmouseover="this.style.backgroundColor='var(--color-accent)'" onmouseout="this.style.backgroundColor='#1e293b'">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </a>
                        @endif
                        @if($kontak->social_instagram)
                            <a href="{{ $kontak->social_instagram }}" target="_blank" class="w-8 h-8 bg-ink-800 rounded flex items-center justify-center transition-colors" onmouseover="this.style.backgroundColor='var(--color-accent)'" onmouseout="this.style.backgroundColor='#1e293b'">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                            </a>
                        @endif
                        @if($kontak->social_linkedin)
                            <a href="{{ $kontak->social_linkedin }}" target="_blank" class="w-8 h-8 bg-ink-800 rounded flex items-center justify-center transition-colors" onmouseover="this.style.backgroundColor='var(--color-accent)'" onmouseout="this.style.backgroundColor='#1e293b'">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
    
    <!-- Copyright Bar -->
    <div class="border-t border-ink-800">
        <div class="container mx-auto px-4 lg:px-8 py-6">
            <p class="text-center text-sm text-ink-500">
                © {{ date('Y') }} {{ $setting->site_name }}. Hak Cipta Dilindungi.
            </p>
        </div>
    </div>
</footer>
