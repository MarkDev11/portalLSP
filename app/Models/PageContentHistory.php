<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PageContentHistory extends Model
{
    protected $table = 'page_content_history';

    // History is immutable, no updated_at
    const UPDATED_AT = null;

    protected $fillable = [
        'contentable_type',
        'contentable_id',
        'field_name',
        'old_value',
        'new_value',
        'changed_by',
        'change_reason',
    ];

    protected $casts = [
        'old_value' => 'array',
        'new_value' => 'array',
    ];

    // Relationships
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'changed_by');
    }

    // Polymorphic relationship
    public function contentable()
    {
        return $this->morphTo();
    }

    // Scopes
    public function scopeForContentable($query, $type, $id)
    {
        return $query->where('contentable_type', $type)->where('contentable_id', $id);
    }

    public function scopeByUser($query, $userId)
    {
        return $query->where('changed_by', $userId);
    }

    public function scopeRecent($query, $limit = 10)
    {
        return $query->orderBy('created_at', 'desc')->limit($limit);
    }
}
