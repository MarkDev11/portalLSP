<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = 'kontak';
    
    protected $fillable = [
        'hero_eyebrow',
        'hero_title',
        'hero_description',
        'social_facebook',
        'social_instagram',
        'social_twitter',
        'social_linkedin',
        'map_title',
        'map_description',
        'map_embed_url',
        'office_hours_sunday',
        'form_enabled',
        'form_success_message',
    ];
    
    protected $casts = [
        'form_enabled' => 'boolean',
    ];
}
