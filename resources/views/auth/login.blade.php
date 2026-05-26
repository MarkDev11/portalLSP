<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - {{ $setting?->site_name ?? 'Portal LSP UBSI' }}</title>

    @if($setting?->favicon_path)
        <link rel="icon" type="image/x-icon" href="{{ asset('storage/' . $setting->favicon_path) }}">
    @else
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @endif

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700,800&display=swap" rel="stylesheet" />

    <style>
        :root {
            --color-accent: {{ $setting?->accent_color ?? '#2563eb' }};
        }
        input:focus, textarea:focus { outline: none; border-color: var(--color-accent); }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ink-50 bg-grid text-ink-700 font-sans">

    <!-- ===== LOGIN SECTION ===== -->
    <section class="py-32 min-h-screen flex items-center">
        <div class="max-w-md mx-auto px-6 w-full">
            <div class="bg-white border border-ink-200 p-8 md:p-10">
                <!-- Header -->
                <div class="text-center mb-8">
                    <p class="text-accent-600 text-xs font-bold uppercase tracking-[0.2em] mb-3">Portal LSP UBSI</p>
                    <h1 class="text-2xl md:text-3xl font-bold text-ink-900 heading-tight mb-2">Login</h1>
                    <p class="text-sm text-ink-500">Masuk ke akun Anda untuk melanjutkan</p>
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-6 p-4 bg-accent-50 border border-accent-200 text-sm text-accent-700">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-xs font-semibold text-ink-700 uppercase tracking-wider mb-2">Email</label>
                        <input 
                            id="email" 
                            type="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required 
                            autofocus 
                            autocomplete="username"
                            placeholder="nama@email.com"
                            class="w-full px-4 py-3 border border-ink-200 text-sm text-ink-900 placeholder:text-ink-400 transition-colors @error('email') border-red-500 @enderror"
                        >
                        @error('email')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-xs font-semibold text-ink-700 uppercase tracking-wider mb-2">Password</label>
                        <input 
                            id="password" 
                            type="password" 
                            name="password" 
                            required 
                            autocomplete="current-password"
                            placeholder="Masukkan password"
                            class="w-full px-4 py-3 border border-ink-200 text-sm text-ink-900 placeholder:text-ink-400 transition-colors @error('password') border-red-500 @enderror"
                        >
                        @error('password')
                            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input 
                            id="remember_me" 
                            type="checkbox" 
                            name="remember"
                            class="w-4 h-4 border-ink-300 text-accent-600 focus:ring-accent-500 focus:ring-2"
                        >
                        <label for="remember_me" class="ml-2 text-sm text-ink-600">Ingat saya</label>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        class="w-full py-3.5 bg-accent-600 text-white text-sm font-semibold hover:bg-accent-700 transition-colors"
                    >
                        Masuk
                    </button>
                </form>
            </div>

            <!-- Back to Home -->
            <div class="text-center mt-6">
                <a href="/" class="inline-flex items-center gap-2 text-sm font-medium text-ink-500 hover:text-ink-900 transition-colors group">
                    <svg class="w-4 h-4 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </section>

</body>
</html>
