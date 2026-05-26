@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Tambah Berita Baru</h1>
        <a href="{{ route('admin.news.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
            <i class="fas fa-arrow-left mr-2"></i>Kembali
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Title -->
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                    Judul Berita <span class="text-red-500">*</span>
                </label>
                <input type="text" 
                       name="title" 
                       id="title" 
                       value="{{ old('title') }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror"
                       placeholder="Masukkan judul berita"
                       required>
                @error('title')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Content with Text Editor -->
            <div class="mb-6">
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
                    Konten Berita <span class="text-red-500">*</span>
                </label>
                <textarea name="content"
                          id="content"
                          rows="15"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('content') border-red-500 @enderror">{{ old('content') }}</textarea>
                @error('content')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Image Upload -->
            <div class="mb-6">
                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">
                    Gambar Berita
                </label>
                <input type="file" 
                       name="image" 
                       id="image" 
                       accept="image/*"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('image') border-red-500 @enderror"
                       onchange="previewImage(event)">
                @error('image')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
                <p class="mt-1 text-sm text-gray-500">Format: JPG, PNG, GIF. Maksimal 2MB.</p>
                
                <!-- Image Preview -->
                <div id="imagePreview" class="mt-4 hidden">
                    <img id="preview" src="" alt="Preview" class="max-w-md h-auto rounded-lg shadow-md">
                </div>
            </div>

            <!-- Publish Mode -->
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Publikasi <span class="text-red-500">*</span>
                </label>
                <div class="space-y-2">
                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="radio" name="publish_mode" value="now"
                               {{ old('publish_mode', 'now') === 'now' ? 'checked' : '' }}
                               onchange="togglePublishDate()"
                               class="mt-1">
                        <span>
                            <span class="font-medium text-gray-800">Langsung publish</span>
                            <span class="block text-sm text-gray-500">Berita langsung tayang setelah disimpan.</span>
                        </span>
                    </label>
                    <label class="flex items-start gap-3 cursor-pointer">
                        <input type="radio" name="publish_mode" value="schedule"
                               {{ old('publish_mode', 'now') === 'schedule' ? 'checked' : '' }}
                               onchange="togglePublishDate()"
                               class="mt-1">
                        <span>
                            <span class="font-medium text-gray-800">Set tanggal</span>
                            <span class="block text-sm text-gray-500">Pilih tanggal & waktu publish. Kosongkan untuk simpan sebagai draft.</span>
                        </span>
                    </label>
                </div>
                @error('publish_mode')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <!-- Published Date (shown only when "Set tanggal" is selected) -->
            <div class="mb-6" id="publishDateContainer">
                <label for="published_at" class="block text-sm font-medium text-gray-700 mb-2">
                    Tanggal Publish
                </label>
                <input type="datetime-local"
                       name="published_at"
                       id="published_at"
                       value="{{ old('published_at') }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('published_at') border-red-500 @enderror">
                @error('published_at')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
                <p class="mt-1 text-sm text-gray-500">Kosongkan untuk simpan sebagai draft.</p>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end space-x-3">
                <a href="{{ route('admin.news.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-6 rounded-lg transition duration-200">
                    Batal
                </a>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-200">
                    <i class="fas fa-save mr-2"></i>Simpan Berita
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<!-- TinyMCE -->
<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
<script>
    // Initialize TinyMCE
    tinymce.init({
        license_key: 'gpl',
        selector: '#content',
        height: 500,
        menubar: true,
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks | ' +
            'bold italic forecolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
        language: 'id',
        branding: false,
        promotion: false
    });

    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function() {
            if (typeof tinymce !== 'undefined' && tinymce.get('content')) {
                tinymce.triggerSave();
            }
            return true;
        });
    }

    // Image Preview
    function previewImage(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('preview');
        const previewContainer = document.getElementById('imagePreview');

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                previewContainer.classList.remove('hidden');
            }

            reader.readAsDataURL(file);
        } else {
            previewContainer.classList.add('hidden');
        }
    }

    // Toggle publish date field based on radio selection
    function togglePublishDate() {
        const checked = document.querySelector('input[name="publish_mode"]:checked');
        const container = document.getElementById('publishDateContainer');
        if (checked && checked.value === 'schedule') {
            container.style.display = 'block';
        } else {
            container.style.display = 'none';
        }
    }

    // Initialize on page load
    togglePublishDate();
</script>
@endpush
@endsection
