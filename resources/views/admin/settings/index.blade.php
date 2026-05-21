@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Header -->
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-ink-900">Settings</h1>
        <p class="text-ink-600 mt-2">Manage site configuration, branding, and appearance</p>
    </div>

    <!-- Success Message -->
    @if(session('success'))
    <div class="bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-6">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    </div>
    @endif

    <!-- Settings Form -->
    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf
        @method('PUT')

        <!-- Site Information Section -->
        <div class="bg-white rounded-lg shadow-sm border border-ink-200 p-6">
            <h2 class="text-xl font-semibold text-ink-900 mb-4">Site Information</h2>
            
            <div>
                <label for="site_name" class="block text-sm font-medium text-ink-700 mb-2">Site Name</label>
                <input type="text" 
                       id="site_name" 
                       name="site_name" 
                       value="{{ old('site_name', $setting->site_name) }}"
                       class="w-full px-4 py-2 border border-ink-300 rounded-lg focus:ring-2 focus:ring-accent-500 focus:border-accent-500 @error('site_name') border-red-500 @enderror"
                       required>
                @error('site_name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Site Tagline -->
            <div class="mt-4">
                <label for="site_tagline" class="block text-sm font-medium text-ink-700 mb-2">Site Tagline</label>
                <input type="text" 
                       id="site_tagline" 
                       name="site_tagline" 
                       value="{{ old('site_tagline', $setting->site_tagline) }}"
                       class="w-full px-4 py-2 border border-ink-300 rounded-lg focus:ring-2 focus:ring-accent-500 focus:border-accent-500 @error('site_tagline') border-red-500 @enderror"
                       placeholder="Lembaga Sertifikasi Profesi">
                @error('site_tagline')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <!-- Footer Description -->
            <div class="mt-4">
                <label for="footer_description" class="block text-sm font-medium text-ink-700 mb-2">Footer Description</label>
                <textarea id="footer_description" 
                          name="footer_description" 
                          rows="3"
                          class="w-full px-4 py-2 border border-ink-300 rounded-lg focus:ring-2 focus:ring-accent-500 focus:border-accent-500 @error('footer_description') border-red-500 @enderror"
                          placeholder="Deskripsi singkat untuk footer">{{ old('footer_description', $setting->footer_description) }}</textarea>
                @error('footer_description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Logo & Branding Section -->
        <div class="bg-white rounded-lg shadow-sm border border-ink-200 p-6">
            <h2 class="text-xl font-semibold text-ink-900 mb-4">Logo & Branding</h2>
            
            <div class="space-y-6">
                <!-- Long Logo Upload -->
                <div>
                    <label for="logo_long" class="block text-sm font-medium text-ink-700 mb-2">
                        Long Logo (with text)
                    </label>
                    <p class="text-sm text-ink-500 mb-3">Recommended: PNG or SVG, max 2MB</p>
                    
                    @if($setting->logo_long_path)
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $setting->logo_long_path) }}" 
                             alt="Current long logo" 
                             class="h-16 object-contain border border-ink-200 rounded p-2 bg-white"
                             id="current_logo_long">
                    </div>
                    @endif
                    
                    <input type="file" 
                           id="logo_long" 
                           name="logo_long" 
                           accept="image/png,image/jpeg,image/jpg,image/svg+xml"
                           class="block w-full text-sm text-ink-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-accent-50 file:text-accent-700 hover:file:bg-accent-100 @error('logo_long') border-red-500 @enderror">
                    
                    <div id="preview_logo_long" class="mt-3 hidden">
                        <p class="text-sm text-ink-600 mb-2">Preview:</p>
                        <img src="" alt="Logo preview" class="h-16 object-contain border border-ink-200 rounded p-2 bg-white">
                    </div>
                    
                    @error('logo_long')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Icon Logo Upload -->
                <div>
                    <label for="logo_icon" class="block text-sm font-medium text-ink-700 mb-2">
                        Icon Logo (icon only)
                    </label>
                    <p class="text-sm text-ink-500 mb-3">Recommended: PNG or SVG, max 2MB</p>
                    
                    @if($setting->logo_icon_path)
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $setting->logo_icon_path) }}" 
                             alt="Current icon logo" 
                             class="h-16 object-contain border border-ink-200 rounded p-2 bg-white"
                             id="current_logo_icon">
                    </div>
                    @endif
                    
                    <input type="file" 
                           id="logo_icon" 
                           name="logo_icon" 
                           accept="image/png,image/jpeg,image/jpg,image/svg+xml"
                           class="block w-full text-sm text-ink-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-accent-50 file:text-accent-700 hover:file:bg-accent-100 @error('logo_icon') border-red-500 @enderror">
                    
                    <div id="preview_logo_icon" class="mt-3 hidden">
                        <p class="text-sm text-ink-600 mb-2">Preview:</p>
                        <img src="" alt="Logo preview" class="h-16 object-contain border border-ink-200 rounded p-2 bg-white">
                    </div>
                    
                    @error('logo_icon')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Favicon Upload -->
                <div>
                    <label for="favicon" class="block text-sm font-medium text-ink-700 mb-2">
                        Favicon (browser tab icon)
                    </label>
                    <p class="text-sm text-ink-500 mb-3">Recommended: ICO, PNG, or SVG, max 1MB</p>
                    
                    @if($setting->favicon_path)
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $setting->favicon_path) }}" 
                             alt="Current favicon" 
                             class="h-8 w-8 object-contain border border-ink-200 rounded p-1 bg-white"
                             id="current_favicon">
                    </div>
                    @endif
                    
                    <input type="file" 
                           id="favicon" 
                           name="favicon" 
                           accept="image/png,image/jpeg,image/jpg,image/x-icon,image/svg+xml"
                           class="block w-full text-sm text-ink-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-accent-50 file:text-accent-700 hover:file:bg-accent-100 @error('favicon') border-red-500 @enderror">
                    
                    <div id="preview_favicon" class="mt-3 hidden">
                        <p class="text-sm text-ink-600 mb-2">Preview:</p>
                        <img src="" alt="Favicon preview" class="h-8 w-8 object-contain border border-ink-200 rounded p-1 bg-white">
                    </div>
                    
                    @error('favicon')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Logo Type Toggle -->
                <div>
                    <label class="block text-sm font-medium text-ink-700 mb-3">Logo Display Style</label>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="radio" 
                                   name="logo_type" 
                                   value="long" 
                                   {{ old('logo_type', $setting->logo_type) == 'long' ? 'checked' : '' }}
                                   class="w-4 h-4 text-accent-600 border-ink-300 focus:ring-accent-500">
                            <span class="ml-2 text-ink-700">Long logo (with text)</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" 
                                   name="logo_type" 
                                   value="icon" 
                                   {{ old('logo_type', $setting->logo_type) == 'icon' ? 'checked' : '' }}
                                   class="w-4 h-4 text-accent-600 border-ink-300 focus:ring-accent-500">
                            <span class="ml-2 text-ink-700">Icon only</span>
                        </label>
                    </div>
                    @error('logo_type')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <div class="bg-white rounded-lg shadow-sm border border-ink-200 p-6">
            <h2 class="text-xl font-semibold text-ink-900 mb-4">Services (Layanan)</h2>
            <p class="text-sm text-ink-600 mb-6">Configure the services displayed in the footer</p>
            
            <div class="space-y-6">
                <!-- Service 1 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="service_1_name" class="block text-sm font-medium text-ink-700 mb-2">Service 1 Name</label>
                        <input type="text" 
                               id="service_1_name" 
                               name="service_1_name" 
                               value="{{ old('service_1_name', $setting->service_1_name) }}"
                               class="w-full px-4 py-2 border border-ink-300 rounded-lg focus:ring-2 focus:ring-accent-500 focus:border-accent-500 @error('service_1_name') border-red-500 @enderror"
                               placeholder="Sertifikasi">
                        @error('service_1_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="service_1_url" class="block text-sm font-medium text-ink-700 mb-2">Service 1 URL</label>
                        <input type="url" 
                               id="service_1_url" 
                               name="service_1_url" 
                               value="{{ old('service_1_url', $setting->service_1_url) }}"
                               class="w-full px-4 py-2 border border-ink-300 rounded-lg focus:ring-2 focus:ring-accent-500 focus:border-accent-500 @error('service_1_url') border-red-500 @enderror"
                               placeholder="https://example.com/service1">
                        @error('service_1_url')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="service_2_name" class="block text-sm font-medium text-ink-700 mb-2">Service 2 Name</label>
                        <input type="text" 
                               id="service_2_name" 
                               name="service_2_name" 
                               value="{{ old('service_2_name', $setting->service_2_name) }}"
                               class="w-full px-4 py-2 border border-ink-300 rounded-lg focus:ring-2 focus:ring-accent-500 focus:border-accent-500 @error('service_2_name') border-red-500 @enderror"
                               placeholder="Pelatihan">
                        @error('service_2_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="service_2_url" class="block text-sm font-medium text-ink-700 mb-2">Service 2 URL</label>
                        <input type="url" 
                               id="service_2_url" 
                               name="service_2_url" 
                               value="{{ old('service_2_url', $setting->service_2_url) }}"
                               class="w-full px-4 py-2 border border-ink-300 rounded-lg focus:ring-2 focus:ring-accent-500 focus:border-accent-500 @error('service_2_url') border-red-500 @enderror"
                               placeholder="https://example.com/service2">
                        @error('service_2_url')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="service_3_name" class="block text-sm font-medium text-ink-700 mb-2">Service 3 Name</label>
                        <input type="text" 
                               id="service_3_name" 
                               name="service_3_name" 
                               value="{{ old('service_3_name', $setting->service_3_name) }}"
                               class="w-full px-4 py-2 border border-ink-300 rounded-lg focus:ring-2 focus:ring-accent-500 focus:border-accent-500 @error('service_3_name') border-red-500 @enderror"
                               placeholder="Asesmen">
                        @error('service_3_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="service_3_url" class="block text-sm font-medium text-ink-700 mb-2">Service 3 URL</label>
                        <input type="url" 
                               id="service_3_url" 
                               name="service_3_url" 
                               value="{{ old('service_3_url', $setting->service_3_url) }}"
                               class="w-full px-4 py-2 border border-ink-300 rounded-lg focus:ring-2 focus:ring-accent-500 focus:border-accent-500 @error('service_3_url') border-red-500 @enderror"
                               placeholder="https://example.com/service3">
                        @error('service_3_url')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="service_4_name" class="block text-sm font-medium text-ink-700 mb-2">Service 4 Name</label>
                        <input type="text" 
                               id="service_4_name" 
                               name="service_4_name" 
                               value="{{ old('service_4_name', $setting->service_4_name) }}"
                               class="w-full px-4 py-2 border border-ink-300 rounded-lg focus:ring-2 focus:ring-accent-500 focus:border-accent-500 @error('service_4_name') border-red-500 @enderror"
                               placeholder="Konsultasi">
                        @error('service_4_name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="service_4_url" class="block text-sm font-medium text-ink-700 mb-2">Service 4 URL</label>
                        <input type="url" 
                               id="service_4_url" 
                               name="service_4_url" 
                               value="{{ old('service_4_url', $setting->service_4_url) }}"
                               class="w-full px-4 py-2 border border-ink-300 rounded-lg focus:ring-2 focus:ring-accent-500 focus:border-accent-500 @error('service_4_url') border-red-500 @enderror"
                               placeholder="https://example.com/service4">
                        @error('service_4_url')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <!-- Color Customization Section -->
        <div class="bg-white rounded-lg shadow-sm border border-ink-200 p-6">
            <h2 class="text-xl font-semibold text-ink-900 mb-4">Color Customization</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Header Color -->
                <div>
                    <label for="header_color" class="block text-sm font-medium text-ink-700 mb-2">
                        Header Background Color
                    </label>
                    <div class="flex items-center space-x-3">
                        <input type="color" 
                               id="header_color" 
                               name="header_color" 
                               value="{{ old('header_color', $setting->header_color) }}"
                               class="h-10 w-20 rounded border border-ink-300 cursor-pointer">
                        <input type="text" 
                               id="header_color_text" 
                               value="{{ old('header_color', $setting->header_color) }}"
                               class="flex-1 px-4 py-2 border border-ink-300 rounded-lg focus:ring-2 focus:ring-accent-500 focus:border-accent-500 @error('header_color') border-red-500 @enderror"
                               pattern="^#[0-9A-Fa-f]{6}$"
                               placeholder="#1e293b">
                    </div>
                    @error('header_color')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Footer Color -->
                <div>
                    <label for="footer_color" class="block text-sm font-medium text-ink-700 mb-2">
                        Footer Background Color
                    </label>
                    <div class="flex items-center space-x-3">
                        <input type="color" 
                               id="footer_color" 
                               name="footer_color" 
                               value="{{ old('footer_color', $setting->footer_color) }}"
                               class="h-10 w-20 rounded border border-ink-300 cursor-pointer">
                        <input type="text" 
                               id="footer_color_text" 
                               value="{{ old('footer_color', $setting->footer_color) }}"
                               class="flex-1 px-4 py-2 border border-ink-300 rounded-lg focus:ring-2 focus:ring-accent-500 focus:border-accent-500 @error('footer_color') border-red-500 @enderror"
                               pattern="^#[0-9A-Fa-f]{6}$"
                               placeholder="#1e293b">
                    </div>
                    @error('footer_color')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Accent Color -->
                <div>
                    <label for="accent_color" class="block text-sm font-medium text-ink-700 mb-2">
                        Accent Color (buttons, links)
                    </label>
                    <div class="flex items-center space-x-3">
                        <input type="color" 
                               id="accent_color" 
                               name="accent_color" 
                               value="{{ old('accent_color', $setting->accent_color) }}"
                               class="h-10 w-20 rounded border border-ink-300 cursor-pointer">
                        <input type="text" 
                               id="accent_color_text" 
                               value="{{ old('accent_color', $setting->accent_color) }}"
                               class="flex-1 px-4 py-2 border border-ink-300 rounded-lg focus:ring-2 focus:ring-accent-500 focus:border-accent-500 @error('accent_color') border-red-500 @enderror"
                               pattern="^#[0-9A-Fa-f]{6}$"
                               placeholder="#2563eb">
                    </div>
                    @error('accent_color')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Sidebar Color -->
                <div>
                    <label for="sidebar_color" class="block text-sm font-medium text-ink-700 mb-2">
                        Admin Sidebar Color
                    </label>
                    <div class="flex items-center space-x-3">
                        <input type="color" 
                               id="sidebar_color" 
                               name="sidebar_color" 
                               value="{{ old('sidebar_color', $setting->sidebar_color) }}"
                               class="h-10 w-20 rounded border border-ink-300 cursor-pointer">
                        <input type="text" 
                               id="sidebar_color_text" 
                               value="{{ old('sidebar_color', $setting->sidebar_color) }}"
                               class="flex-1 px-4 py-2 border border-ink-300 rounded-lg focus:ring-2 focus:ring-accent-500 focus:border-accent-500 @error('sidebar_color') border-red-500 @enderror"
                               pattern="^#[0-9A-Fa-f]{6}$"
                               placeholder="#0f172a">
                    </div>
                    @error('sidebar_color')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Form Actions -->
        <div class="flex items-center justify-end space-x-4">
            <a href="{{ route('admin.dashboard') }}" 
               class="px-6 py-2 border border-ink-300 text-ink-700 rounded-lg hover:bg-ink-50 transition">
                Cancel
            </a>
            <button type="submit" 
                    class="px-6 py-2 bg-accent-600 text-white rounded-lg hover:bg-accent-700 transition">
                Save Settings
            </button>
        </div>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Color picker sync - sync color input with text input
    const colorInputs = [
        { picker: 'header_color', text: 'header_color_text' },
        { picker: 'footer_color', text: 'footer_color_text' },
        { picker: 'accent_color', text: 'accent_color_text' },
        { picker: 'sidebar_color', text: 'sidebar_color_text' }
    ];

    colorInputs.forEach(({ picker, text }) => {
        const pickerEl = document.getElementById(picker);
        const textEl = document.getElementById(text);

        // Sync picker -> text
        pickerEl.addEventListener('input', function() {
            textEl.value = this.value;
        });

        // Sync text -> picker
        textEl.addEventListener('input', function() {
            if (/^#[0-9A-Fa-f]{6}$/.test(this.value)) {
                pickerEl.value = this.value;
            }
        });
    });

    // File preview functionality
    function setupFilePreview(inputId, previewId) {
        const input = document.getElementById(inputId);
        const preview = document.getElementById(previewId);

        input.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = preview.querySelector('img');
                    img.src = e.target.result;
                    preview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        });
    }

    // Setup previews for all file inputs
    setupFilePreview('logo_long', 'preview_logo_long');
    setupFilePreview('logo_icon', 'preview_logo_icon');
    setupFilePreview('favicon', 'preview_favicon');
});
</script>
@endsection
