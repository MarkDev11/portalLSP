@extends('layouts.public')

@section('title', $news->title . ' - ' . ($setting?->site_name ?? 'Portal LSP UBSI'))

@section('content')

    <!-- ARTICLE HEADER -->
    <section style="background: linear-gradient(to right, #0f172a 0%, #0f172a 70%, var(--color-accent) 100%);">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 md:py-28">
            <div class="reveal">
                <p class="text-sm font-extrabold uppercase tracking-[0.2em] mb-4" style="color: var(--color-accent); -webkit-text-stroke: 0.3px white; text-stroke: 0.3px white;">
                    Berita • {{ $news->published_at ? $news->published_at->format('d M Y') : 'Draft' }}
                </p>
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white heading-tight display mb-4">
                    {{ $news->title }}
                </h1>
                <div class="w-12 h-0.5 mb-6" style="background-color: var(--color-accent);"></div>
                <div class="flex items-center gap-4 text-sm text-ink-300">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>
                        </svg>
                        <span>{{ $news->published_at ? $news->published_at->format('d F Y') : 'Belum dipublikasikan' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ARTICLE CONTENT -->
    <section class="py-16 md:py-20 bg-white">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12">
                
                <!-- LEFT: Article Body -->
                <article class="lg:col-span-8">
                    
                    <!-- Featured Image -->
                    @if($news->image)
                    <div class="reveal mb-12">
                        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                    @endif
                    
                    <!-- Article Content -->
                    <div class="reveal prose prose-lg max-w-none">
                        {!! $news->content !!}
                    </div>
                    
                    <!-- Share & Back -->
                    <div class="reveal mt-12 pt-8 border-t border-ink-200">
                        <div class="flex items-center justify-between">
                            <a href="{{ route('berita') }}" class="inline-flex items-center gap-2 text-sm font-semibold transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                </svg>
                                Kembali ke Berita
                            </a>
                            <div class="flex items-center gap-3">
                                <span class="text-sm text-ink-500">Bagikan:</span>
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('berita.detail', $news->slug)) }}" target="_blank" class="w-8 h-8 flex items-center justify-center bg-ink-100 text-ink-600 rounded transition-colors" onmouseover="this.style.backgroundColor='var(--color-accent)'; this.style.color='white'" onmouseout="this.style.backgroundColor='#f1f5f9'; this.style.color='#475569'">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('berita.detail', $news->slug)) }}&text={{ urlencode($news->title) }}" target="_blank" class="w-8 h-8 flex items-center justify-center bg-ink-100 text-ink-600 rounded transition-colors" onmouseover="this.style.backgroundColor='var(--color-accent)'; this.style.color='white'" onmouseout="this.style.backgroundColor='#f1f5f9'; this.style.color='#475569'">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                                </a>
                                <a href="https://wa.me/?text={{ urlencode($news->title . ' ' . route('berita.detail', $news->slug)) }}" target="_blank" class="w-8 h-8 flex items-center justify-center bg-ink-100 text-ink-600 rounded transition-colors" onmouseover="this.style.backgroundColor='var(--color-accent)'; this.style.color='white'" onmouseout="this.style.backgroundColor='#f1f5f9'; this.style.color='#475569'">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </article>
                
                <!-- RIGHT: Sidebar -->
                <aside class="lg:col-span-4">
                    
                    <!-- Latest News -->
                    <div class="reveal border border-ink-200 p-6 mb-6">
                        <h3 class="text-sm font-bold text-ink-900 uppercase tracking-wider mb-4">Berita Terbaru</h3>
                        <div class="space-y-4">
                            @php
                            $latestNews = \App\Models\News::whereNotNull('published_at')
                                ->where('published_at', '<=', now())
                                ->where('id', '!=', $news->id)
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
                            <p class="text-sm text-ink-500">Belum ada berita lain.</p>
                            @endforelse
                            
                        </div>
                    </div>
                    
                </aside>
                
            </div>
        </div>
    </section>

@endsection
