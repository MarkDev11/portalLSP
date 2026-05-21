<?php

namespace Database\Seeders;

use App\Models\LandingPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LandingPage::create([
            // Hero Section
            'hero_content' => '<p class="text-accent-600 text-xs font-bold uppercase tracking-[0.2em] mb-4">Lembaga Sertifikasi Profesi</p><h1 class="text-3xl md:text-5xl font-bold text-ink-900 heading-tight display mb-4">Portal <span class="text-accent-600">LSP UBSI</span></h1><p class="body-large text-ink-500">Wujudkan kompetensi profesional Anda melalui sertifikasi berstandar nasional. Terlisensi BNSP dan diakui industri.</p>',
            
            // Tentang Section
            'tentang_tagline' => 'Tentang Kami',
            'tentang_title' => 'Membangun Kompetensi Profesional Indonesia',
            'tentang_content' => '<p>LSP UBSI adalah lembaga sertifikasi profesi yang berkomitmen menghasilkan tenaga kerja Indonesia yang kompeten dan berdaya saing tinggi di era digital.</p><p>Kami menyediakan layanan sertifikasi kompetensi berbasis Standar Kompetensi Kerja Nasional Indonesia (SKKNI) yang diakui secara nasional.</p>',
            'tentang_image' => null,
            'show_stats' => true,
            'stat_skema' => '15+',
            'stat_peserta' => '2.500+',
            'stat_kelulusan' => '98%',
            
            // Skema Section
            'skema_tagline' => 'Layanan Kami',
            'skema_title' => 'Daftar Skema Sertifikasi',
            'skema_description' => 'Pilih skema sertifikasi yang sesuai dengan bidang kompetensi Anda untuk meningkatkan daya saing di dunia kerja.',
            
            // Berita Section
            'berita_tagline' => 'Update Terbaru',
            'berita_title' => 'Berita & Informasi',
            
            // Kontak Section
            'kontak_tagline' => 'Hubungi Kami',
            'kontak_title' => 'Kontak & Lokasi',
            'kontak_alamat' => 'Jl. Kramat Raya No.98, RT.2/RW.9, Kwitang, Kec. Senen, Kota Jakarta Pusat, DKI Jakarta 10450',
            'kontak_email_1' => 'lsp@ubsi.ac.id',
            'kontak_email_2' => 'info.lsp@ubsi.ac.id',
            'kontak_telepon_1' => '(021) 2123-4567',
            'kontak_telepon_2' => '(021) 2123-4568',
            'kontak_jam_senin_jumat' => 'Senin - Jumat: 08.00 - 16.00 WIB',
            'kontak_jam_sabtu' => 'Sabtu: 08.00 - 12.00 WIB',
        ]);
    }
}
