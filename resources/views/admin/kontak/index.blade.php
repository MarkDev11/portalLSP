@extends('layouts.admin')

@section('content')
<div class="py-6">
    <div class="mx-auto">
        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Kelola Kontak</h1>
            <p class="mt-1 text-sm text-gray-600">Kelola informasi kontak dan lihat pesan dari pengunjung</p>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Edit Form -->
        <form action="{{ route('admin.kontak.update') }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Hero Section -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Hero Section</h2>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Eyebrow Text</label>
                        <input type="text" name="hero_eyebrow" value="{{ old('hero_eyebrow', $kontak->hero_eyebrow) }}" class="w-full px-4 py-3 border border-gray-200 text-sm rounded">
                        @error('hero_eyebrow')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                        <input type="text" name="hero_title" value="{{ old('hero_title', $kontak->hero_title) }}" class="w-full px-4 py-3 border border-gray-200 text-sm rounded">
                        @error('hero_title')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                        <textarea name="hero_description" rows="3" class="w-full px-4 py-3 border border-gray-200 text-sm rounded">{{ old('hero_description', $kontak->hero_description) }}</textarea>
                        @error('hero_description')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>

            <!-- Contact Info Section (Sync with Landing Page) -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-2">Informasi Kontak</h2>
                <p class="text-sm text-gray-600 mb-4">Data ini akan sinkron dengan Landing Page</p>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Alamat</label>
                        <textarea name="kontak_alamat" rows="3" class="w-full px-4 py-3 border border-gray-200 text-sm rounded">{{ old('kontak_alamat', $landingPage->kontak_alamat ?? '') }}</textarea>
                        @error('kontak_alamat')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email 1</label>
                            <input type="email" name="kontak_email_1" value="{{ old('kontak_email_1', $landingPage->kontak_email_1 ?? '') }}" class="w-full px-4 py-3 border border-gray-200 text-sm rounded">
                            @error('kontak_email_1')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email 2</label>
                            <input type="email" name="kontak_email_2" value="{{ old('kontak_email_2', $landingPage->kontak_email_2 ?? '') }}" class="w-full px-4 py-3 border border-gray-200 text-sm rounded">
                            @error('kontak_email_2')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Telepon 1</label>
                            <input type="text" name="kontak_telepon_1" value="{{ old('kontak_telepon_1', $landingPage->kontak_telepon_1 ?? '') }}" class="w-full px-4 py-3 border border-gray-200 text-sm rounded">
                            @error('kontak_telepon_1')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Telepon 2 (WhatsApp)</label>
                            <input type="text" name="kontak_telepon_2" value="{{ old('kontak_telepon_2', $landingPage->kontak_telepon_2 ?? '') }}" class="w-full px-4 py-3 border border-gray-200 text-sm rounded">
                            @error('kontak_telepon_2')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jam Operasional (Senin-Jumat)</label>
                            <input type="text" name="kontak_jam_senin_jumat" value="{{ old('kontak_jam_senin_jumat', $landingPage->kontak_jam_senin_jumat ?? '') }}" placeholder="08:00 - 17:00 WIB" class="w-full px-4 py-3 border border-gray-200 text-sm rounded">
                            @error('kontak_jam_senin_jumat')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Jam Operasional (Sabtu)</label>
                            <input type="text" name="kontak_jam_sabtu" value="{{ old('kontak_jam_sabtu', $landingPage->kontak_jam_sabtu ?? '') }}" placeholder="08:00 - 13:00 WIB" class="w-full px-4 py-3 border border-gray-200 text-sm rounded">
                            @error('kontak_jam_sabtu')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Jam Operasional (Minggu & Libur)</label>
                        <input type="text" name="office_hours_sunday" value="{{ old('office_hours_sunday', $kontak->office_hours_sunday) }}" placeholder="Minggu & Libur: Tutup" class="w-full px-4 py-3 border border-gray-200 text-sm rounded">
                        @error('office_hours_sunday')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>

            <!-- Social Media Section -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Social Media</h2>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Facebook URL</label>
                        <input type="url" name="social_facebook" value="{{ old('social_facebook', $kontak->social_facebook) }}" placeholder="https://facebook.com/..." class="w-full px-4 py-3 border border-gray-200 text-sm rounded">
                        @error('social_facebook')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Instagram URL</label>
                        <input type="url" name="social_instagram" value="{{ old('social_instagram', $kontak->social_instagram) }}" placeholder="https://instagram.com/..." class="w-full px-4 py-3 border border-gray-200 text-sm rounded">
                        @error('social_instagram')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Twitter URL</label>
                        <input type="url" name="social_twitter" value="{{ old('social_twitter', $kontak->social_twitter) }}" placeholder="https://twitter.com/..." class="w-full px-4 py-3 border border-gray-200 text-sm rounded">
                        @error('social_twitter')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">LinkedIn URL</label>
                        <input type="url" name="social_linkedin" value="{{ old('social_linkedin', $kontak->social_linkedin) }}" placeholder="https://linkedin.com/..." class="w-full px-4 py-3 border border-gray-200 text-sm rounded">
                        @error('social_linkedin')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Lokasi & Peta</h2>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Map Title</label>
                        <input type="text" name="map_title" value="{{ old('map_title', $kontak->map_title) }}" class="w-full px-4 py-3 border border-gray-200 text-sm rounded">
                        @error('map_title')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Map Description</label>
                        <textarea name="map_description" rows="3" class="w-full px-4 py-3 border border-gray-200 text-sm rounded">{{ old('map_description', $kontak->map_description) }}</textarea>
                        @error('map_description')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Google Maps Embed URL</label>
                        <textarea name="map_embed_url" rows="3" placeholder="<iframe src='https://www.google.com/maps/embed?...' ...></iframe>" class="w-full px-4 py-3 border border-gray-200 text-sm rounded font-mono text-xs">{{ old('map_embed_url', $kontak->map_embed_url) }}</textarea>
                        @error('map_embed_url')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                        <p class="mt-1 text-xs text-gray-500">Paste full iframe embed code from Google Maps</p>
                    </div>
                </div>
            </div>

            <!-- Form Settings -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Pengaturan Form Kontak</h2>
                
                <div class="space-y-4">
                    <div>
                        <label class="flex items-center">
                            <input type="checkbox" name="form_enabled" value="1" {{ old('form_enabled', $kontak->form_enabled) ? 'checked' : '' }} class="w-4 h-4 text-blue-600 border-gray-300 rounded">
                            <span class="ml-2 text-sm font-medium text-gray-700">Enable Contact Form</span>
                        </label>
                        <p class="mt-1 text-xs text-gray-500">Uncheck to disable form submissions</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Success Message</label>
                        <textarea name="form_success_message" rows="3" class="w-full px-4 py-3 border border-gray-200 text-sm rounded">{{ old('form_success_message', $kontak->form_success_message) }}</textarea>
                        @error('form_success_message')<p class="mt-1 text-xs text-red-600">{{ $message }}</p>@enderror
                        <p class="mt-1 text-xs text-gray-500">Message shown after successful form submission</p>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end mb-8">
                <button type="submit" class="px-6 py-3 bg-blue-600 text-white text-sm font-semibold rounded hover:bg-blue-700 transition-colors">
                    Simpan Perubahan
                </button>
            </div>
        </form>

        <!-- Messages Section -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900">Pesan Kontak</h2>
                    <p class="text-sm text-gray-600">Pesan dari pengunjung melalui form kontak</p>
                </div>
                <div class="text-sm text-gray-600">
                    Total: <span class="font-semibold">{{ $messages->total() }}</span> pesan
                </div>
            </div>

            @if($messages->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="text-left py-3 px-4 font-semibold text-gray-700">Status</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-700">Nama</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-700">Email</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-700">Telepon</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-700">Subjek</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-700">Tanggal</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-700">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $message)
                                <tr class="border-b border-gray-100 hover:bg-gray-50 {{ $message->is_read ? '' : 'bg-blue-50' }}">
                                    <td class="py-3 px-4">
                                        @if($message->is_read)
                                            <span class="inline-flex items-center px-2 py-1 text-xs font-medium text-gray-600 bg-gray-100 rounded">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                                </svg>
                                                Dibaca
                                            </span>
                                        @else
                                            <span class="inline-flex items-center px-2 py-1 text-xs font-medium text-blue-700 bg-blue-100 rounded">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                                                </svg>
                                                Baru
                                            </span>
                                        @endif
                                    </td>
                                    <td class="py-3 px-4">
                                        <div class="font-medium text-gray-900">{{ $message->name }}</div>
                                    </td>
                                    <td class="py-3 px-4 text-gray-600">{{ $message->email }}</td>
                                    <td class="py-3 px-4 text-gray-600">{{ $message->phone ?? '-' }}</td>
                                    <td class="py-3 px-4">
                                        <div class="max-w-xs truncate text-gray-900">{{ $message->subject }}</div>
                                        <div class="text-xs text-gray-500 mt-1 max-w-xs truncate">{{ Str::limit($message->message, 50) }}</div>
                                    </td>
                                    <td class="py-3 px-4 text-gray-600">
                                        <div>{{ $message->created_at->format('d M Y') }}</div>
                                        <div class="text-xs text-gray-500">{{ $message->created_at->format('H:i') }}</div>
                                    </td>
                                    <td class="py-3 px-4">
                                        <div class="flex items-center gap-2">
                                            <!-- View Details Button -->
                                            <button type="button" onclick="showMessageDetails({{ $message->id }})" class="text-blue-600 hover:text-blue-800" title="Lihat Detail">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                    <path stroke-linecap="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                </svg>
                                            </button>

                                            <!-- Mark as Read Button -->
                                            @if(!$message->is_read)
                                                <button type="button" onclick="markAsRead({{ $message->id }})" class="text-green-600 hover:text-green-800" title="Tandai Sudah Dibaca">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                    </svg>
                                                </button>
                                            @endif

                                            <!-- Delete Button -->
                                            <form action="{{ route('admin.kontak.messages.delete', $message->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800" title="Hapus">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Hidden Message Details Row -->
                                <tr id="message-details-{{ $message->id }}" class="hidden bg-gray-50">
                                    <td colspan="7" class="py-4 px-4">
                                        <div class="bg-white rounded border border-gray-200 p-4">
                                            <div class="grid grid-cols-2 gap-4 mb-4">
                                                <div>
                                                    <label class="text-xs font-semibold text-gray-500 uppercase">Nama</label>
                                                    <p class="text-sm text-gray-900 mt-1">{{ $message->name }}</p>
                                                </div>
                                                <div>
                                                    <label class="text-xs font-semibold text-gray-500 uppercase">Email</label>
                                                    <p class="text-sm text-gray-900 mt-1">{{ $message->email }}</p>
                                                </div>
                                                <div>
                                                    <label class="text-xs font-semibold text-gray-500 uppercase">Telepon</label>
                                                    <p class="text-sm text-gray-900 mt-1">{{ $message->phone ?? '-' }}</p>
                                                </div>
                                                <div>
                                                    <label class="text-xs font-semibold text-gray-500 uppercase">Tanggal</label>
                                                    <p class="text-sm text-gray-900 mt-1">{{ $message->created_at->format('d M Y, H:i') }}</p>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <label class="text-xs font-semibold text-gray-500 uppercase">Subjek</label>
                                                <p class="text-sm text-gray-900 mt-1">{{ $message->subject }}</p>
                                            </div>
                                            <div>
                                                <label class="text-xs font-semibold text-gray-500 uppercase">Pesan</label>
                                                <p class="text-sm text-gray-900 mt-1 whitespace-pre-wrap">{{ $message->message }}</p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-4">
                    {{ $messages->links() }}
                </div>
            @else
                <div class="text-center py-12">
                    <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" stroke-width="1" viewBox="0 0 24 24">
                        <path stroke-linecap="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <p class="text-gray-500">Belum ada pesan kontak</p>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Scripts -->
<script>
    // Toggle message details
    function showMessageDetails(messageId) {
        const detailsRow = document.getElementById('message-details-' + messageId);
        if (detailsRow.classList.contains('hidden')) {
            detailsRow.classList.remove('hidden');
        } else {
            detailsRow.classList.add('hidden');
        }
    }

    // Mark message as read
    function markAsRead(messageId) {
        fetch(`/admin/kontak/messages/${messageId}/read`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Gagal menandai pesan sebagai sudah dibaca');
        });
    }
</script>
@endsection
