<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    protected $table = 'landingpage';
    
    protected $fillable = [
        // Hero Section
        'hero_content',
        
        // Tentang Section
        'tentang_tagline',
        'tentang_title',
        'tentang_content',
        'tentang_image',
        'show_stats',
        'stat_skema',
        'stat_peserta',
        'stat_kelulusan',
        
        // Skema Section
        'skema_tagline',
        'skema_title',
        'skema_description',
        
        // Berita Section
        'berita_tagline',
        'berita_title',
        
        // Kontak Section
        'kontak_tagline',
        'kontak_title',
        'kontak_alamat',
        'kontak_email_1',
        'kontak_email_2',
        'kontak_telepon_1',
        'kontak_telepon_2',
        'kontak_jam_senin_jumat',
        'kontak_jam_sabtu',
    ];
}
