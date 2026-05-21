@extends('layouts.admin')

@section('title', 'Buat Data Tentang Kami')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Header -->
    <div class="mb-8">
        <div class="flex items-center gap-4 mb-4">
            <a href="{{ route('admin.tentang-kami.index') }}" class="p-2 hover:bg-ink-100 rounded transition-colors">
                <svg class="w-5 h-5 text-ink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" d="M15 19l-7-7 7-7"/>
                </svg>
            </a>
            <div>
                <h1 class="text-3xl font-bold text-ink-900 heading-tight">Buat Data Tentang Kami</h1>
                <p class="text-ink-500 mt-1">Isi semua field untuk membuat konten halaman Tentang Kami</p>
            </div>
        </div>
    </div>

    <!-- Form -->
    <form action="{{ route('admin.tentang-kami.store') }}" method="POST" class="space-y-8">
        @csrf

        <!-- Hero Section -->
        <div class="bg-white border border-ink-200 rounded-lg p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-4 pb-3 border-b border-ink-200">Hero Section</h2>
            
            <div class="space-y-4">
                <div>
                    <label for="hero_title" class="block text-sm font-semibold text-ink-700 mb-2">Title *</label>
                    <input type="text" id="hero_title" name="hero_title" value="{{ old('hero_title') }}" 
                        class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500 @error('hero_title') border-red-500 @enderror" 
                        required>
                    @error('hero_title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="hero_subtitle" class="block text-sm font-semibold text-ink-700 mb-2">Subtitle *</label>
                    <textarea id="hero_subtitle" name="hero_subtitle" rows="3" 
                        class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500 @error('hero_subtitle') border-red-500 @enderror" 
                        required>{{ old('hero_subtitle') }}</textarea>
                    @error('hero_subtitle')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="bg-white border border-ink-200 rounded-lg p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-4 pb-3 border-b border-ink-200">About Section</h2>
            
            <div class="space-y-4">
                <div>
                    <label for="about_title" class="block text-sm font-semibold text-ink-700 mb-2">Title *</label>
                    <input type="text" id="about_title" name="about_title" value="{{ old('about_title') }}" 
                        class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500 @error('about_title') border-red-500 @enderror" 
                        required>
                    @error('about_title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="about_content" class="block text-sm font-semibold text-ink-700 mb-2">Content *</label>
                    <textarea id="about_content" name="about_content" rows="10" 
                        class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500 @error('about_content') border-red-500 @enderror" 
                        required>{{ old('about_content') }}</textarea>
                    @error('about_content')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- License Section -->
        <div class="bg-white border border-ink-200 rounded-lg p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-4 pb-3 border-b border-ink-200">License Section</h2>
            
            <div class="space-y-4">
                <div>
                    <label for="license_title" class="block text-sm font-semibold text-ink-700 mb-2">License Title *</label>
                    <input type="text" id="license_title" name="license_title" value="{{ old('license_title') }}" 
                        class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500 @error('license_title') border-red-500 @enderror" 
                        required>
                    @error('license_title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="license_number" class="block text-sm font-semibold text-ink-700 mb-2">License Number *</label>
                    <input type="text" id="license_number" name="license_number" value="{{ old('license_number') }}" 
                        class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500 @error('license_number') border-red-500 @enderror" 
                        required>
                    @error('license_number')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Visi Section -->
        <div class="bg-white border border-ink-200 rounded-lg p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-4 pb-3 border-b border-ink-200">Visi</h2>
            
            <div>
                <label for="visi_content" class="block text-sm font-semibold text-ink-700 mb-2">Visi Content *</label>
                <textarea id="visi_content" name="visi_content" rows="5" 
                    class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500 @error('visi_content') border-red-500 @enderror" 
                    required>{{ old('visi_content') }}</textarea>
                @error('visi_content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Misi Section -->
        <div class="bg-white border border-ink-200 rounded-lg p-6">
            <div class="flex items-center justify-between mb-4 pb-3 border-b border-ink-200">
                <h2 class="text-lg font-bold text-ink-900">Misi Items</h2>
                <button type="button" id="addMisiBtn" class="px-4 py-2 bg-accent-600 text-white text-sm font-semibold rounded hover:bg-accent-700 transition-colors">
                    + Tambah Misi
                </button>
            </div>
            
            <div id="misiContainer" class="space-y-3">
                @if(old('misi_items'))
                    @foreach(old('misi_items') as $index => $item)
                        <div class="misi-item flex gap-3">
                            <input type="text" name="misi_items[]" value="{{ $item }}" 
                                class="flex-1 px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500" 
                                placeholder="Misi item..." required>
                            <button type="button" class="removeMisiBtn px-4 py-2 bg-red-500 text-white text-sm font-semibold rounded hover:bg-red-600 transition-colors">
                                Hapus
                            </button>
                        </div>
                    @endforeach
                @else
                    <div class="misi-item flex gap-3">
                        <input type="text" name="misi_items[]" 
                            class="flex-1 px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500" 
                            placeholder="Misi item..." required>
                        <button type="button" class="removeMisiBtn px-4 py-2 bg-red-500 text-white text-sm font-semibold rounded hover:bg-red-600 transition-colors">
                            Hapus
                        </button>
                    </div>
                @endif
            </div>
            @error('misi_items')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tujuan Section -->
        <div class="bg-white border border-ink-200 rounded-lg p-6">
            <div class="flex items-center justify-between mb-4 pb-3 border-b border-ink-200">
                <h2 class="text-lg font-bold text-ink-900">Tujuan Items</h2>
                <button type="button" id="addTujuanBtn" class="px-4 py-2 bg-accent-600 text-white text-sm font-semibold rounded hover:bg-accent-700 transition-colors">
                    + Tambah Tujuan
                </button>
            </div>
            
            <div id="tujuanContainer" class="space-y-4">
                @if(old('tujuan_items'))
                    @foreach(old('tujuan_items') as $index => $item)
                        <div class="tujuan-item border border-ink-200 rounded p-4">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-sm font-semibold text-ink-700">Tujuan #<span class="tujuan-number">{{ $index + 1 }}</span></span>
                                <button type="button" class="removeTujuanBtn px-3 py-1.5 bg-red-500 text-white text-xs font-semibold rounded hover:bg-red-600 transition-colors">
                                    Hapus
                                </button>
                            </div>
                            <div class="space-y-3">
                                <input type="text" name="tujuan_items[{{ $index }}][title]" value="{{ $item['title'] ?? '' }}" 
                                    class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500" 
                                    placeholder="Title..." required>
                                <textarea name="tujuan_items[{{ $index }}][description]" rows="3" 
                                    class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500" 
                                    placeholder="Description..." required>{{ $item['description'] ?? '' }}</textarea>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="tujuan-item border border-ink-200 rounded p-4">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-sm font-semibold text-ink-700">Tujuan #<span class="tujuan-number">1</span></span>
                            <button type="button" class="removeTujuanBtn px-3 py-1.5 bg-red-500 text-white text-xs font-semibold rounded hover:bg-red-600 transition-colors">
                                Hapus
                            </button>
                        </div>
                        <div class="space-y-3">
                            <input type="text" name="tujuan_items[0][title]" 
                                class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500" 
                                placeholder="Title..." required>
                            <textarea name="tujuan_items[0][description]" rows="3" 
                                class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500" 
                                placeholder="Description..." required></textarea>
                        </div>
                    </div>
                @endif
            </div>
            @error('tujuan_items')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- CTA Section -->
        <div class="bg-white border border-ink-200 rounded-lg p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-4 pb-3 border-b border-ink-200">CTA Section</h2>
            
            <div class="space-y-4">
                <div>
                    <label for="cta_title" class="block text-sm font-semibold text-ink-700 mb-2">CTA Title *</label>
                    <input type="text" id="cta_title" name="cta_title" value="$(old('cta_title'))" 
                        class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500 @error('cta_title') border-red-500 @enderror" 
                        required>
                    @error('cta_title')
                        <p class="text-red-500 text-xs mt-1">$($message)</p>
                    @enderror
                </div>

                <div>
                    <label for="cta_description" class="block text-sm font-semibold text-ink-700 mb-2">CTA Description *</label>
                    <textarea id="cta_description" name="cta_description" rows="3" 
                        class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500 @error('cta_description') border-red-500 @enderror" 
                        required>$(old('cta_description'))</textarea>
                    @error('cta_description')
                        <p class="text-red-500 text-xs mt-1">$($message)</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex items-center justify-between">
            <a href="$($route('admin.tentang-kami.index'))" class="px-6 py-2.5 border border-ink-300 text-ink-700 text-sm font-semibold rounded hover:bg-ink-50 transition-colors">
                Batal
            </a>
            <button type="submit" class="px-6 py-2.5 bg-accent-600 text-white text-sm font-semibold rounded hover:bg-accent-700 transition-colors">
                Simpan Data
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script src="$($asset('js/tinymce/tinymce.min.js'))" referrerpolicy="origin"></script>
<script>
    // TinyMCE initialization
    tinymce.init({
        selector: '#about_content',
        license_key: 'gpl',
        height: 400,
        menubar: false,
        plugins: 'lists link image table code',
        toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code',
        content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; font-size: 14px; }'
    });

    tinymce.init({
        selector: '#visi_content',
        license_key: 'gpl',
        height: 300,
        menubar: false,
        plugins: 'lists link',
        toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist',
        content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; font-size: 14px; }'
    });

    // Misi Items - Add/Remove
    let misiCount = document.querySelectorAll('.misi-item').length;

    document.getElementById('addMisiBtn').addEventListener('click', function() {
        const container = document.getElementById('misiContainer');
        const newItem = document.createElement('div');
        newItem.className = 'misi-item flex gap-3';
        newItem.innerHTML = `
            <input type="text" name="misi_items[]" 
                class="flex-1 px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500" 
                placeholder="Misi item..." required>
            <button type="button" class="removeMisiBtn px-4 py-2 bg-red-500 text-white text-sm font-semibold rounded hover:bg-red-600 transition-colors">
                Hapus
            </button>
        `;
        container.appendChild(newItem);
        misiCount++;
    });

    document.getElementById('misiContainer').addEventListener('click', function(e) {
        if (e.target.classList.contains('removeMisiBtn')) {
            if (misiCount > 1) {
                e.target.closest('.misi-item').remove();
                misiCount--;
            } else {
                alert('Minimal harus ada 1 misi item!');
            }
        }
    });

    // Tujuan Items - Add/Remove
    let tujuanCount = document.querySelectorAll('.tujuan-item').length;

    document.getElementById('addTujuanBtn').addEventListener('click', function() {
        const container = document.getElementById('tujuanContainer');
        const newItem = document.createElement('div');
        newItem.className = 'tujuan-item border border-ink-200 rounded p-4';
        newItem.innerHTML = `
            <div class="flex items-center justify-between mb-3">
                <span class="text-sm font-semibold text-ink-700">Tujuan #<span class="tujuan-number">+${tujuanCount + 1}</span></span>
                <button type="button" class="removeTujuanBtn px-3 py-1.5 bg-red-500 text-white text-xs font-semibold rounded hover:bg-red-600 transition-colors">
                    Hapus
                </button>
            </div>
            <div class="space-y-3">
                <input type="text" name="tujuan_items[+${tujuanCount}][title]" 
                    class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500" 
                    placeholder="Title..." required>
                <textarea name="tujuan_items[+${tujuanCount}][description]" rows="3" 
                    class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500" 
                    placeholder="Description..." required></textarea>
            </div>
        `;
        container.appendChild(newItem);
        tujuanCount++;
        updateTujuanNumbers();
    });

    document.getElementById('tujuanContainer').addEventListener('click', function(e) {
        if (e.target.classList.contains('removeTujuanBtn')) {
            if (tujuanCount > 1) {
                e.target.closest('.tujuan-item').remove();
                tujuanCount--;
                updateTujuanNumbers();
            } else {
                alert('Minimal harus ada 1 tujuan item!');
            }
        }
    });

    function updateTujuanNumbers() {
        document.querySelectorAll('.tujuan-number').forEach((el, index) => {
            el.textContent = index + 1;
        });
    }
</script>
@endpush
