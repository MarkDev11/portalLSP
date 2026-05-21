<?php

namespace Database\Seeders;

use App\Models\Kontak;
use Illuminate\Database\Seeder;

class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kontak::create([
            // Hero Section
            'hero_eyebrow' => 'Hubungi Kami',
            'hero_title' => 'Kontak',
            'hero_description' => 'Kami siap membantu Anda. Hubungi kami untuk informasi lebih lanjut mengenai sertifikasi profesi dan layanan LSP UBSI.',
            
            // Social Media Links
            'social_facebook' => 'https://facebook.com/lspubsi',
            'social_instagram' => 'https://instagram.com/lspubsi',
            'social_twitter' => 'https://twitter.com/lspubsi',
            'social_linkedin' => 'https://linkedin.com/company/lspubsi',
            
            // Map Section
            'map_title' => 'Lokasi Kami',
            'map_description' => 'Kunjungi kantor kami untuk konsultasi langsung mengenai sertifikasi profesi dan layanan LSP UBSI.',
            'map_embed_url' => null, // Admin can add Google Maps embed code later
            
            // Office Hours
            'office_hours_sunday' => 'Minggu & Libur: Tutup',
            
            // Form Settings
            'form_enabled' => true,
            'form_success_message' => 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.',
        ]);
    }
}
