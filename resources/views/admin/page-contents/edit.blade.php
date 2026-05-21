@extends('admin.layout')

@section('title', 'Edit Page Content')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Edit Page Content</h1>
            <p class="mt-1 text-sm text-gray-600">Update content section: {{ $content->element_key }}</p>
        </div>
        <a href="{{ route('admin.page-contents.index') }}" 
           class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
            <i class="fas fa-arrow-left mr-2"></i>Back to List
        </a>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-lg shadow p-6">
        <form method="POST" action="{{ route('admin.page-contents.update', $content->id) }}" class="space-y-6">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Page -->
                <div>
                    <label for="page" class="block text-sm font-medium text-gray-700 mb-2">
                        Page <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="page" id="page" value="{{ old('page', $content->page) }}" required
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
                    <input type="text" name="section" id="section" value="{{ old('section', $content->section) }}" required
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
                    <input type="text" name="element_key" id="element_key" value="{{ old('element_key', $content->element_key) }}" required
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
                        <option value="hero" {{ old('element_type', $content->element_type) == 'hero' ? 'selected' : '' }}>Hero</option>
                        <option value="about" {{ old('element_type', $content->element_type) == 'about' ? 'selected' : '' }}>About</option>
                        <option value="schemes" {{ old('element_type', $content->element_type) == 'schemes' ? 'selected' : '' }}>Schemes</option>
                        <option value="news" {{ old('element_type', $content->element_type) == 'news' ? 'selected' : '' }}>News</option>
                        <option value="contact" {{ old('element_type', $content->element_type) == 'contact' ? 'selected' : '' }}>Contact</option>
                        <option value="footer" {{ old('element_type', $content->element_type) == 'footer' ? 'selected' : '' }}>Footer</option>
                        <option value="text" {{ old('element_type', $content->element_type) == 'text' ? 'selected' : '' }}>Text</option>
                        <option value="image" {{ old('element_type', $content->element_type) == 'image' ? 'selected' : '' }}>Image</option>
                        <option value="custom" {{ old('element_type', $content->element_type) == 'custom' ? 'selected' : '' }}>Custom</option>
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
                          placeholder="Enter the main content text...">{{ old('content', $content->content) }}</textarea>
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
                          placeholder='{"title": "Example Title", "subtitle": "Example Subtitle"}'>{{ old('styles', json_encode($content->styles, JSON_PRETTY_PRINT)) }}</textarea>
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
                          placeholder='{"key": "value", "option": true}'>{{ old('settings', json_encode($content->settings, JSON_PRETTY_PRINT)) }}</textarea>
                @error('settings')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
                <p class="mt-1 text-xs text-gray-500">JSON object for additional settings (optional)</p>
            </div>

            <!-- Is Active -->
            <div class="flex items-center">
                <input type="checkbox" name="is_active" id="is_active" value="1" 
                       {{ old('is_active', $content->is_active) ? 'checked' : '' }}
                       class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                <label for="is_active" class="ml-2 text-sm font-medium text-gray-700">
                    Active (visible on website)
                </label>
            </div>

            <!-- Change Reason -->
            <div>
                <label for="change_reason" class="block text-sm font-medium text-gray-700 mb-2">
                    Change Reason
                </label>
                <input type="text" name="change_reason" id="change_reason" value="{{ old('change_reason') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                       placeholder="Brief description of changes made...">
                <p class="mt-1 text-xs text-gray-500">Optional: Describe what you changed and why</p>
            </div>

            <!-- Form Actions -->
            <div class="flex items-center justify-end space-x-3 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.page-contents.index') }}" 
                   class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                    Cancel
                </a>
                <button type="submit" 
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    <i class="fas fa-save mr-2"></i>Update Content
                </button>
            </div>
        </form>
    </div>

    <!-- Last Updated Info -->
    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
        <div class="flex items-center text-sm text-blue-800">
            <i class="fas fa-info-circle mr-2"></i>
            <span>Last updated: {{ $content->updated_at->format('d M Y, H:i') }}</span>
        </div>
    </div>
</div>
@endsection
