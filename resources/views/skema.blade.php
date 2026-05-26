@extends('layouts.public')

@section('title', 'Daftar Skema - ' . ($setting?->site_name ?? 'Portal LSP UBSI'))

@section('content')

    <!-- ===== HERO ===== -->
    <section style="background: linear-gradient(to right, #0f172a 0%, #0f172a 70%, var(--color-accent) 100%);">
        <div class="max-w-6xl mx-auto px-6 lg:px-8 py-20 md:py-28">
            <div class="reveal">
                <p class="text-sm font-extrabold uppercase tracking-[0.2em] mb-4" style="color: var(--color-accent); -webkit-text-stroke: 0.3px white; text-stroke: 0.3px white;">Data Referensi</p>
                <h1 class="text-3xl md:text-5xl font-bold text-white heading-tight display mb-4">Daftar Skema Sertifikasi</h1>
                <div class="w-12 h-0.5 mb-6" style="background-color: var(--color-accent);"></div>
                <p class="text-ink-300 text-lg leading-relaxed max-w-2xl">Daftar lengkap skema sertifikasi kompetensi yang diselenggarakan oleh LSP UBSI beserta dokumen pendukungnya.</p>
            </div>
        </div>
    </section>

    <!-- ===== TABLE SECTION ===== -->
    <section class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="reveal">
                <div class="border border-ink-200 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="table-header">
                                    <th class="px-6 py-4 text-xs font-bold text-ink-500 uppercase tracking-wider w-16">No.</th>
                                    <th class="px-6 py-4 text-xs font-bold text-ink-500 uppercase tracking-wider">Kode Skema</th>
                                    <th class="px-6 py-4 text-xs font-bold text-ink-500 uppercase tracking-wider">Nama Skema</th>
                                    <th class="px-6 py-4 text-xs font-bold text-ink-500 uppercase tracking-wider text-center">Unduh Skema</th>
                                    <th class="px-6 py-4 text-xs font-bold text-ink-500 uppercase tracking-wider text-center">Unduh SKKNI</th>
                                    <th class="px-6 py-4 text-xs font-bold text-ink-500 uppercase tracking-wider text-center">Detail Unit</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm">
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">01</td>
                                    <td class="px-6 py-5 font-medium" style="color: var(--color-accent);">SB-001/1/LSP-UBSI/VIII/2023</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">Junior Web Developer</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 transition-colors" onmouseover="this.style.borderColor='var(--color-accent)'; this.style.color='var(--color-accent)'" onmouseout="this.style.borderColor='#e2e8f0'; this.style.color='#94a3b8'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">02</td>
                                    <td class="px-6 py-5 font-medium" style="color: var(--color-accent);">SB-015/1/LSP-UBSI/IX/2023</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">Digital Marketing</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 transition-colors" onmouseover="this.style.borderColor='var(--color-accent)'; this.style.color='var(--color-accent)'" onmouseout="this.style.borderColor='#e2e8f0'; this.style.color='#94a3b8'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">03</td>
                                    <td class="px-6 py-5 font-medium" style="color: var(--color-accent);">SB-022/1/LSP-UBSI/X/2023</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">Administrasi Sistem</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 transition-colors" onmouseover="this.style.borderColor='var(--color-accent)'; this.style.color='var(--color-accent)'" onmouseout="this.style.borderColor='#e2e8f0'; this.style.color='#94a3b8'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">04</td>
                                    <td class="px-6 py-5 font-medium" style="color: var(--color-accent);">SB-028/1/LSP-UBSI/XI/2023</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">Data Analyst</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 transition-colors" onmouseover="this.style.borderColor='var(--color-accent)'; this.style.color='var(--color-accent)'" onmouseout="this.style.borderColor='#e2e8f0'; this.style.color='#94a3b8'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">05</td>
                                    <td class="px-6 py-5 font-medium" style="color: var(--color-accent);">SB-031/1/LSP-UBSI/XI/2023</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">Mobile Developer</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 transition-colors" onmouseover="this.style.borderColor='var(--color-accent)'; this.style.color='var(--color-accent)'" onmouseout="this.style.borderColor='#e2e8f0'; this.style.color='#94a3b8'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">06</td>
                                    <td class="px-6 py-5 font-medium" style="color: var(--color-accent);">SB-036/1/LSP-UBSI/XII/2023</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">Photography</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 transition-colors" onmouseover="this.style.borderColor='var(--color-accent)'; this.style.color='var(--color-accent)'" onmouseout="this.style.borderColor='#e2e8f0'; this.style.color='#94a3b8'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">07</td>
                                    <td class="px-6 py-5 font-medium" style="color: var(--color-accent);">SB-042/1/LSP-UBSI/I/2024</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">UI/UX Design</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 transition-colors" onmouseover="this.style.borderColor='var(--color-accent)'; this.style.color='var(--color-accent)'" onmouseout="this.style.borderColor='#e2e8f0'; this.style.color='#94a3b8'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                                
                                <tr class="table-row">
                                    <td class="px-6 py-5 text-ink-900 font-semibold">08</td>
                                    <td class="px-6 py-5 font-medium" style="color: var(--color-accent);">SB-048/1/LSP-UBSI/II/2024</td>
                                    <td class="px-6 py-5 text-ink-900 font-semibold">Technical Writer</td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            PDF
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center gap-1.5 font-medium text-xs transition-colors" style="color: var(--color-accent);" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                                            SKKNI
                                        </a>
                                    </td>
                                    <td class="px-6 py-5 text-center">
                                        <a href="#" class="inline-flex items-center justify-center w-8 h-8 border border-ink-200 text-ink-400 transition-colors" onmouseover="this.style.borderColor='var(--color-accent)'; this.style.color='var(--color-accent)'" onmouseout="this.style.borderColor='#e2e8f0'; this.style.color='#94a3b8'">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" d="M8.25 6.75h7.5M8.25 12h7.5m-7.5 5.25h7.5M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"/></svg>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Note -->
                <div class="mt-8 flex items-start gap-3 text-sm text-ink-500">
                    <svg class="w-5 h-5 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" style="color: var(--color-accent);"><path stroke-linecap="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/></svg>
                    <p>Klik ikon <strong>PDF</strong> untuk mengunduh dokumen skema, <strong>SKKNI</strong> untuk Standar Kompetensi Kerja Nasional Indonesia, atau ikon dokumen untuk melihat detail unit kompetensi.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
