@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <!-- Welcome Section -->
    <div class="mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-ink-900 heading-tight mb-2">Dashboard Admin</h1>
        <p class="text-ink-500">Selamat datang kembali, {{ Auth::user()->name }}</p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Card 1: Total Users -->
        <div class="bg-white rounded-lg shadow-sm border border-ink-200 p-6">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-xl bg-accent-100 flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-accent-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-ink-500 mb-1">Total Users</p>
                    <h3 class="text-3xl font-bold text-ink-900">{{ number_format($totalUsers) }}</h3>
                    <p class="text-xs text-ink-400 mt-1">
                        Admin: {{ $usersByRole['admin'] ?? 0 }} | Editor: {{ $usersByRole['editor'] ?? 0 }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 2: Total News -->
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
                    <p class="text-xs text-ink-400 mt-1">
                        Published: {{ $publishedNews }} | Draft: {{ $draftNews }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 3: Total Views -->
        <div class="bg-white rounded-lg shadow-sm border border-ink-200 p-6">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-xl bg-green-100 flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-ink-500 mb-1">Total Views</p>
                    <h3 class="text-3xl font-bold text-ink-900">{{ number_format($totalViews) }}</h3>
                    <p class="text-xs text-ink-400 mt-1">
                        Semua berita
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 4: Pengunjung Hari Ini -->
        <div class="bg-white rounded-lg shadow-sm border border-ink-200 p-6">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-xl bg-orange-100 flex items-center justify-center flex-shrink-0">
                    <svg class="w-7 h-7 text-orange-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm text-ink-500 mb-1">Pengunjung Hari Ini</p>
                    <h3 class="text-3xl font-bold text-ink-900">{{ number_format($visitorsToday) }}</h3>
                    <p class="text-xs text-ink-400 mt-1">
                        Unique visitors
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Performance Chart -->
    <div class="bg-white border border-ink-200 p-6 mb-8">
        <h2 class="text-lg font-bold text-ink-900 mb-6">Performance Timeline (7 Hari Terakhir)</h2>
        <canvas id="performanceChart" height="80"></canvas>
    </div>

    <!-- Recent Activity & Top Lists -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <!-- Recent Users -->
        <div class="bg-white rounded-lg shadow-sm border border-ink-200 p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-6">User Terbaru</h2>
            <div class="space-y-4">
                @forelse($recentUsers as $user)
                <div class="flex items-center gap-4 pb-4 border-b border-ink-100 last:border-0">
                    <div class="w-10 h-10 bg-accent-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-accent-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-ink-900">{{ $user->name }}</p>
                        <p class="text-xs text-ink-500 mt-1">{{ $user->email }}</p>
                        <div class="flex items-center gap-2 mt-1">
                            <span class="text-xs px-2 py-0.5 rounded-full {{ $user->role === 'admin' ? 'bg-red-100 text-red-700' : ($user->role === 'editor' ? 'bg-blue-100 text-blue-700' : 'bg-gray-100 text-gray-700') }}">
                                {{ ucfirst($user->role) }}
                            </span>
                            <span class="text-xs text-ink-400">{{ $user->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-sm text-ink-500 text-center py-4">Belum ada user terbaru</p>
                @endforelse
            </div>
        </div>

        <!-- Recent News -->
        <div class="bg-white rounded-lg shadow-sm border border-ink-200 p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-6">Berita Terbaru</h2>
            <div class="space-y-4">
                @forelse($recentNews as $news)
                <div class="flex items-start gap-4 pb-4 border-b border-ink-100 last:border-0">
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/>
                        </svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-ink-900 truncate">{{ $news->title }}</p>
                        <p class="text-xs text-ink-500 mt-1">Oleh: {{ $news->creator->name ?? 'Unknown' }}</p>
                        <div class="flex items-center gap-2 mt-1">
                            @if($news->published_at && $news->published_at <= now())
                            <span class="text-xs px-2 py-0.5 rounded-full bg-green-100 text-green-700">Published</span>
                            @else
                            <span class="text-xs px-2 py-0.5 rounded-full bg-yellow-100 text-yellow-700">Draft</span>
                            @endif
                            <span class="text-xs text-ink-400">{{ $news->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
                @empty
                <p class="text-sm text-ink-500 text-center py-4">Belum ada berita</p>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Top Lists -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <!-- Top Editors -->
        <div class="bg-white rounded-lg shadow-sm border border-ink-200 p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-6">Top Editors</h2>
            <div class="space-y-4">
                @forelse($topEditors as $editor)
                <div class="flex items-center justify-between pb-4 border-b border-ink-100 last:border-0">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-sm font-bold text-purple-600">{{ substr($editor->name, 0, 1) }}</span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-ink-900">{{ $editor->name }}</p>
                            <p class="text-xs text-ink-500">{{ $editor->email }}</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-lg font-bold text-ink-900">{{ $editor->news_count }}</p>
                        <p class="text-xs text-ink-500">berita</p>
                    </div>
                </div>
                @empty
                <p class="text-sm text-ink-500 text-center py-4">Belum ada data</p>
                @endforelse
            </div>
        </div>

        <!-- Top News -->
        <div class="bg-white rounded-lg shadow-sm border border-ink-200 p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-6">Top Berita (Views)</h2>
            <div class="space-y-4">
                @forelse($topNews as $news)
                <div class="flex items-center justify-between pb-4 border-b border-ink-100 last:border-0">
                    <div class="flex-1 min-w-0 mr-4">
                        <p class="text-sm font-medium text-ink-900 truncate">{{ $news->title }}</p>
                        <p class="text-xs text-ink-500 mt-1">Oleh: {{ $news->creator->name ?? 'Unknown' }}</p>
                    </div>
                    <div class="text-right flex-shrink-0">
                        <p class="text-lg font-bold text-ink-900">{{ number_format($news->views) }}</p>
                        <p class="text-xs text-ink-500">views</p>
                    </div>
                </div>
                @empty
                <p class="text-sm text-ink-500 text-center py-4">Belum ada data</p>
                @endforelse
            </div>
        </div>
    </div>

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
@endsection
