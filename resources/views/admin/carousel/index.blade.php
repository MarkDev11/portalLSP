@extends('layouts.admin')

@section('title', 'Carousel Management')

@section('content')
    <div class="mb-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-ink-900 heading-tight mb-2">Carousel Management</h1>
                <p class="text-ink-500">Manage carousel slides for welcome page</p>
            </div>
            <a href="{{ route('admin.carousel.create') }}" class="px-6 py-3 bg-accent-600 text-white text-sm font-semibold hover:bg-accent-700 transition-colors rounded">
                Add New Slide
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 bg-green-50 border border-green-200 text-sm text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white border border-ink-200">
        @if($slides->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-ink-50 border-b border-ink-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-ink-700 uppercase tracking-wider">Order</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-ink-700 uppercase tracking-wider">Preview</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-ink-700 uppercase tracking-wider">Title</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-ink-700 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-right text-xs font-semibold text-ink-700 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-ink-200" id="sortable-slides">
                        @foreach($slides as $slide)
                            <tr class="hover:bg-ink-50 transition-colors" data-id="{{ $slide->id }}">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4 text-ink-400 cursor-move handle" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" d="M3.75 9h16.5m-16.5 6.75h16.5"/>
                                        </svg>
                                        <span class="text-sm font-medium text-ink-900">{{ $slide->order_index }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="w-20 h-12 rounded overflow-hidden" style="background: linear-gradient(135deg, {{ $slide->gradient_from ?? '#1e3a8a' }}, {{ $slide->gradient_to ?? '#3b82f6' }}); @if($slide->image_path && $slide->image_path !== 'placeholder.jpg') background-image: url('{{ asset('storage/' . $slide->image_path) }}'); background-size: cover; background-position: center; @endif">
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm font-medium text-ink-900">{{ $slide->title ?: 'No title' }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    @if($slide->is_active)
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800">
                                            Active
                                        </span>
                                    @else
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                            Inactive
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="{{ route('admin.carousel.edit', $slide) }}" class="px-3 py-1.5 text-xs font-medium text-accent-600 hover:text-accent-700 border border-accent-300 hover:border-accent-400 rounded transition-colors">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.carousel.destroy', $slide) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this slide?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-3 py-1.5 text-xs font-medium text-red-600 hover:text-red-700 border border-red-300 hover:border-red-400 rounded transition-colors">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="p-12 text-center">
                <svg class="w-16 h-16 text-ink-300 mx-auto mb-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                </svg>
                <h3 class="text-lg font-semibold text-ink-900 mb-2">No carousel slides yet</h3>
                <p class="text-sm text-ink-500 mb-6">Get started by creating your first carousel slide.</p>
                <a href="{{ route('admin.carousel.create') }}" class="inline-flex items-center px-6 py-3 bg-accent-600 text-white text-sm font-semibold hover:bg-accent-700 transition-colors rounded">
                    Add First Slide
                </a>
            </div>
        @endif
    </div>

    @if($slides->count() > 0)
        <div class="mt-6 p-4 bg-blue-50 border border-blue-200 rounded">
            <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-blue-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                </svg>
                <div>
                    <h4 class="text-sm font-semibold text-blue-900 mb-1">Drag to Reorder</h4>
                    <p class="text-xs text-blue-700">Drag the handle icon to reorder slides. Changes are saved automatically.</p>
                </div>
            </div>
        </div>
    @endif
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tbody = document.getElementById('sortable-slides');
        if (tbody) {
            new Sortable(tbody, {
                handle: '.handle',
                animation: 150,
                onEnd: function(evt) {
                    const slides = [];
                    document.querySelectorAll('#sortable-slides tr').forEach((row, index) => {
                        slides.push({
                            id: row.dataset.id,
                            order_index: index
                        });
                    });

                    fetch('{{ route("admin.carousel.reorder") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ slides: slides })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Update order numbers in UI
                            document.querySelectorAll('#sortable-slides tr').forEach((row, index) => {
                                row.querySelector('span').textContent = index;
                            });
                        }
                    });
                }
            });
        }
    });
</script>
@endpush
