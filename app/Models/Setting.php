<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'site_tagline',
        'footer_description',
        'header_color',
        'footer_color',
        'accent_color',
        'sidebar_color',
        'logo_long_path',
        'logo_icon_path',
        'logo_type',
        'favicon_path',
        'service_1_name',
        'service_1_url',
        'service_2_name',
        'service_2_url',
        'service_3_name',
        'service_3_url',
        'service_4_name',
        'service_4_url',
    ];

    /**
     * Get the single settings record (singleton pattern).
     * Returns null when no row exists — views handle fallback via $setting?->... ?? '...'.
     */
    public static function getSettings()
    {
        return self::first();
    }
}
