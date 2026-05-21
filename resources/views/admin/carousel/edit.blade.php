@extends('layouts.admin')

@section('title', 'Edit Carousel Slide')

@section('content')
    <div class="mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-ink-900 heading-tight mb-2">Edit Carousel Slide</h1>
        <p class="text-ink-500">Update carousel slide for the welcome page</p>
    </div>

    <form method="POST" action="{{ route('admin.carousel.update', $carousel) }}" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div class="bg-white border border-ink-200 p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-6 pb-3 border-b border-ink-200">Slide Content</h2>
            
            <div class="space-y-6">
                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">Title (Optional)</label>
                    <input type="text" name="title" value="{{ old('title', $carousel->title) }}" class="w-full px-4 py-3 border border-ink-200 text-sm rounded" placeholder="Enter slide title">
                    @error('title')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>
            </div>
        </div>

        <div class="bg-white border border-ink-200 p-6">
            <h2 class="text-lg font-bold text-ink-900 mb-6 pb-3 border-b border-ink-200">Slide Design</h2>
            
            <div class="space-y-6">
                @if($carousel->image_path && $carousel->image_path !== 'placeholder.jpg')
                    <div>
                        <label class="block text-sm font-semibold text-ink-900 mb-2">Current Image</label>
                        <img src="{{ asset('storage/' . $carousel->image_path) }}" alt="Current slide image" class="w-48 h-auto rounded border border-ink-200">
                    </div>
                @endif

                <div>
                    <label class="block text-sm font-semibold text-ink-900 mb-2">{{ $carousel->image_path && $carousel->image_path !== 'placeholder.jpg' ? 'Replace Image (Optional)' : 'Background Image (Optional)' }}</label>
                    <input type="file" name="image" accept="image/jpeg,image/jpg" class="w-full px-4 py-3 border border-ink-200 text-sm rounded">
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
                    <input type="number" name="order_index" value="{{ old('order_index', $carousel->order_index) }}" min="0" class="w-full px-4 py-3 border border-ink-200 text-sm rounded" required>
                    <p class="mt-1 text-xs text-ink-500">Lower numbers appear first. Use 0, 1, 2, etc.</p>
                    @error('order_index')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $carousel->is_active) ? 'checked' : '' }} class="w-4 h-4 border-ink-300 text-accent-600 focus:ring-accent-500 focus:ring-2 rounded">
                    <label for="is_active" class="ml-2 text-sm text-ink-600">Active (show on website)</label>
                </div>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="px-8 py-3 bg-accent-600 text-white text-sm font-semibold hover:bg-accent-700 transition-colors rounded">
                Update Slide
            </button>
            <a href="{{ route('admin.carousel.index') }}" class="px-8 py-3 border border-ink-300 text-ink-700 text-sm font-semibold hover:border-ink-400 hover:text-ink-900 transition-colors rounded">
                Cancel
            </a>
        </div>
    </form>
@endsection
