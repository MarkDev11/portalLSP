@extends('layouts.public')

@section('title', 'Berita - ' . ($setting?->site_name ?? 'Portal LSP UBSI'))

@section('content')

    <!-- HERO -->
    <section style="background: linear-gradient(to right, #0f172a 0%, #0f172a 70%, var(--color-accent) 100%);">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 md:py-28">
            <div class="reveal">
                <p class="text-sm font-extrabold uppercase tracking-[0.2em] mb-4" style="color: var(--color-accent); -webkit-text-stroke: 0.3px white; text-stroke: 0.3px white;">Informasi Terkini</p>
                <h1 class="text-3xl md:text-5xl font-bold text-white heading-tight display mb-4">Berita & Artikel</h1>
                <div class="w-12 h-0.5 mb-6" style="background-color: var(--color-accent);"></div>
                <p class="text-ink-300 text-lg leading-relaxed max-w-2xl">Berita terkini seputar sertifikasi profesi, kegiatan LSP UBSI, dan perkembangan dunia kerja.</p>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-20 md:py-28 bg-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12">
                
                <!-- LEFT: News Grid -->
                <div class="lg:col-span-9">
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-px bg-ink-200 border border-ink-200">
                        
                        @forelse($news as $item)
                        <article class="reveal bg-white p-6 transition-colors group" onmouseover="this.style.backgroundColor='rgba(59, 130, 246, 0.05)'" onmouseout="this.style.backgroundColor='white'">
                            @if($item->image)
                            <div class="img-mask mb-4 aspect-[4/3] bg-ink-100 overflow-hidden">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover">
                            </div>
                            @else
                            <div class="img-mask mb-4 aspect-[4/3] flex items-center justify-center" style="background-color: rgba(59, 130, 246, 0.1);">
                                <svg class="w-16 h-16 opacity-30" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24" style="color: var(--color-accent);">
                                    <path stroke-linecap="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/>
                                </svg>
                            </div>
                            @endif
                            <div class="text-[11px] font-semibold uppercase tracking-wider mb-2" style="color: var(--color-accent);">
                                Berita • {{ $item->published_at ? $item->published_at->format('d M Y') : 'Draft' }}
                            </div>
                            <h3 class="text-base font-bold text-ink-900 leading-snug mb-3 clamp-2">
                                <a href="{{ route('berita.detail', $item->slug) }}" class="transition-colors" onmouseover="this.style.color='var(--color-accent)'" onmouseout="this.style.color='#0f172a'">
                                    {{ $item->title }}
                                </a>
                            </h3>
                            <p class="text-sm text-ink-500 leading-relaxed clamp-3 mb-4">
                                {{ Str::limit(strip_tags($item->content), 120) }}
                            </p>
                            <a href="{{ route('berita.detail', $item->slug) }}" class="text-[13px] font-semibold transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                Baca Selengkapnya →
                            </a>
                        </article>
                        @empty
                        <div class="col-span-full p-12 text-center">
                            <svg class="w-16 h-16 text-ink-300 mx-auto mb-4" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                                <path stroke-linecap="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/>
                            </svg>
                            <p class="text-ink-500 text-lg">Belum ada berita yang dipublikasikan.</p>
                        </div>
                        @endforelse
                        
                    </div>
                    
                    <!-- Pagination -->
                    @if($news->hasPages())
                    <div class="mt-12">
                        {{ $news->links() }}
                    </div>
                    @endif
                </div>
                
                <!-- RIGHT: Sidebar -->
                <aside class="lg:col-span-3">
                    
                    <!-- Search Box -->
                    <div class="reveal border border-ink-200 p-6 mb-6">
                        <h3 class="text-sm font-bold text-ink-900 uppercase tracking-wider mb-4">Cari Berita</h3>
                        <form action="{{ route('berita') }}" method="GET" class="space-y-3">
                            <input type="text" name="q" placeholder="Kata kunci..." value="{{ request('q') }}" class="w-full px-4 py-2.5 text-sm border border-ink-300 transition-colors" onfocus="this.style.borderColor='var(--color-accent)'" onblur="this.style.borderColor='#cbd5e1'">
                            <button type="submit" class="w-full px-4 py-2.5 text-white text-sm font-semibold transition-colors" style="background-color: var(--color-accent);" onmouseover="this.style.opacity='0.9'" onmouseout="this.style.opacity='1'">
                                Cari
                            </button>
                        </form>
                    </div>
                    
                    <!-- Latest News -->
                    <div class="reveal border border-ink-200 p-6 delay-100">
                        <h3 class="text-sm font-bold text-ink-900 uppercase tracking-wider mb-4">Berita Terbaru</h3>
                        <div class="space-y-4">
                            @php
                            $latestNews = \App\Models\News::whereNotNull('published_at')
                                ->where('published_at', '<=', now())
                                ->latest('published_at')
                                ->take(5)
                                ->get();
                            @endphp
                            
                            @forelse($latestNews as $latest)
                            <article class="pb-4 border-b border-ink-100 last:border-0 last:pb-0">
                                <div class="text-[11px] text-ink-400 mb-1">{{ $latest->published_at->format('d M Y') }}</div>
                                <h4 class="text-sm font-semibold text-ink-900 leading-snug clamp-2">
                                    <a href="{{ route('berita.detail', $latest->slug) }}" class="transition-colors" onmouseover="this.style.color='var(--color-accent)'" onmouseout="this.style.color='#0f172a'">
                                        {{ $latest->title }}
                                    </a>
                                </h4>
                            </article>
                            @empty
                            <p class="text-sm text-ink-500">Belum ada berita.</p>
                            @endforelse
                            
                        </div>
                    </div>
                    
                </aside>
                
            </div>
        </div>
    </section>

@endsection
