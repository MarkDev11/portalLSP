<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class WebsiteAnalytics extends Model
{
    protected $fillable = [
        'date',
        'page_views',
        'unique_visitors',
        'news_views',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    /**
     * Increment counter for today
     */
    public static function incrementToday($field)
    {
        $today = now()->toDateString();
        
        try {
            // Try to create record if not exists
            $record = self::firstOrCreate(
                ['date' => $today],
                [
                    'page_views' => 0,
                    'unique_visitors' => 0,
                    'news_views' => 0,
                ]
            );
        } catch (\Exception $e) {
            // If unique constraint fails (race condition), fetch existing record
            $record = self::whereDate('date', $today)->first();
        }
        
        // Increment the specific field if record exists
        if ($record) {
            $record->increment($field);
        }
    }

    /**
     * Get analytics for date range
     */
    public static function getRange($days = 7)
    {
        return self::where('date', '>=', now()->subDays($days - 1))
            ->orderBy('date')
            ->get();
    }

    /**
     * Get today's stats
     */
    public static function getToday()
    {
        return self::whereDate('date', today())->first();
    }
}
