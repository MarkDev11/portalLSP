<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangKami extends Model
{
    use HasFactory;

    protected $table = 'tentang_kami';

    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'about_title',
        'about_content',
        'license_title',
        'license_number',
        'visi_content',
        'misi_items',
        'tujuan_title',
        'tujuan_subtitle',
        'tujuan_items',
        'cta_title',
        'cta_description',
    ];

    protected $casts = [
        'misi_items' => 'array',
        'tujuan_items' => 'array',
    ];
}
