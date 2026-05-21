<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TentangKami;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        $tentangKami = TentangKami::first();
        
        if (!$tentangKami) {
            return redirect()->route('admin.tentang-kami.create')
                ->with('info', 'Belum ada data. Silakan buat data baru.');
        }

        return view('admin.tentang-kami.edit', compact('tentangKami'));
    }

    public function create()
    {
        return view('admin.tentang-kami.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'required|string',
            'about_title' => 'required|string|max:255',
            'about_content' => 'required|string',
            'license_title' => 'required|string|max:255',
            'license_number' => 'required|string|max:255',
            'visi_content' => 'required|string',
            'misi_items' => 'required|array',
            'misi_items.*' => 'required|string',
            'tujuan_title' => 'required|string|max:255',
            'tujuan_subtitle' => 'required|string',
            'tujuan_items' => 'required|array',
            'tujuan_items.*.title' => 'required|string',
            'tujuan_items.*.description' => 'required|string',
            'cta_title' => 'required|string|max:255',
            'cta_description' => 'required|string',
        ]);

        TentangKami::create($validated);

        return redirect()->route('admin.tentang-kami.index')
            ->with('success', 'Data Tentang Kami berhasil dibuat!');
    }

    public function edit()
    {
        $tentangKami = TentangKami::first();
        
        if (!$tentangKami) {
            return redirect()->route('admin.tentang-kami.create')
                ->with('info', 'Belum ada data. Silakan buat data baru.');
        }

        return view('admin.tentang-kami.edit', compact('tentangKami'));
    }

    public function update(Request $request)
    {
        $tentangKami = TentangKami::first();

        if (!$tentangKami) {
            return redirect()->route('admin.tentang-kami.create')
                ->with('error', 'Data tidak ditemukan.');
        }

        $validated = $request->validate([
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'required|string',
            'about_title' => 'required|string|max:255',
            'about_content' => 'required|string',
            'license_title' => 'required|string|max:255',
            'license_number' => 'required|string|max:255',
            'visi_content' => 'required|string',
            'misi_items' => 'required|array',
            'misi_items.*' => 'required|string',
            'tujuan_title' => 'required|string|max:255',
            'tujuan_subtitle' => 'required|string',
            'tujuan_items' => 'required|array',
            'tujuan_items.*.title' => 'required|string',
            'tujuan_items.*.description' => 'required|string',
            'cta_title' => 'required|string|max:255',
            'cta_description' => 'required|string',
        ]);

        $tentangKami->update($validated);

        return redirect()->route('admin.tentang-kami.index')
            ->with('success', 'Data Tentang Kami berhasil diperbarui!');
    }
}
