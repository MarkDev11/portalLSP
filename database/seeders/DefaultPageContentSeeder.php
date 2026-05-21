<?php

namespace Database\Seeders;

use App\Models\PageContent;
use App\Models\CarouselSlide;
use App\Models\PageContentHistory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DefaultPageContentSeeder extends Seeder
{
    public function run()
    {
        $admin = User::where('email', 'admin@lsp-ubsi.ac.id')->first();

        // Carousel Slides
        $carouselSlides = [
            [
                'page' => 'welcome',
                'image_path' => '',
                'title' => 'LSP UBSI',
                'description' => 'Sertifikasi Kompetensi Profesional',
                'button_text' => 'Jelajahi Skema',
                'button_link' => '/skema',
                'gradient_from' => '#1e3a8a',
                'gradient_to' => '#3b82f6',
                'order_index' => 1,
                'is_active' => true,
            ],
            [
                'page' => 'welcome',
                'image_path' => '',
                'title' => 'Standar Nasional',
                'description' => 'Terlisensi BNSP dan Diakui Industri',
                'button_text' => 'Tentang Kami',
                'button_link' => '/tentang-kami',
                'gradient_from' => '#0f172a',
                'gradient_to' => '#60a5fa',
                'order_index' => 2,
                'is_active' => true,
            ],
            [
                'page' => 'welcome',
                'image_path' => '',
                'title' => 'Kompetensi Digital',
                'description' => 'Siap Menghadapi Tantangan Era Modern',
                'button_text' => 'Hubungi Kami',
                'button_link' => '/kontak',
                'gradient_from' => '#1e40af',
                'gradient_to' => '#93c5fd',
                'order_index' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($carouselSlides as $slideData) {
            $createdSlide = CarouselSlide::create($slideData);

            // Create history record
            PageContentHistory::create([
                'contentable_type' => CarouselSlide::class,
                'contentable_id' => $createdSlide->id,
                'field_name' => 'full_record',
                'old_value' => null,
                'new_value' => $slideData,
                'changed_by' => $admin ? $admin->id : null,
                'change_reason' => 'Initial seed - carousel slide creation',
            ]);
        }

        // Page Contents
        $pageContents = [
            [
                'page' => 'welcome',
                'section' => 'hero',
                'element_key' => 'hero_beranda',
                'element_type' => 'hero',
                'content' => 'Wujudkan kompetensi profesional Anda melalui sertifikasi berstandar nasional. Terlisensi BNSP dan diakui industri.',
                'styles' => json_encode([
                    'title' => 'Portal LSP UBSI',
                    'subtitle' => 'Lembaga Sertifikasi Profesi',
                ]),
                'settings' => json_encode([
                    'cta_primary' => 'Jelajahi Skema',
                    'cta_primary_url' => '/skema',
                    'cta_secondary' => 'Tentang Kami',
                    'cta_secondary_url' => '/tentang-kami',
                ]),
                'is_active' => true,
            ],
            [
                'page' => 'welcome',
                'section' => 'about',
                'element_key' => 'tentang_kami',
                'element_type' => 'about',
                'content' => 'LSP UBSI adalah lembaga sertifikasi profesi yang berkomitmen menghasilkan tenaga kerja Indonesia yang kompeten dan berdaya saing tinggi di era digital. Kami menyediakan layanan sertifikasi kompetensi berbasis Standar Kompetensi Kerja Nasional Indonesia (SKKNI) yang diakui secara nasional.',
                'styles' => json_encode([
                    'title' => 'Membangun Kompetensi Profesional Indonesia',
                    'subtitle' => 'Tentang Kami',
                ]),
                'settings' => json_encode([
                    'stats' => [
                        ['label' => 'Skema Sertifikasi', 'value' => '15+'],
                        ['label' => 'Peserta Tersertifikasi', 'value' => '2.500+'],
                        ['label' => 'Tingkat Kelulusan', 'value' => '98%'],
                    ],
                ]),
                'is_active' => true,
            ],
            [
                'page' => 'welcome',
                'section' => 'schemes',
                'element_key' => 'skema_sertifikasi',
                'element_type' => 'schemes',
                'content' => 'Pilih skema sertifikasi yang sesuai dengan bidang kompetensi Anda untuk meningkatkan daya saing di dunia kerja.',
                'styles' => json_encode([
                    'title' => 'Daftar Skema Sertifikasi',
                    'subtitle' => 'Layanan Kami',
                ]),
                'settings' => json_encode([
                    'cta_text' => 'Selengkapnya',
                    'cta_url' => '/skema',
                    'schemes' => [
                        ['code' => 'SB-001/1/LSP-UBSI/VIII/2023', 'name' => 'Junior Web Developer'],
                        ['code' => 'SB-015/1/LSP-UBSI/IX/2023', 'name' => 'Digital Marketing'],
                        ['code' => 'SB-022/1/LSP-UBSI/X/2023', 'name' => 'Administrasi Sistem'],
                        ['code' => 'SB-028/1/LSP-UBSI/XI/2023', 'name' => 'Data Analyst'],
                        ['code' => 'SB-031/1/LSP-UBSI/XI/2023', 'name' => 'Mobile Developer'],
                        ['code' => 'SB-036/1/LSP-UBSI/XII/2023', 'name' => 'Photography'],
                        ['code' => 'SB-042/1/LSP-UBSI/I/2024', 'name' => 'UI/UX Design'],
                        ['code' => 'SB-048/1/LSP-UBSI/II/2024', 'name' => 'Technical Writer'],
                    ],
                ]),
                'is_active' => true,
            ],
            [
                'page' => 'welcome',
                'section' => 'news',
                'element_key' => 'berita',
                'element_type' => 'news',
                'content' => 'Update terbaru seputar LSP UBSI, informasi sertifikasi, workshop, dan aktivitas lainnya.',
                'styles' => json_encode([
                    'title' => 'Berita & Informasi',
                    'subtitle' => 'Update Terbaru',
                ]),
                'settings' => json_encode([
                    'cta_text' => 'Lihat Semua Berita',
                    'cta_url' => '/berita',
                    'featured_news' => [
                        [
                            'title' => 'Pembukaan Pendaftaran Sertifikasi Kompetensi Periode Januari 2026',
                            'excerpt' => 'LSP UBSI kembali membuka kesempatan bagi masyarakat umum dan mahasiswa untuk mengikuti uji sertifikasi kompetensi pada periode Januari 2026. Terdapat 8 skema sertifikasi yang dibuka pada periode ini mulai dari Junior Web Developer, Digital Marketing, hingga Data Analyst...',
                            'date' => '2026-01-15',
                            'category' => 'Informasi',
                        ],
                    ],
                ]),
                'is_active' => true,
            ],
            [
                'page' => 'welcome',
                'section' => 'contact',
                'element_key' => 'kontak',
                'element_type' => 'contact',
                'content' => 'Hubungi kami untuk informasi lebih lanjut mengenai layanan sertifikasi kompetensi.',
                'styles' => json_encode([
                    'title' => 'Kontak & Lokasi',
                    'subtitle' => 'Hubungi Kami',
                ]),
                'settings' => json_encode([
                    'address' => 'Jl. Kramat Raya No.98, RT.2/RW.9, Kwitang, Kec. Senen, Kota Jakarta Pusat, DKI Jakarta 10450',
                    'email' => ['lsp@ubsi.ac.id', 'info.lsp@ubsi.ac.id'],
                    'phone' => ['(021) 2123-4567', '(021) 2123-4568'],
                    'hours' => [
                        'weekdays' => 'Senin - Jumat: 08.00 - 16.00 WIB',
                        'saturday' => 'Sabtu: 08.00 - 12.00 WIB',
                    ],
                ]),
                'is_active' => true,
            ],
            [
                'page' => 'welcome',
                'section' => 'footer',
                'element_key' => 'footer_brand',
                'element_type' => 'footer',
                'content' => 'Lembaga Sertifikasi Profesi Universitas Bina Sarana Informatika yang berkomitmen menghasilkan tenaga kerja kompeten dan berdaya saing tinggi.',
                'styles' => json_encode([
                    'title' => 'UBSI Portal LSP',
                ]),
                'settings' => json_encode([
                    'copyright' => '2026 UBSI Portal LSP. Hak Cipta Dilindungi.',
                    'privacy_link' => '#',
                    'terms_link' => '#',
                ]),
                'is_active' => true,
            ],
        ];

        foreach ($pageContents as $pageContentData) {
            $createdContent = PageContent::create($pageContentData);

            // Create history record
            PageContentHistory::create([
                'contentable_type' => PageContent::class,
                'contentable_id' => $createdContent->id,
                'field_name' => 'full_record',
                'old_value' => null,
                'new_value' => $pageContentData,
                'changed_by' => $admin ? $admin->id : null,
                'change_reason' => 'Initial seed - page content creation',
            ]);
        }
    }
}
