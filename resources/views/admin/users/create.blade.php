@extends('layouts.admin')

@section('content')
<div class="py-6">
    <div class="max-w-3xl mx-auto">
        <!-- Header -->
        <div class="mb-6 flex items-center gap-4">
            <a href="{{ route('admin.users.index') }}" class="text-gray-600 hover:text-gray-900">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/>
                </svg>
            </a>
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Tambah User Baru</h1>
                <p class="mt-1 text-sm text-gray-600">Buat akun pengguna baru</p>
            </div>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
            <form action="{{ route('admin.users.store') }}" method="POST">
                @csrf

                <!-- Name -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                        Nama Lengkap <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        value="{{ old('name') }}" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded text-sm focus:outline-none focus:border-blue-500 @error('name') border-red-500 @enderror"
                        placeholder="Masukkan nama lengkap"
                    >
                    @error('name')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded text-sm focus:outline-none focus:border-blue-500 @error('email') border-red-500 @enderror"
                        placeholder="contoh@email.com"
                    >
                    @error('email')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                        Password <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded text-sm focus:outline-none focus:border-blue-500 @error('password') border-red-500 @enderror"
                        placeholder="Minimal 8 karakter"
                    >
                    @error('password')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                    <p class="mt-1 text-xs text-gray-500">Password harus minimal 8 karakter</p>
                </div>

                <!-- Role -->
                <div class="mb-6">
                    <label for="role" class="block text-sm font-semibold text-gray-700 mb-2">
                        Role <span class="text-red-500">*</span>
                    </label>
                    <select 
                        id="role" 
                        name="role" 
                        required
                        class="w-full px-4 py-3 border border-gray-300 rounded text-sm focus:outline-none focus:border-blue-500 @error('role') border-red-500 @enderror"
                    >
                        <option value="">Pilih Role</option>
                        <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="editor" {{ old('role') === 'editor' ? 'selected' : '' }}>Editor</option>
                    </select>
                    @error('role')
                        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                    <div class="mt-2 text-xs text-gray-600">
                        <p class="font-semibold mb-1">Penjelasan Role:</p>
                        <ul class="list-disc list-inside space-y-1 ml-2">
                            <li><span class="font-medium">Admin:</span> Akses penuh ke semua fitur termasuk manajemen user</li>
                            <li><span class="font-medium">Editor:</span> Dapat mengelola konten (landing page, berita, dll) tanpa akses manajemen user</li>
                        </ul>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex items-center gap-3 pt-4 border-t border-gray-200">
                    <button 
                        type="submit" 
                        class="px-6 py-3 bg-blue-600 text-white text-sm font-semibold rounded hover:bg-blue-700 transition-colors"
                    >
                        <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" d="M4.5 12.75l6 6 9-13.5"/>
                        </svg>
                        Simpan User
                    </button>
                    <a 
                        href="{{ route('admin.users.index') }}" 
                        class="px-6 py-3 bg-gray-200 text-gray-700 text-sm font-semibold rounded hover:bg-gray-300 transition-colors"
                    >
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
