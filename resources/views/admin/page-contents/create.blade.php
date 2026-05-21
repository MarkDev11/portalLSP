@extends('admin.layout')

@section('title', 'Create Page Content')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Create Page Content</h1>
            <p class="mt-1 text-sm text-gray-600">Add a new content section to your website</p>
        </div>
        <a href="{{ route('admin.page-contents.index') }}" 
           class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
            <i class="fas fa-arrow-left mr-2"></i>Back to List
        </a>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-lg shadow p-6">
        <form method="POST" action="{{ route('admin.page-contents.store') }}" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Page -->
                <div>
                    <label for="page" class="block text-sm font-medium text-gray-700 mb-2">
                        Page <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="page" id="page" value="{{ old('page') }}" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('page') border-red-500 @enderror"
                           placeholder="e.g., welcome, about, contact">
                    @error('page')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-xs text-gray-500">The page where this content appears</p>
                </div>

                <!-- Section -->
                <div>
                    <label for="section" class="block text-sm font-medium text-gray-700 mb-2">
                        Section <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="section" id="section" value="{{ old('section') }}" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('section') border-red-500 @enderror"
                           placeholder="e.g., hero, about, footer">
                    @error('section')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-xs text-gray-500">The section within the page</p>
                </div>

                <!-- Element Key -->
                <div>
                    <label for="element_key" class="block text-sm font-medium text-gray-700 mb-2">
                        Element Key <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="element_key" id="element_key" value="{{ old('element_key') }}" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('element_key') border-red-500 @enderror"
                           placeholder="e.g., hero_title, about_description">
                    @error('element_key')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-xs text-gray-500">Unique identifier for this element</p>
                </div>

                <!-- Element Type -->
                <div>
                    <label for="element_type" class="block text-sm font-medium text-gray-700 mb-2">
                        Element Type <span class="text-red-500">*</span>
                    </label>
                    <select name="element_type" id="element_type" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('element_type') border-red-500 @enderror">
                        <option value="">Select type...</option>
                        <option value="hero" {{ old('element_type') == 'hero' ? 'selected' : '' }}>Hero</option>
                        <option value="about" {{ old('element_type') == 'about' ? 'selected' : '' }}>About</option>
                        <option value="schemes" {{ old('element_type') == 'schemes' ? 'selected' : '' }}>Schemes</option>
                        <option value="news" {{ old('element_type') == 'news' ? 'selected' : '' }}>News</option>
                        <option value="contact" {{ old('element_type') == 'contact' ? 'selected' : '' }}>Contact</option>
                        <option value="footer" {{ old('element_type') == 'footer' ? 'selected' : '' }}>Footer</option>
                        <option value="text" {{ old('element_type') == 'text' ? 'selected' : '' }}>Text</option>
                        <option value="image" {{ old('element_type') == 'image' ? 'selected' : '' }}>Image</option>
                        <option value="custom" {{ old('element_type') == 'custom' ? 'selected' : '' }}>Custom</option>
                    </select>
                    @error('element_type')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Content -->
            <div>
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
                    Content
                </label>
                <textarea name="content" id="content" rows="6"
                          class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('content') border-red-500 @enderror"
                          placeholder="Enter the main content text...">{{ old('content') }}</textarea>
                @error('content')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
                <p class="mt-1 text-xs text-gray-500">The main text content for this element</p>
            </div>

            <!-- Styles (JSON) -->
            <div>
                <label for="styles" class="block text-sm font-medium text-gray-700 mb-2">
                    Styles (JSON)
                </label>
                <textarea name="styles" id="styles" rows="4"
                          class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent font-mono text-sm @error('styles') border-red-500 @enderror"
                          placeholder='{"title": "Example Title", "subtitle": "Example Subtitle"}'>{{ old('styles') }}</textarea>
                @error('styles')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
                <p class="mt-1 text-xs text-gray-500">JSON object for styling options (optional)</p>
            </div>

            <!-- Settings (JSON) -->
            <div>
                <label for="settings" class="block text-sm font-medium text-gray-700 mb-2">
                    Settings (JSON)
                </label>
                <textarea name="settings" id="settings" rows="4"
                          class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent font-mono text-sm @error('settings') border-red-500 @enderror"
                          placeholder='{"key": "value", "option": true}'>{{ old('settings') }}</textarea>
                @error('settings')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
                <p class="mt-1 text-xs text-gray-500">JSON object for additional settings (optional)</p>
            </div>

            <!-- Is Active -->
            <div class="flex items-center">
                <input type="checkbox" name="is_active" id="is_active" value="1" 
                       {{ old('is_active', true) ? 'checked' : '' }}
                       class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="is_active" class="ml-2 text-sm font-medium text-gray-700">
                    Active (visible on website)
                </label>
            </div>

            <!-- Form Actions -->
            <div class="flex items-center justify-end space-x-3 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.page-contents.index') }}" 
                   class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                    Cancel
                </a>
                <button type="submit" 
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    <i class="fas fa-save mr-2"></i>Create Content
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
