<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create single settings record (singleton pattern)
        Setting::create([
            'site_name' => 'UBSI Portal LSP',
            'site_tagline' => 'Lembaga Sertifikasi Profesi',
            'footer_description' => 'Lembaga Sertifikasi Profesi yang terpercaya untuk mengembangkan kompetensi profesional Anda.',
            
            // Default colors matching current hardcoded values
            'header_color' => '#1e293b', // ink-900
            'footer_color' => '#1e293b', // ink-900
            'accent_color' => '#2563eb', // accent-600 (blue)
            'sidebar_color' => '#0f172a', // darker ink
            
            // Logo paths (null initially, admin will upload)
            'logo_long_path' => null,
            'logo_icon_path' => null,
            'logo_type' => 'long', // Default to long logo
            
            // Favicon (null initially, admin will upload)
            'favicon_path' => null,
            
            // Services (Layanan) - default values
            'service_1_name' => 'Sertifikasi',
            'service_1_url' => '#',
            'service_2_name' => 'Pelatihan',
            'service_2_url' => '#',
            'service_3_name' => 'Asesmen',
            'service_3_url' => '#',
            'service_4_name' => 'Konsultasi',
            'service_4_url' => '#',
        ]);
    }
}
