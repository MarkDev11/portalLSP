@extends('admin.layout')

@section('title', 'Carousel Slides')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Carousel Slides</h1>
            <p class="mt-1 text-sm text-gray-600">Manage carousel slides for your website</p>
        </div>
        <a href="{{ route('admin.carousel-slides.create') }}" 
           class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            <i class="fas fa-plus mr-2"></i>Create New
        </a>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-lg shadow p-6">
        <form method="GET" action="{{ route('admin.carousel-slides.index') }}" class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Page</label>
                <input type="text" name="page" value="{{ request('page') }}" 
                       placeholder="Filter by page"
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select name="is_active" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <option value="">All</option>
                    <option value="1" {{ request('is_active') == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ request('is_active') == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
            
            <div class="flex items-end gap-2">
                <button type="submit" 
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    <i class="fas fa-search mr-2"></i>Filter
                </button>
                <a href="{{ route('admin.carousel-slides.index') }}" 
                   class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                    <i class="fas fa-redo mr-2"></i>Reset
                </a>
            </div>
        </form>
    </div>

    <!-- Slides Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($slides as $slide)
            <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition">
                <!-- Image Preview -->
                <div class="aspect-video bg-gradient-to-br from-{{ $slide->gradient_from ?? 'blue-500' }} to-{{ $slide->gradient_to ?? 'blue-700' }} relative">
                    @if($slide->image_path)
                        <img src="{{ asset('storage/' . $slide->image_path) }}" 
                             alt="{{ $slide->title }}"
                             class="w-full h-full object-cover">
                    @else
                        <div class="absolute inset-0 flex items-center justify-center text-white">
                            <div class="text-center">
                                <i class="fas fa-image text-4xl mb-2 opacity-50"></i>
                                <p class="text-sm opacity-75">No image</p>
                            </div>
                        </div>
                    @endif
                    
                    <!-- Status Badge -->
                    <div class="absolute top-3 right-3">
                        @if($slide->is_active)
                            <span class="px-2 py-1 bg-green-500 text-white rounded text-xs font-semibold">
                                Active
                            </span>
                        @else
                            <span class="px-2 py-1 bg-gray-500 text-white rounded text-xs font-semibold">
                                Inactive
                            </span>
                        @endif
                    </div>

                    <!-- Order Badge -->
                    <div class="absolute top-3 left-3">
                        <span class="px-2 py-1 bg-blue-600 text-white rounded text-xs font-semibold">
                            #{{ $slide->order_index }}
                        </span>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-900 mb-1">
                        {{ $slide->title ?: 'Untitled Slide' }}
                    </h3>
                    <p class="text-sm text-gray-600 mb-2 line-clamp-2">
                        {{ $slide->description ?: 'No description' }}
                    </p>
                    
                    <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                        <span><i class="fas fa-globe mr-1"></i>{{ $slide->page }}</span>
                        <span><i class="fas fa-clock mr-1"></i>{{ $slide->updated_at->format('d M Y') }}</span>
                    </div>

                    @if($slide->button_text)
                        <div class="mb-4 p-2 bg-gray-50 rounded text-xs">
                            <i class="fas fa-link mr-1 text-gray-400"></i>
                            <span class="text-gray-700">{{ $slide->button_text }}</span>
                            @if($slide->button_link)
                                <span class="text-gray-400 ml-1">→ {{ Str::limit($slide->button_link, 20) }}</span>
                            @endif
                        </div>
                    @endif

                    <!-- Actions -->
                    <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                        <div class="flex items-center space-x-2">
                            <a href="{{ route('admin.carousel-slides.show', $slide->id) }}" 
                               class="text-blue-600 hover:text-blue-900" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.carousel-slides.edit', $slide->id) }}" 
                               class="text-green-600 hover:text-green-900" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form method="POST" action="{{ route('admin.carousel-slides.destroy', $slide->id) }}" 
                                  class="inline"
                                  onsubmit="return confirm('Are you sure you want to delete this slide?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full">
                <div class="bg-white rounded-lg shadow p-12 text-center">
                    <i class="fas fa-images text-4xl mb-4 text-gray-300"></i>
                    <p class="text-lg text-gray-500 mb-4">No carousel slides found</p>
                    <a href="{{ route('admin.carousel-slides.create') }}" 
                       class="inline-block px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                        Create your first slide
                    </a>
                </div>
            </div>
        @endforelse
    </div>

    <!-- Pagination -->
    @if($slides->hasPages())
        <div class="bg-white rounded-lg shadow p-4">
            {{ $slides->links() }}
        </div>
    @endif
</div>
@endsection
