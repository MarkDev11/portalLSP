@extends('admin.layout')

@section('title', 'View Carousel Slide')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Carousel Slide Details</h1>
            <p class="mt-1 text-sm text-gray-600">{{ $slide->title ?: 'Untitled Slide' }}</p>
        </div>
        <div class="flex items-center space-x-3">
            <a href="{{ route('admin.carousel-slides.edit', $slide->id) }}" 
               class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                <i class="fas fa-edit mr-2"></i>Edit
            </a>
            <a href="{{ route('admin.carousel-slides.index') }}" 
               class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                <i class="fas fa-arrow-left mr-2"></i>Back
            </a>
        </div>
    </div>

    <!-- Slide Preview -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="aspect-video bg-gradient-to-br" 
             style="background: linear-gradient(to bottom right, {{ $slide->gradient_from ?? '#1e3a8a' }}, {{ $slide->gradient_to ?? '#3b82f6' }});">
            @if($slide->image_path)
                <img src="{{ asset('storage/' . $slide->image_path) }}" 
                     alt="{{ $slide->title }}"
                     class="w-full h-full object-cover">
            @else
                <div class="w-full h-full flex items-center justify-center text-white">
                    <div class="text-center">
                        <i class="fas fa-image text-6xl mb-4 opacity-50"></i>
                        <p class="text-lg opacity-75">No image uploaded</p>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- Slide Information -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900">Slide Information</h2>
        </div>
        
        <div class="p-6 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Page -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Page</label>
                    <p class="text-base text-gray-900">{{ $slide->page }}</p>
                </div>

                <!-- Order Index -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Order Index</label>
                    <p class="text-base text-gray-900">{{ $slide->order_index }}</p>
                </div>

                <!-- Status -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Status</label>
                    @if($slide->is_active)
                        <span class="inline-block px-3 py-1 bg-green-100 text-green-800 rounded text-sm">
                            <i class="fas fa-check-circle mr-1"></i>Active
                        </span>
                    @else
                        <span class="inline-block px-3 py-1 bg-gray-100 text-gray-800 rounded text-sm">
                            <i class="fas fa-times-circle mr-1"></i>Inactive
                        </span>
                    @endif
                </div>

                <!-- Image Path -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Image Path</label>
                    <p class="text-base text-gray-900 font-mono text-sm">
                        {{ $slide->image_path ?: 'No image' }}
                    </p>
                </div>

                <!-- Created At -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Created</label>
                    <p class="text-base text-gray-900">{{ $slide->created_at->format('d M Y, H:i') }}</p>
                </div>

                <!-- Updated At -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Last Updated</label>
                    <p class="text-base text-gray-900">{{ $slide->updated_at->format('d M Y, H:i') }}</p>
                </div>
            </div>

            <!-- Title -->
            <div>
                <label class="block text-sm font-medium text-gray-500 mb-2">Title</label>
                <div class="p-4 bg-gray-50 rounded-lg border border-gray-200">
                    <p class="text-gray-900">{{ $slide->title ?: 'No title' }}</p>
                </div>
            </div>

            <!-- Description -->
            <div>
                <label class="block text-sm font-medium text-gray-500 mb-2">Description</label>
                <div class="p-4 bg-gray-50 rounded-lg border border-gray-200">
                    <p class="text-gray-900 whitespace-pre-wrap">{{ $slide->description ?: 'No description' }}</p>
                </div>
            </div>

            <!-- Button Info -->
            @if($slide->button_text || $slide->button_link)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-500 mb-2">Button Text</label>
                        <div class="p-4 bg-gray-50 rounded-lg border border-gray-200">
                            <p class="text-gray-900">{{ $slide->button_text ?: 'No button text' }}</p>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500 mb-2">Button Link</label>
                        <div class="p-4 bg-gray-50 rounded-lg border border-gray-200">
                            <p class="text-gray-900 font-mono text-sm">{{ $slide->button_link ?: 'No link' }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Gradient Colors -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-2">Gradient From</label>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded border border-gray-300" 
                             style="background-color: {{ $slide->gradient_from ?? '#1e3a8a' }}"></div>
                        <p class="text-gray-900 font-mono text-sm">{{ $slide->gradient_from ?? 'Not set' }}</p>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-2">Gradient To</label>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded border border-gray-300" 
                             style="background-color: {{ $slide->gradient_to ?? '#3b82f6' }}"></div>
                        <p class="text-gray-900 font-mono text-sm">{{ $slide->gradient_to ?? 'Not set' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Actions -->
    <div class="flex items-center justify-between">
        <form method="POST" action="{{ route('admin.carousel-slides.destroy', $slide->id) }}" 
              onsubmit="return confirm('Are you sure you want to delete this slide? This action cannot be undone.');">
            @csrf
            @method('DELETE')
            <button type="submit" 
                    class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                <i class="fas fa-trash mr-2"></i>Delete Slide
            </button>
        </form>
    </div>
</div>
@endsection
