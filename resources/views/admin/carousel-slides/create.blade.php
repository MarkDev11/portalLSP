@extends('admin.layout')

@section('title', 'Create Carousel Slide')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Create Carousel Slide</h1>
            <p class="mt-1 text-sm text-gray-600">Add a new slide to your carousel</p>
        </div>
        <a href="{{ route('admin.carousel-slides.index') }}" 
           class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
            <i class="fas fa-arrow-left mr-2"></i>Back to List
        </a>
    </div>

    <!-- Form -->
    <div class="bg-white rounded-lg shadow p-6">
        <form method="POST" action="{{ route('admin.carousel-slides.store') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Page -->
                <div>
                    <label for="page" class="block text-sm font-medium text-gray-700 mb-2">
                        Page <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="page" id="page" value="{{ old('page', 'welcome') }}" required
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('page') border-red-500 @enderror"
                           placeholder="e.g., welcome, home">
                    @error('page')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Order Index -->
                <div>
                    <label for="order_index" class="block text-sm font-medium text-gray-700 mb-2">
                        Order Index <span class="text-red-500">*</span>
                    </label>
                    <input type="number" name="order_index" id="order_index" value="{{ old('order_index', 0) }}" required min="0"
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('order_index') border-red-500 @enderror"
                           placeholder="0">
                    @error('order_index')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-xs text-gray-500">Lower numbers appear first</p>
                </div>
            </div>

            <!-- Image Upload -->
            <div>
                <label for="image_path" class="block text-sm font-medium text-gray-700 mb-2">
                    Slide Image
                </label>
                <input type="file" name="image_path" id="image_path" accept="image/*"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('image_path') border-red-500 @enderror">
                @error('image_path')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
                <p class="mt-1 text-xs text-gray-500">Max 2MB. Recommended: 1920x1080px</p>
            </div>

            <!-- Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                    Title
                </label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('title') border-red-500 @enderror"
                       placeholder="Slide title">
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                    Description
                </label>
                <textarea name="description" id="description" rows="3"
                          class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('description') border-red-500 @enderror"
                          placeholder="Slide description or subtitle">{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Button Text -->
                <div>
                    <label for="button_text" class="block text-sm font-medium text-gray-700 mb-2">
                        Button Text
                    </label>
                    <input type="text" name="button_text" id="button_text" value="{{ old('button_text') }}"
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('button_text') border-red-500 @enderror"
                           placeholder="e.g., Learn More">
                    @error('button_text')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Button Link -->
                <div>
                    <label for="button_link" class="block text-sm font-medium text-gray-700 mb-2">
                        Button Link
                    </label>
                    <input type="text" name="button_link" id="button_link" value="{{ old('button_link') }}"
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('button_link') border-red-500 @enderror"
                           placeholder="/about">
                    @error('button_link')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Gradient From -->
                <div>
                    <label for="gradient_from" class="block text-sm font-medium text-gray-700 mb-2">
                        Gradient From (Color)
                    </label>
                    <input type="text" name="gradient_from" id="gradient_from" value="{{ old('gradient_from', '#1e3a8a') }}"
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('gradient_from') border-red-500 @enderror"
                           placeholder="#1e3a8a">
                    @error('gradient_from')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-xs text-gray-500">Hex color code (used if no image)</p>
                </div>

                <!-- Gradient To -->
                <div>
                    <label for="gradient_to" class="block text-sm font-medium text-gray-700 mb-2">
                        Gradient To (Color)
                    </label>
                    <input type="text" name="gradient_to" id="gradient_to" value="{{ old('gradient_to', '#3b82f6') }}"
                           class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('gradient_to') border-red-500 @enderror"
                           placeholder="#3b82f6">
                    @error('gradient_to')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-xs text-gray-500">Hex color code (used if no image)</p>
                </div>
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
                <a href="{{ route('admin.carousel-slides.index') }}" 
                   class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                    Cancel
                </a>
                <button type="submit" 
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    <i class="fas fa-save mr-2"></i>Create Slide
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
