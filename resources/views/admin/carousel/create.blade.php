@extends('layouts.admin')

@section('title', 'Add New Carousel Slide')

@section('content')
    <div class="mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-ink-900 heading-tight mb-2">Add New Carousel Slide</h1>
        <p class="text-ink-500">Create a new carousel slide for the welcome page</p>
    </div>

    <form method="POST" action="{{ route('admin.carousel.store') }}" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div class="bg-white border border-ink-200 p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-6 pb-3 border-b border-ink-200">Slide Content</h2>
            
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Title (Optional)</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="w-full px-4 py-3 border border-ink-200 text-sm rounded" placeholder="Enter slide title">
                    @error('title')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>
            </div>
        </div>

        <div class="bg-white border border-ink-200 p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-6 pb-3 border-b border-ink-200">Slide Design</h2>
            
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Background Image <span class="text-red-600">*</span></label>
                    <input type="file" name="image" accept="image/jpeg,image/jpg" class="w-full px-4 py-3 border border-ink-200 text-sm rounded" required>
                    <p class="mt-1 text-xs text-ink-500">JPG only. Max 5MB. Will be auto-compressed and resized to 1920x1080px.</p>
                    @error('image')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>
            </div>
        </div>

        <div class="bg-white border border-ink-200 p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-6 pb-3 border-b border-ink-200">Slide Settings</h2>
            
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Order Index</label>
                    <input type="number" name="order_index" value="{{ old('order_index', 0) }}" min="0" class="w-full px-4 py-3 border border-ink-200 text-sm rounded" required>
                    <p class="mt-1 text-xs text-ink-500">Lower numbers appear first. Use 0, 1, 2, etc.</p>
                    @error('order_index')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }} class="w-4 h-4 border-ink-300 text-accent-600 focus:ring-accent-500 focus:ring-2 rounded">
                    <label for="is_active" class="ml-2 text-sm text-ink-600">Active (show on website)</label>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="px-8 py-3 bg-accent-600 text-white text-sm font-semibold hover:bg-accent-700 transition-colors rounded">
                Create Slide
            </button>
            <a href="{{ route('admin.carousel.index') }}" class="px-8 py-3 border border-ink-300 text-ink-700 text-sm font-semibold hover:border-ink-400 hover:text-ink-900 transition-colors rounded">
                Cancel
            </a>
        </div>
    </form>
@endsection
