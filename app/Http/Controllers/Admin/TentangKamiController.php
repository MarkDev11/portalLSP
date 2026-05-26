<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TentangKami;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        $tentangKami = TentangKami::firstOrNew([], $this->defaults());

        return view('admin.tentang-kami.index', compact('tentangKami'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'required|string',
            'about_title' => 'required|string|max:255',
            'about_content' => 'required|string',
            'license_title' => 'required|string|max:255',
            'license_number' => 'required|string|max:255',
            'visi_content' => 'required|string',
            'misi_items' => 'required|array|min:1',
            'misi_items.*' => 'required|string',
            'tujuan_title' => 'required|string|max:255',
            'tujuan_subtitle' => 'required|string',
            'tujuan_items' => 'required|array|min:1',
            'tujuan_items.*.title' => 'required|string',
            'tujuan_items.*.description' => 'required|string',
            'cta_title' => 'required|string|max:255',
            'cta_description' => 'required|string',
        ]);

        $tentangKami = TentangKami::firstOrNew();
        $tentangKami->fill($validated)->save();

        return redirect()
            ->route('admin.tentang-kami.index')
            ->with('success', 'Data Tentang Kami berhasil disimpan.');
    }

    private function defaults(): array
    {
        return [
            'misi_items' => [''],
            'tujuan_items' => [['title' => '', 'description' => '']],
        ];
    }
}
