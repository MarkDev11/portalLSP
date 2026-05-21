@extends('layouts.admin')

@section('title', 'Edit Landing Page')

@section('content')
    <div class="mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-ink-900 heading-tight mb-2">Edit Landing Page</h1>
        <p class="text-ink-500">Edit semua text content di halaman welcome</p>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 bg-green-50 border border-green-200 text-sm text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.landingpage.update') }}" enctype="multipart/form-data" class="space-y-8">
        @csrf
        @method('PUT')

        <!-- Hero Section -->
        <div class="bg-white border border-ink-200 p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-6 pb-3 border-b border-ink-200">Hero Section</h2>
            
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Hero Content</label>
                    <textarea name="hero_content" id="hero_content" rows="10" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">{{ old('hero_content', $landingPage->hero_content) }}</textarea>
                    @error('hero_content')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    <p class="mt-2 text-xs text-ink-500">Gunakan editor untuk mengatur font size, warna, dan format text untuk Hero Section.</p>
                </div>
            </div>
        </div>

        <!-- Tentang Section -->
        <div class="bg-white border border-ink-200 p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-6 pb-3 border-b border-ink-200">Tentang Kami Section</h2>
            
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Tagline</label>
                    <input type="text" name="tentang_tagline" value="{{ old('tentang_tagline', $landingPage->tentang_tagline) }}" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                    @error('tentang_tagline')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Title</label>
                    <input type="text" name="tentang_title" value="{{ old('tentang_title', $landingPage->tentang_title) }}" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                    @error('tentang_title')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Tentang Content</label>
                    <textarea name="tentang_content" id="tentang_content" rows="10" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">{{ old('tentang_content', $landingPage->tentang_content) }}</textarea>
                    @error('tentang_content')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Tentang Image</label>
                    @if($landingPage->tentang_image)
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $landingPage->tentang_image) }}" alt="Current Image" class="w-48 h-auto border border-ink-200 rounded">
                        </div>
                    @endif
                    <input type="file" name="tentang_image" accept="image/*" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                    <p class="mt-1 text-xs text-ink-500">Format: JPEG, PNG, JPG, GIF, WEBP. Max: 2MB</p>
                    @error('tentang_image')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div class="flex items-center p-4 bg-blue-50 border border-blue-200 rounded">
                    <input type="checkbox" name="show_stats" id="show_stats" value="1" {{ old('show_stats', $landingPage->show_stats ?? true) ? 'checked' : '' }} class="w-4 h-4 border-ink-300 text-accent-600 focus:ring-accent-500 focus:ring-2 rounded">
                    <label for="show_stats" class="ml-2 text-sm text-ink-700">Tampilkan Statistik (Skema, Peserta, Kelulusan)</label>
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-ink-900 mb-2">Stat Skema</label>
                        <input type="text" name="stat_skema" value="{{ old('stat_skema', $landingPage->stat_skema) }}" placeholder="15+" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                        @error('stat_skema')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-ink-900 mb-2">Stat Peserta</label>
                        <input type="text" name="stat_peserta" value="{{ old('stat_peserta', $landingPage->stat_peserta) }}" placeholder="2.500+" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                        @error('stat_peserta')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-ink-900 mb-2">Stat Kelulusan</label>
                        <input type="text" name="stat_kelulusan" value="{{ old('stat_kelulusan', $landingPage->stat_kelulusan) }}" placeholder="98%" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                        @error('stat_kelulusan')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>
        </div>

        <!-- Skema Section -->
        <div class="bg-white border border-ink-200 p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-6 pb-3 border-b border-ink-200">Skema Section</h2>
            
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Tagline</label>
                    <input type="text" name="skema_tagline" value="{{ old('skema_tagline', $landingPage->skema_tagline) }}" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                    @error('skema_tagline')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Title</label>
                    <input type="text" name="skema_title" value="{{ old('skema_title', $landingPage->skema_title) }}" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                    @error('skema_title')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Description</label>
                    <textarea name="skema_description" id="skema_description" class="w-full px-4 py-3 border border-ink-200 text-sm rounded" rows="4">{{ old('skema_description', $landingPage->skema_description) }}</textarea>
                    @error('skema_description')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>
            </div>
        </div>

        <!-- Berita Section -->
        <div class="bg-white border border-ink-200 p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-6 pb-3 border-b border-ink-200">Berita Section</h2>
            
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Tagline</label>
                    <input type="text" name="berita_tagline" value="{{ old('berita_tagline', $landingPage->berita_tagline) }}" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                    @error('berita_tagline')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Title</label>
                    <input type="text" name="berita_title" value="{{ old('berita_title', $landingPage->berita_title) }}" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                    @error('berita_title')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>
            </div>
        </div>

        <!-- Kontak Section -->
        <div class="bg-white border border-ink-200 p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-6 pb-3 border-b border-ink-200">Kontak Section</h2>
            
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Tagline</label>
                    <input type="text" name="kontak_tagline" value="{{ old('kontak_tagline', $landingPage->kontak_tagline) }}" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                    @error('kontak_tagline')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Title</label>
                    <input type="text" name="kontak_title" value="{{ old('kontak_title', $landingPage->kontak_title) }}" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                    @error('kontak_title')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Alamat</label>
                    <textarea name="kontak_alamat" class="w-full px-4 py-3 border border-ink-200 text-sm rounded" rows="3">{{ old('kontak_alamat', $landingPage->kontak_alamat) }}</textarea>
                    @error('kontak_alamat')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-ink-900 mb-2">Email 1</label>
                        <input type="email" name="kontak_email_1" value="{{ old('kontak_email_1', $landingPage->kontak_email_1) }}" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                        @error('kontak_email_1')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-ink-900 mb-2">Email 2</label>
                        <input type="email" name="kontak_email_2" value="{{ old('kontak_email_2', $landingPage->kontak_email_2) }}" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                        @error('kontak_email_2')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-ink-900 mb-2">Telepon 1</label>
                        <input type="text" name="kontak_telepon_1" value="{{ old('kontak_telepon_1', $landingPage->kontak_telepon_1) }}" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                        @error('kontak_telepon_1')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-ink-900 mb-2">Telepon 2</label>
                        <input type="text" name="kontak_telepon_2" value="{{ old('kontak_telepon_2', $landingPage->kontak_telepon_2) }}" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                        @error('kontak_telepon_2')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold text-ink-900 mb-2">Jam Operasional (Senin-Jumat)</label>
                        <input type="text" name="kontak_jam_senin_jumat" value="{{ old('kontak_jam_senin_jumat', $landingPage->kontak_jam_senin_jumat) }}" placeholder="08.00 - 16.00 WIB" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                        @error('kontak_jam_senin_jumat')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-ink-900 mb-2">Jam Operasional (Sabtu)</label>
                        <input type="text" name="kontak_jam_sabtu" value="{{ old('kontak_jam_sabtu', $landingPage->kontak_jam_sabtu) }}" placeholder="08.00 - 12.00 WIB" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
                        @error('kontak_jam_sabtu')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex items-center gap-4">
            <button type="submit" class="px-8 py-3 bg-accent-600 text-white text-sm font-semibold hover:bg-accent-700 transition-colors rounded">
                Simpan Perubahan
            </button>
            <a href="{{ route('admin.dashboard') }}" class="px-8 py-3 border border-ink-300 text-ink-700 text-sm font-semibold hover:border-ink-400 hover:text-ink-900 transition-colors rounded">
                Batal
            </a>
        </div>
    </form>
@endsection

@push('scripts')
<!-- TinyMCE -->
<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
<script>
    // Initialize TinyMCE for Hero Content
    tinymce.init({
        license_key: 'gpl',
        selector: '#hero_content',
        height: 500,
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

    // Initialize TinyMCE for Tentang Content
    tinymce.init({
        license_key: 'gpl',
        selector: '#tentang_content',
        height: 500,
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

    // Initialize TinyMCE for Skema Description
    tinymce.init({
        license_key: 'gpl',
        selector: '#skema_description',
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
</script>
@endpush
