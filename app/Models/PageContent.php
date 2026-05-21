<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $fillable = [
        'page',
        'section',
        'element_key',
        'element_type',
        'content',
        'styles',
        'settings',
        'is_active',
    ];

    protected $casts = [
        'styles' => 'array',
        'settings' => 'array',
        'is_active' => 'boolean',
    ];

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeForPage($query, $page)
    {
        return $query->where('page', $page);
    }

    public function scopeForSection($query, $section)
    {
        return $query->where('section', $section);
    }
}
