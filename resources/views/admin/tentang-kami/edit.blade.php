@extends('layouts.admin')

@section('title', 'Edit Data Tentang Kami')

@section('content')
    <div class="mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-ink-900 heading-tight mb-2">Tentang Kami</h1>
        <p class="text-ink-500">Kelola konten halaman Tentang Kami</p>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 bg-green-50 border border-green-200 text-sm text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="mb-6 p-4 bg-red-50 border border-red-200 text-sm text-red-700 rounded">
            {{ session('error') }}
        </div>
    @endif

    @if($errors->any())
        <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded">
            <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
                </svg>
                <div class="flex-1">
                    <h4 class="text-sm font-semibold text-red-900 mb-2">Terdapat {{ $errors->count() }} kesalahan:</h4>
                    <ul class="text-sm text-red-700 space-y-1 list-disc list-inside">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    <!-- Form -->
    <form action="{{ route('admin.tentang-kami.update') }}" method="POST" class="space-y-8">
        @csrf
        @method('PUT')

        <!-- Hero Section -->
        <div class="bg-white border border-ink-200 rounded-lg p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-4 pb-3 border-b border-ink-200">Hero Section</h2>
            
            <div class="space-y-4">
                <div>
                    <label for="hero_title" class="block text-sm font-semibold text-ink-700 mb-2">Title *</label>
                    <input type="text" id="hero_title" name="hero_title" value="{{ old('hero_title', $tentangKami->hero_title) }}" 
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
                        required>{{ old('hero_subtitle', $tentangKami->hero_subtitle) }}</textarea>
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
                    <input type="text" id="about_title" name="about_title" value="{{ old('about_title', $tentangKami->about_title) }}" 
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
                        required>{{ old('about_content', $tentangKami->about_content) }}</textarea>
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
                    <input type="text" id="license_title" name="license_title" value="{{ old('license_title', $tentangKami->license_title) }}" 
                        class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500 @error('license_title') border-red-500 @enderror" 
                        required>
                    @error('license_title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="license_number" class="block text-sm font-semibold text-ink-700 mb-2">License Number *</label>
                    <input type="text" id="license_number" name="license_number" value="{{ old('license_number', $tentangKami->license_number) }}" 
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
                    required>{{ old('visi_content', $tentangKami->visi_content) }}</textarea>
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
                @php
                    $misiItems = old('misi_items', $tentangKami->misi_items);
                @endphp
                @foreach($misiItems as $index => $item)
                    <div class="misi-item flex gap-3">
                        <input type="text" name="misi_items[]" value="{{ $item }}" 
                            class="flex-1 px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500" 
                            placeholder="Misi item..." required>
                        <button type="button" class="removeMisiBtn px-4 py-2 bg-red-500 text-white text-sm font-semibold rounded hover:bg-red-600 transition-colors">
                            Hapus
                        </button>
                    </div>
                @endforeach
            </div>
            @error('misi_items')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Tujuan Section -->
        <div class="bg-white border border-ink-200 rounded-lg p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-4 pb-3 border-b border-ink-200">Tujuan Section</h2>
            
            <div class="space-y-4 mb-6">
                <div>
                    <label for="tujuan_title" class="block text-sm font-semibold text-ink-700 mb-2">Tujuan Title *</label>
                    <input type="text" id="tujuan_title" name="tujuan_title" value="{{ old('tujuan_title', $tentangKami->tujuan_title) }}" 
                        class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500 @error('tujuan_title') border-red-500 @enderror" 
                        required>
                    @error('tujuan_title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="tujuan_subtitle" class="block text-sm font-semibold text-ink-700 mb-2">Tujuan Subtitle *</label>
                    <textarea id="tujuan_subtitle" name="tujuan_subtitle" rows="3" 
                        class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500 @error('tujuan_subtitle') border-red-500 @enderror" 
                        required>{{ old('tujuan_subtitle', $tentangKami->tujuan_subtitle) }}</textarea>
                    @error('tujuan_subtitle')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex items-center justify-between mb-4 pb-3 border-b border-ink-200">
                <h3 class="text-base font-semibold text-ink-900">Tujuan Items</h3>
                <button type="button" id="addTujuanBtn" class="px-4 py-2 bg-accent-600 text-white text-sm font-semibold rounded hover:bg-accent-700 transition-colors">
                    + Tambah Tujuan
                </button>
            </div>
            
            <div id="tujuanContainer" class="space-y-4">
                @php
                    $tujuanItems = old('tujuan_items', $tentangKami->tujuan_items);
                @endphp
                @foreach($tujuanItems as $index => $item)
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
                    <input type="text" id="cta_title" name="cta_title" value="{{ old('cta_title', $tentangKami->cta_title) }}" 
                        class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500 @error('cta_title') border-red-500 @enderror" 
                        required>
                    @error('cta_title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="cta_description" class="block text-sm font-semibold text-ink-700 mb-2">CTA Description *</label>
                    <textarea id="cta_description" name="cta_description" rows="3" 
                        class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500 @error('cta_description') border-red-500 @enderror" 
                        required>{{ old('cta_description', $tentangKami->cta_description) }}</textarea>
                    @error('cta_description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="px-6 py-2.5 bg-accent-600 text-white text-sm font-semibold rounded hover:bg-accent-700 transition-colors">
                Simpan Perubahan
            </button>
        </div>
    </form>
@endsection

@push('scripts')
<!-- TinyMCE -->
<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
<script>
    // Initialize TinyMCE for About Content
    tinymce.init({
        license_key: 'gpl',
        selector: '#about_content',
        height: 400,
        menubar: true,
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks fontsize | ' +
            'bold italic forecolor backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
        language: 'id',
        branding: false,
        promotion: false
    });

    // Initialize TinyMCE for Visi Content
    tinymce.init({
        license_key: 'gpl',
        selector: '#visi_content',
        height: 300,
        menubar: true,
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks fontsize | ' +
            'bold italic forecolor backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
        language: 'id',
        branding: false,
        promotion: false
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
                <span class="text-sm font-semibold text-ink-700">Tujuan #<span class="tujuan-number">${tujuanCount + 1}</span></span>
                <button type="button" class="removeTujuanBtn px-3 py-1.5 bg-red-500 text-white text-xs font-semibold rounded hover:bg-red-600 transition-colors">
                    Hapus
                </button>
            </div>
            <div class="space-y-3">
                <input type="text" name="tujuan_items[${tujuanCount}][title]" 
                    class="w-full px-4 py-2.5 border border-ink-300 rounded focus:outline-none focus:border-accent-500" 
                    placeholder="Title..." required>
                <textarea name="tujuan_items[${tujuanCount}][description]" rows="3" 
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

    // Scroll to top if there's a success message
    @if(session('success'))
        window.scrollTo({ top: 0, behavior: 'smooth' });
    @endif
</script>
@endpush
