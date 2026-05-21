<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsItems = [
            [
                'title' => 'Pembukaan Pendaftaran Sertifikasi BNSP Batch 10',
                'content' => '<h2>Pendaftaran Dibuka!</h2><p>LSP UBSI dengan bangga mengumumkan pembukaan pendaftaran untuk <strong>Sertifikasi BNSP Batch 10</strong>. Program ini menawarkan berbagai skema kompetensi yang telah diakui secara nasional.</p><h3>Skema yang Tersedia:</h3><ul><li>Junior Web Developer</li><li>Junior Network Administrator</li><li>Junior Programmer</li><li>Digital Marketing Specialist</li></ul><p>Pendaftaran dibuka mulai <strong>1 Juni 2026</strong> hingga <strong>30 Juni 2026</strong>. Jangan lewatkan kesempatan emas ini untuk meningkatkan kompetensi dan daya saing Anda di dunia kerja!</p>',
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => 'Workshop Digital Marketing untuk Pelaku UMKM',
                'content' => '<h2>Workshop Intensif Digital Marketing</h2><p>Tingkatkan kemampuan digital marketing Anda melalui workshop intensif yang akan diselenggarakan oleh LSP UBSI bekerja sama dengan praktisi industri terkemuka.</p><h3>Materi Workshop:</h3><ul><li>Social Media Marketing Strategy</li><li>Content Creation & Copywriting</li><li>Facebook & Instagram Ads</li><li>Google Ads & SEO Basics</li><li>Analytics & Performance Tracking</li></ul><p>Workshop akan dilaksanakan pada <strong>15-16 Juni 2026</strong> secara hybrid (online & offline). Peserta akan mendapatkan sertifikat dan materi lengkap.</p>',
                'published_at' => now()->subDays(8),
            ],
            [
                'title' => 'MoU dengan 5 Perusahaan Teknologi Terkemuka',
                'content' => '<h2>Kerjasama Strategis LSP UBSI</h2><p>LSP UBSI menjalin kerjasama strategis dengan 5 perusahaan teknologi terkemuka di Indonesia untuk meningkatkan kualitas sertifikasi dan membuka peluang kerja bagi lulusan.</p><h3>Perusahaan Partner:</h3><ol><li>PT Teknologi Digital Indonesia</li><li>PT Solusi Informatika Nusantara</li><li>PT Inovasi Software Global</li><li>PT Kreasi Digital Media</li><li>PT Sistem Informasi Terpadu</li></ol><p>Melalui kerjasama ini, peserta sertifikasi akan mendapatkan akses ke <strong>job fair eksklusif</strong>, <strong>mentoring</strong>, dan <strong>peluang magang</strong> di perusahaan-perusahaan tersebut.</p>',
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'Pelatihan Asesor Kompetensi Angkatan 15',
                'content' => '<h2>Menjadi Asesor Kompetensi Profesional</h2><p>LSP UBSI membuka pendaftaran untuk <strong>Pelatihan Asesor Kompetensi Angkatan 15</strong>. Program ini dirancang untuk meningkatkan jumlah asesor berkualitas yang dapat melakukan penilaian kompetensi secara profesional.</p><h3>Persyaratan:</h3><ul><li>Minimal S1 di bidang terkait</li><li>Pengalaman kerja minimal 3 tahun</li><li>Memiliki sertifikat kompetensi yang relevan</li><li>Lulus seleksi administrasi dan wawancara</li></ul><p>Pelatihan akan dilaksanakan selama <strong>5 hari</strong> dengan metode blended learning. Peserta yang lulus akan mendapatkan sertifikat asesor dari BNSP.</p>',
                'published_at' => now()->subDays(12),
            ],
            [
                'title' => 'Seminar Nasional: Masa Depan Sertifikasi Profesi',
                'content' => '<h2>Seminar Nasional Sertifikasi Profesi 2026</h2><p>Ikuti seminar nasional dengan tema <strong>"Masa Depan Sertifikasi Profesi di Era Digital"</strong> yang akan menghadirkan pembicara dari BNSP, industri, dan akademisi.</p><h3>Narasumber:</h3><ul><li>Dr. Ahmad Wijaya - Ketua BNSP</li><li>Ir. Siti Nurhaliza, M.T. - CEO PT Tech Innovation</li><li>Prof. Dr. Budi Santoso - Pakar SDM Universitas Indonesia</li></ul><h3>Topik Pembahasan:</h3><ul><li>Tren sertifikasi profesi global</li><li>Integrasi teknologi dalam asesmen kompetensi</li><li>Peran sertifikasi dalam meningkatkan daya saing</li><li>Studi kasus implementasi di industri</li></ul><p>Seminar akan dilaksanakan pada <strong>25 Juni 2026</strong> di Auditorium UBSI. Gratis untuk 200 peserta pertama!</p>',
                'published_at' => now()->subDays(15),
            ],
            [
                'title' => 'Alumni LSP UBSI Raih Penghargaan Nasional',
                'content' => '<h2>Prestasi Membanggakan Alumni LSP UBSI</h2><p>Kami dengan bangga mengumumkan bahwa salah satu alumni pemegang sertifikat LSP UBSI, <strong>Andi Pratama</strong>, meraih penghargaan sebagai <strong>Tenaga Profesional IT Terbaik 2026</strong> dari Kementerian Komunikasi dan Informatika.</p><p>Andi, yang tersertifikasi sebagai Junior Web Developer pada tahun 2024, kini menjabat sebagai Lead Developer di salah satu startup teknologi terkemuka di Jakarta.</p><blockquote><p>"Sertifikasi dari LSP UBSI memberikan fondasi yang kuat untuk karir saya. Materi yang komprehensif dan asesmen yang ketat membuat saya siap menghadapi tantangan di dunia kerja," ujar Andi.</p></blockquote><p>Prestasi ini membuktikan bahwa sertifikasi kompetensi dari LSP UBSI diakui dan dihargai oleh industri.</p>',
                'published_at' => now()->subDays(17),
            ],
            [
                'title' => 'Peluncuran 3 Skema Sertifikasi Baru di 2026',
                'content' => '<h2>Inovasi Skema Sertifikasi LSP UBSI</h2><p>Merespons kebutuhan industri 4.0 dan perkembangan teknologi terkini, LSP UBSI meluncurkan <strong>3 skema sertifikasi baru</strong> yang akan tersedia mulai Juli 2026.</p><h3>Skema Baru:</h3><ol><li><strong>Cloud Computing Specialist</strong><br>Fokus pada AWS, Azure, dan Google Cloud Platform</li><li><strong>Data Analyst Professional</strong><br>Mencakup Python, SQL, dan tools visualisasi data</li><li><strong>Cyber Security Analyst</strong><br>Keamanan jaringan, ethical hacking, dan incident response</li></ol><p>Ketiga skema ini dikembangkan bersama dengan praktisi industri dan telah mendapatkan lisensi dari BNSP. Materi pelatihan dan asesmen dirancang untuk memenuhi standar kompetensi internasional.</p><p>Pendaftaran untuk skema baru akan dibuka pada <strong>1 Juli 2026</strong>. Early bird discount 20% untuk 50 pendaftar pertama!</p>',
                'published_at' => now()->subDays(19),
            ],
            [
                'title' => 'Job Fair Khusus Pemegang Sertifikat Profesi',
                'content' => '<h2>Job Fair Eksklusif untuk Certified Professionals</h2><p>LSP UBSI bekerja sama dengan 50+ perusahaan menyelenggarakan <strong>Job Fair Khusus Pemegang Sertifikat Profesi</strong>. Event ini dikhususkan untuk para profesional yang telah memiliki sertifikat kompetensi dari lembaga sertifikasi resmi.</p><h3>Keunggulan Job Fair Ini:</h3><ul><li>Akses eksklusif untuk pemegang sertifikat</li><li>On-the-spot interview dengan HRD perusahaan</li><li>Posisi yang ditawarkan sesuai dengan kompetensi tersertifikasi</li><li>Career counseling gratis</li><li>Workshop CV & interview preparation</li></ul><h3>Perusahaan Partisipan:</h3><p>Berbagai perusahaan dari sektor IT, perbankan, telekomunikasi, e-commerce, dan startup teknologi akan hadir untuk merekrut talenta terbaik.</p><p>Job Fair akan dilaksanakan pada <strong>10-11 Juli 2026</strong> di Jakarta Convention Center. Registrasi online dibuka mulai 1 Juni 2026.</p>',
                'published_at' => now()->subDays(22),
            ],
        ];

        foreach ($newsItems as $item) {
            News::create([
                'title' => $item['title'],
                'slug' => Str::slug($item['title']),
                'content' => $item['content'],
                'image' => null,
                'published_at' => $item['published_at'],
            ]);
        }
    }
}
