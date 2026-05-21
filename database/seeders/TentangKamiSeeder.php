<?php

namespace Database\Seeders;

use App\Models\TentangKami;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TentangKamiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TentangKami::create([
            'hero_title' => 'Tentang Kami',
            'hero_subtitle' => 'Mengenal lebih dekat Lembaga Sertifikasi Profesi UBSI dan komitmen kami dalam membangun kompetensi bangsa.',
            
            'about_title' => 'Lembaga Sertifikasi Profesi UBSI',
            'about_content' => '<p>LSP UBSI merupakan lembaga sertifikasi profesi yang didirikan di bawah naungan Universitas Bina Sarana Informatika. Sebagai lembaga yang terlisensi oleh Badan Nasional Sertifikasi Profesi (BNSP), kami berkomitmen untuk menghasilkan tenaga kerja Indonesia yang kompeten, terampil, dan berdaya saing tinggi di era digital.</p>
<p>Sejak berdiri, LSP UBSI telah memberikan kontribusi nyata dalam pengembangan sumber daya manusia Indonesia melalui program sertifikasi kompetensi yang berbasis Standar Kompetensi Kerja Nasional Indonesia (SKKNI). Kami percaya bahwa sertifikasi bukan sekadar dokumen, melainkan bukti kompetensi yang diakui secara nasional dan internasional.</p>
<p>Dengan didukung oleh tim asesor yang berpengalaman dan fasilitas yang memadai, kami siap membantu individu maupun organisasi untuk mencapai standar kompetensi yang diinginkan.</p>',
            
            'license_title' => 'Terlisensi BNSP',
            'license_number' => 'LSP-001/BNSP/2020',
            
            'visi_content' => 'Menjadi lembaga sertifikasi profesi terdepan yang menghasilkan tenaga kerja Indonesia yang kompeten, profesional, dan berdaya saing global di bidang teknologi informasi dan komunikasi.',
            
            'misi_items' => [
                'Menyelenggarakan sertifikasi kompetensi berstandar nasional dan internasional secara profesional dan transparan.',
                'Mengembangkan skema sertifikasi yang sesuai dengan kebutuhan industri dan perkembangan teknologi.',
                'Membangun kemitraan strategis dengan dunia usaha dan dunia industri untuk penyerapan lulusan.',
                'Meningkatkan kualitas sumber daya manusia melalui program pelatihan dan pengembangan berkelanjutan.',
            ],
            
            'tujuan_title' => 'Tujuan LSP',
            'tujuan_subtitle' => 'Tujuan yang ingin kami capai dalam setiap program sertifikasi demi mewujudkan kompetensi bangsa.',
            
            'tujuan_items' => [
                [
                    'title' => 'Penyelenggaraan Sertifikasi Profesional',
                    'description' => 'Menyelenggarakan uji kompetensi dan sertifikasi secara profesional, transparan, dan akuntabel sesuai dengan standar yang ditetapkan BNSP.',
                ],
                [
                    'title' => 'Pengembangan Skema Kompetensi',
                    'description' => 'Mengembangkan dan memperbarui skema sertifikasi secara berkala untuk mengikuti perkembangan teknologi dan kebutuhan industri.',
                ],
                [
                    'title' => 'Peningkatan Kualitas SDM',
                    'description' => 'Berperan aktif dalam meningkatkan kualitas sumber daya manusia Indonesia melalui program pelatihan, workshop, dan pengembangan kompetensi berkelanjutan.',
                ],
                [
                    'title' => 'Kerjasama Industri',
                    'description' => 'Membangun jaringan kerjasama yang luas dengan dunia usaha, dunia industri, dan institusi pendidikan untuk penyerapan lulusan sertifikasi.',
                ],
                [
                    'title' => 'Pengakuan Kompetensi',
                    'description' => 'Meningkatkan pengakuan dan kepercayaan masyarakat terhadap nilai sertifikasi kompetensi sebagai bukti keahlian yang valid dan diakui secara nasional.',
                ],
            ],
            
            'cta_title' => 'Siap Untuk Tersertifikasi?',
            'cta_description' => 'Daftarkan diri Anda sekarang dan mulai perjalanan untuk mendapatkan sertifikasi kompetensi yang diakui secara nasional.',
        ]);
    }
}
