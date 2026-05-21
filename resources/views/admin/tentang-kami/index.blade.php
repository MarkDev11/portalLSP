@extends('layouts.admin')

@section('title', 'Tentang Kami')

@section('content')
<div class="max-w-7xl mx-auto">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-ink-900 heading-tight">Tentang Kami</h1>
        <p class="text-ink-500 mt-2">Kelola konten halaman Tentang Kami</p>
    </div>

    <!-- Success/Error Messages -->
    @if(session('success'))
        <div class="mb-6 p-4 bg-green-50 border border-green-200 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="mb-6 p-4 bg-red-50 border border-red-200 text-red-800 rounded">
            {{ session('error') }}
        </div>
    @endif

    @if(session('info'))
        <div class="mb-6 p-4 bg-blue-50 border border-blue-200 text-blue-800 rounded">
            {{ session('info') }}
        </div>
    @endif

    <!-- Content Card -->
    <div class="bg-white border border-ink-200 rounded-lg overflow-hidden">
        @if($tentangKami)
            <!-- Data exists - Show summary and edit button -->
            <div class="p-6 border-b border-ink-200">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-bold text-ink-900">Data Tentang Kami</h2>
                        <p class="text-sm text-ink-500 mt-1">Terakhir diperbarui: {{ $tentangKami->updated_at->format('d M Y, H:i') }}</p>
                    </div>
                    <a href="{{ route('admin.tentang-kami.edit') }}" class="px-6 py-2.5 bg-accent-600 text-white text-sm font-semibold rounded hover:bg-accent-700 transition-colors">
                        Edit Konten
                    </a>
                </div>
            </div>

            <!-- Data Summary -->
            <div class="p-6 space-y-6">
                <!-- Hero Section -->
                <div class="border-b border-ink-100 pb-6">
                    <h3 class="text-sm font-bold text-ink-900 uppercase tracking-wider mb-3">Hero Section</h3>
                    <div class="space-y-2">
                        <div>
                            <span class="text-xs font-semibold text-ink-500">Title:</span>
                            <p class="text-sm text-ink-700">{{ $tentangKami->hero_title }}</p>
                        </div>
                        <div>
                            <span class="text-xs font-semibold text-ink-500">Subtitle:</span>
                            <p class="text-sm text-ink-700">{{ Str::limit($tentangKami->hero_subtitle, 100) }}</p>
                        </div>
                    </div>
                </div>

                <!-- About Section -->
                <div class="border-b border-ink-100 pb-6">
                    <h3 class="text-sm font-bold text-ink-900 uppercase tracking-wider mb-3">About Section</h3>
                    <div class="space-y-2">
                        <div>
                            <span class="text-xs font-semibold text-ink-500">Title:</span>
                            <p class="text-sm text-ink-700">{{ $tentangKami->about_title }}</p>
                        </div>
                        <div>
                            <span class="text-xs font-semibold text-ink-500">Content:</span>
                            <p class="text-sm text-ink-700">{{ Str::limit(strip_tags($tentangKami->about_content), 150) }}</p>
                        </div>
                    </div>
                </div>

                <!-- Visi & Misi -->
                <div class="border-b border-ink-100 pb-6">
                    <h3 class="text-sm font-bold text-ink-900 uppercase tracking-wider mb-3">Visi & Misi</h3>
                    <div class="space-y-2">
                        <div>
                            <span class="text-xs font-semibold text-ink-500">Visi:</span>
                            <p class="text-sm text-ink-700">{{ Str::limit(strip_tags($tentangKami->visi_content), 100) }}</p>
                        </div>
                        <div>
                            <span class="text-xs font-semibold text-ink-500">Misi Items:</span>
                            <p class="text-sm text-ink-700">{{ count($tentangKami->misi_items) }} items</p>
                        </div>
                    </div>
                </div>

                <!-- Tujuan -->
                <div class="border-b border-ink-100 pb-6">
                    <h3 class="text-sm font-bold text-ink-900 uppercase tracking-wider mb-3">Tujuan LSP</h3>
                    <div class="space-y-2">
                        <div>
                            <span class="text-xs font-semibold text-ink-500">Title:</span>
                            <p class="text-sm text-ink-700">{{ $tentangKami->tujuan_title }}</p>
                        </div>
                        <div>
                            <span class="text-xs font-semibold text-ink-500">Tujuan Items:</span>
                            <p class="text-sm text-ink-700">{{ count($tentangKami->tujuan_items) }} items</p>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div>
                    <h3 class="text-sm font-bold text-ink-900 uppercase tracking-wider mb-3">CTA Section</h3>
                    <div class="space-y-2">
                        <div>
                            <span class="text-xs font-semibold text-ink-500">Title:</span>
                            <p class="text-sm text-ink-700">{{ $tentangKami->cta_title }}</p>
                        </div>
                        <div>
                            <span class="text-xs font-semibold text-ink-500">Description:</span>
                            <p class="text-sm text-ink-700">{{ Str::limit($tentangKami->cta_description, 100) }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Note about image -->
            <div class="p-6 bg-ink-50 border-t border-ink-200">
                <p class="text-sm text-ink-600">
                    <strong>Note:</strong> Untuk mengedit gambar Tentang Kami, silakan edit di 
                    <a href="{{ route('admin.landingpage.edit') }}" class="text-accent-600 hover:text-accent-700 font-semibold">Landing Page → Tentang Kami Section</a>
                </p>
            </div>
        @else
            <!-- No data - Show create button -->
            <div class="p-12 text-center">
                <svg class="w-16 h-16 text-ink-300 mx-auto mb-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                </svg>
                <h2 class="text-xl font-bold text-ink-900 mb-2">Belum Ada Data</h2>
                <p class="text-ink-500 mb-6">Silakan buat data Tentang Kami untuk memulai.</p>
                <a href="{{ route('admin.tentang-kami.create') }}" class="inline-block px-6 py-2.5 bg-accent-600 text-white text-sm font-semibold rounded hover:bg-accent-700 transition-colors">
                    Buat Data Baru
                </a>
            </div>
        @endif
    </div>
</div>
@endsection
