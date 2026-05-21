@extends('admin.layout')

@section('title', 'Content History')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Content History</h1>
            <p class="mt-1 text-sm text-gray-600">{{ $content->element_key }} - Change log</p>
        </div>
        <div class="flex items-center space-x-3">
            <a href="{{ route('admin.page-contents.show', $content->id) }}" 
               class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                <i class="fas fa-eye mr-2"></i>View Content
            </a>
            <a href="{{ route('admin.page-contents.index') }}" 
               class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">
                <i class="fas fa-arrow-left mr-2"></i>Back to List
            </a>
        </div>
    </div>

    <!-- Content Summary -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label class="block text-xs font-medium text-gray-500 mb-1">Page</label>
                <p class="text-sm font-semibold text-gray-900">{{ $content->page }}</p>
            </div>
            <div>
                <label class="block text-xs font-medium text-gray-500 mb-1">Section</label>
                <p class="text-sm font-semibold text-gray-900">{{ $content->section }}</p>
            </div>
            <div>
                <label class="block text-xs font-medium text-gray-500 mb-1">Element Key</label>
                <p class="text-sm font-semibold text-gray-900">{{ $content->element_key }}</p>
            </div>
            <div>
                <label class="block text-xs font-medium text-gray-500 mb-1">Total Changes</label>
                <p class="text-sm font-semibold text-gray-900">{{ $history->total() }}</p>
            </div>
        </div>
    </div>

    <!-- History Timeline -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-900">Change History</h2>
        </div>

        <div class="divide-y divide-gray-200">
            @forelse($history as $record)
                <div class="p-6 hover:bg-gray-50" x-data="{ expanded: false }">
                    <div class="flex items-start space-x-4">
                        <!-- Timeline Icon -->
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-edit text-blue-600"></i>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center justify-between mb-2">
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">
                                        {{ $record->user ? $record->user->name : 'System' }}
                                    </p>
                                    <p class="text-xs text-gray-500">
                                        {{ $record->created_at->format('d M Y, H:i:s') }} 
                                        ({{ $record->created_at->diffForHumans() }})
                                    </p>
                                </div>
                                <button @click="expanded = !expanded" 
                                        class="text-sm text-blue-600 hover:text-blue-800">
                                    <span x-show="!expanded">Show Details</span>
                                    <span x-show="expanded" x-cloak>Hide Details</span>
                                    <i class="fas fa-chevron-down ml-1" x-show="!expanded"></i>
                                    <i class="fas fa-chevron-up ml-1" x-show="expanded" x-cloak></i>
                                </button>
                            </div>

                            <!-- Change Reason -->
                            <div class="mb-3">
                                <span class="inline-block px-3 py-1 bg-gray-100 text-gray-800 rounded text-sm">
                                    <i class="fas fa-comment-alt mr-1"></i>
                                    {{ $record->change_reason }}
                                </span>
                            </div>

                            <!-- Expanded Details -->
                            <div x-show="expanded" x-cloak class="mt-4 space-y-4">
                                <!-- Old Value -->
                                @if($record->old_value)
                                    <div>
                                        <label class="block text-xs font-medium text-gray-500 mb-2">
                                            <i class="fas fa-minus-circle text-red-500 mr-1"></i>Previous Value
                                        </label>
                                        <div class="p-3 bg-red-50 border border-red-200 rounded-lg overflow-x-auto">
                                            <pre class="text-xs text-gray-800 font-mono whitespace-pre-wrap">{{ is_array($record->old_value) ? json_encode($record->old_value, JSON_PRETTY_PRINT) : $record->old_value }}</pre>
                                        </div>
                                    </div>
                                @endif

                                <!-- New Value -->
                                @if($record->new_value)
                                    <div>
                                        <label class="block text-xs font-medium text-gray-500 mb-2">
                                            <i class="fas fa-plus-circle text-green-500 mr-1"></i>New Value
                                        </label>
                                        <div class="p-3 bg-green-50 border border-green-200 rounded-lg overflow-x-auto">
                                            <pre class="text-xs text-gray-800 font-mono whitespace-pre-wrap">{{ is_array($record->new_value) ? json_encode($record->new_value, JSON_PRETTY_PRINT) : $record->new_value }}</pre>
                                        </div>
                                    </div>
                                @endif

                                <!-- Field Name -->
                                <div>
                                    <label class="block text-xs font-medium text-gray-500 mb-1">Field Changed</label>
                                    <p class="text-sm text-gray-900 font-mono">{{ $record->field_name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="p-12 text-center">
                    <i class="fas fa-history text-4xl text-gray-300 mb-4"></i>
                    <p class="text-gray-500">No history records found</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($history->hasPages())
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                {{ $history->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
