@extends('admin.layout')

@section('title', 'View Page Content')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Page Content Details</h1>
            <p class="mt-1 text-sm text-gray-600">{{ $content->element_key }}</p>
        </div>
        <div class="flex items-center space-x-3">
            <a href="{{ route('admin.page-contents.edit', $content->id) }}" 
               class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                <i class="fas fa-edit mr-2"></i>Edit
            </a>
            <a href="{{ route('admin.page-contents.index') }}" 
               class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                <i class="fas fa-arrow-left mr-2"></i>Back
            </a>
        </div>
    </div>

    <!-- Content Details -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900">Content Information</h2>
        </div>
        
        <div class="p-6 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Page -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Page</label>
                    <p class="text-base text-gray-900">{{ $content->page }}</p>
                </div>

                <!-- Section -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Section</label>
                    <p class="text-base text-gray-900">{{ $content->section }}</p>
                </div>

                <!-- Element Key -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Element Key</label>
                    <p class="text-base text-gray-900 font-mono">{{ $content->element_key }}</p>
                </div>

                <!-- Element Type -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Element Type</label>
                    <span class="inline-block px-3 py-1 bg-blue-100 text-blue-800 rounded text-sm">
                        {{ $content->element_type }}
                    </span>
                </div>

                <!-- Status -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Status</label>
                    @if($content->is_active)
                        <span class="inline-block px-3 py-1 bg-green-100 text-green-800 rounded text-sm">
                            <i class="fas fa-check-circle mr-1"></i>Active
                        </span>
                    @else
                        <span class="inline-block px-3 py-1 bg-gray-100 text-gray-800 rounded text-sm">
                            <i class="fas fa-times-circle mr-1"></i>Inactive
                        </span>
                    @endif
                </div>

                <!-- Created At -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Created</label>
                    <p class="text-base text-gray-900">{{ $content->created_at->format('d M Y, H:i') }}</p>
                </div>

                <!-- Updated At -->
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-1">Last Updated</label>
                    <p class="text-base text-gray-900">{{ $content->updated_at->format('d M Y, H:i') }}</p>
                </div>
            </div>

            <!-- Content -->
            <div>
                <label class="block text-sm font-medium text-gray-500 mb-2">Content</label>
                <div class="p-4 bg-gray-50 rounded-lg border border-gray-200">
                    <p class="text-gray-900 whitespace-pre-wrap">{{ $content->content ?: 'No content' }}</p>
                </div>
            </div>

            <!-- Styles -->
            @if($content->styles)
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-2">Styles (JSON)</label>
                    <div class="p-4 bg-gray-900 rounded-lg overflow-x-auto">
                        <pre class="text-green-400 text-sm font-mono">{{ json_encode($content->styles, JSON_PRETTY_PRINT) }}</pre>
                    </div>
                </div>
            @endif

            <!-- Settings -->
            @if($content->settings)
                <div>
                    <label class="block text-sm font-medium text-gray-500 mb-2">Settings (JSON)</label>
                    <div class="p-4 bg-gray-900 rounded-lg overflow-x-auto">
                        <pre class="text-green-400 text-sm font-mono">{{ json_encode($content->settings, JSON_PRETTY_PRINT) }}</pre>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- Recent History -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 border-b border-gray-200 flex items-center justify-between">
            <h2 class="text-lg font-semibold text-gray-900">Recent History</h2>
            <a href="{{ route('admin.page-contents.history', $content->id) }}" 
               class="text-sm text-blue-600 hover:text-blue-800">
                View All <i class="fas fa-arrow-right ml-1"></i>
            </a>
        </div>
        
        <div class="p-6">
            @if($history->count() > 0)
                <div class="space-y-4">
                    @foreach($history as $record)
                        <div class="flex items-start space-x-3 pb-4 border-b border-gray-200 last:border-0">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-edit text-blue-600 text-sm"></i>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm text-gray-900">
                                    <span class="font-semibold">{{ $record->user ? $record->user->name : 'System' }}</span>
                                    {{ $record->change_reason }}
                                </p>
                                <p class="text-xs text-gray-500 mt-1">{{ $record->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500 text-center py-4">No history records found</p>
            @endif
        </div>
    </div>

    <!-- Actions -->
    <div class="flex items-center justify-between">
        <form method="POST" action="{{ route('admin.page-contents.destroy', $content->id) }}" 
              onsubmit="return confirm('Are you sure you want to delete this content? This action cannot be undone.');">
            @csrf
            @method('DELETE')
            <button type="submit" 
                    class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">
                <i class="fas fa-trash mr-2"></i>Delete Content
            </button>
        </form>
    </div>
</div>
@endsection
