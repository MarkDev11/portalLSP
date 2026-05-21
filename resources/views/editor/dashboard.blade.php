@extends('layouts.editor')

@section('title', 'Dashboard Editor')

@section('content')
    <!-- Welcome Section -->
    <div class="mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-ink-900 heading-tight mb-2">Dashboard Editor</h1>
        <p class="text-ink-500">Selamat datang kembali, {{ Auth::user()->name }}</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Card 1: Total Berita -->
        <div class="bg-white rounded-lg shadow-sm border border-ink-200 p-6">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-xl bg-blue-100 flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-ink-500 mb-1">Total Berita</p>
                    <h3 class="text-3xl font-bold text-ink-900">{{ number_format($totalNews) }}</h3>
                </div>
            </div>
        </div>

        <!-- Card 2: Total Views -->
        <div class="bg-white rounded-lg shadow-sm border border-ink-200 p-6">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-xl bg-green-100 flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-ink-500 mb-1">Total Views Berita</p>
                    <h3 class="text-3xl font-bold text-ink-900">{{ number_format($totalViews) }}</h3>
                </div>
            </div>
        </div>

        <!-- Card 3: Berita Published -->
        <div class="bg-white rounded-lg shadow-sm border border-ink-200 p-6">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-xl bg-purple-100 flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-ink-500 mb-1">Berita Published</p>
                    <h3 class="text-3xl font-bold text-ink-900">{{ number_format($publishedNews) }}</h3>
                </div>
            </div>
        </div>

        <!-- Card 4: Website Visitors Today -->
        <div class="bg-white rounded-lg shadow-sm border border-ink-200 p-6">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-xl bg-orange-100 flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-ink-500 mb-1">Pengunjung Hari Ini</p>
                    <h3 class="text-3xl font-bold text-ink-900">{{ number_format($visitorsToday) }}</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Performance Chart -->
    <div class="bg-white border border-ink-200 p-6 mb-8">
        <h2 class="text-lg font-bold text-ink-900 mb-6">Performance Timeline (7 Hari Terakhir)</h2>
        <canvas id="performanceChart" height="80"></canvas>
    </div>

    <!-- Top 5 Berita Terpopuler -->
    <div class="bg-white border border-ink-200 p-6 mb-8">
        <h2 class="text-lg font-bold text-ink-900 mb-6">Top 5 Berita Terpopuler</h2>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead class="bg-ink-50">
                    <tr class="border-b border-ink-200">
                        <th class="text-left py-3 px-4 font-semibold text-ink-700">Judul</th>
                        <th class="text-left py-3 px-4 font-semibold text-ink-700">Dibuat Oleh</th>
                        <th class="text-left py-3 px-4 font-semibold text-ink-700">Views</th>
                        <th class="text-left py-3 px-4 font-semibold text-ink-700">Published</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($topNews as $news)
                    <tr class="border-b border-ink-100 hover:bg-ink-50">
                        <td class="py-3 px-4">
                            <a href="{{ route('editor.news.edit', $news->id) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                                {{ $news->title }}
                            </a>
                        </td>
                        <td class="py-3 px-4 text-ink-600">{{ $news->creator->name ?? 'Unknown' }}</td>
                        <td class="py-3 px-4 text-ink-900 font-semibold">{{ number_format($news->views) }}</td>
                        <td class="py-3 px-4 text-ink-600">{{ $news->published_at ? $news->published_at->format('d M Y') : '-' }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="py-8 text-center text-ink-500">Belum ada berita.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Recent News -->
    <div class="bg-white border border-ink-200 p-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-lg font-bold text-ink-900">Berita Terbaru</h2>
            <a href="{{ route('editor.news.index') }}" class="text-sm text-blue-600 hover:text-blue-800 font-semibold">
                Lihat Semua →
            </a>
        </div>
        <div class="space-y-4">
            @forelse($recentNews as $news)
            <div class="flex items-start gap-4 pb-4 border-b border-ink-100 last:border-0 last:pb-0">
                @if($news->image)
                <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-20 h-20 object-cover rounded">
                @else
                <div class="w-20 h-20 bg-ink-100 rounded flex items-center justify-center">
                    <svg class="w-8 h-8 text-ink-400" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                        <path stroke-linecap="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/>
                    </svg>
                </div>
                @endif
                <div class="flex-1 min-w-0">
                    <h3 class="text-sm font-semibold text-ink-900 mb-1">
                        <a href="{{ route('editor.news.edit', $news->id) }}" class="hover:text-blue-600">
                            {{ $news->title }}
                        </a>
                    </h3>
                    <div class="flex items-center gap-4 text-xs text-ink-500">
                        <span>{{ $news->creator->name ?? 'Unknown' }}</span>
                        <span>•</span>
                        <span>{{ $news->created_at->diffForHumans() }}</span>
                        <span>•</span>
                        <span>{{ number_format($news->views) }} views</span>
                    </div>
                </div>
                @if($news->published_at && $news->published_at <= now())
                <span class="px-2 py-1 text-xs font-semibold rounded bg-green-100 text-green-800">
                    Published
                </span>
                @else
                <span class="px-2 py-1 text-xs font-semibold rounded bg-yellow-100 text-yellow-800">
                    Draft
                </span>
                @endif
            </div>
            @empty
            <div class="text-center py-8 text-ink-500">Belum ada berita.</div>
            @endforelse
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
    // Performance Chart
    const ctx = document.getElementById('performanceChart');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($chartLabels),
            datasets: [
                {
                    label: 'Page Views',
                    data: @json($chartPageViews),
                    borderColor: 'rgb(59, 130, 246)',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    tension: 0.4
                },
                {
                    label: 'Unique Visitors',
                    data: @json($chartUniqueVisitors),
                    borderColor: 'rgb(16, 185, 129)',
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    tension: 0.4
                },
                {
                    label: 'News Views',
                    data: @json($chartNewsViews),
                    borderColor: 'rgb(249, 115, 22)',
                    backgroundColor: 'rgba(249, 115, 22, 0.1)',
                    tension: 0.4
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endpush
