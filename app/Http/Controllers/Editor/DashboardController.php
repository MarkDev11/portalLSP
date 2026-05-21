<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\WebsiteAnalytics;

class DashboardController extends Controller
{
    public function index()
    {
        // Stats
        $totalNews = News::count();
        $totalViews = News::sum('views');
        $publishedNews = News::whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->count();
        
        $visitorsToday = WebsiteAnalytics::whereDate('date', today())
            ->value('unique_visitors') ?? 0;
        
        // Top 5 berita terpopuler
        $topNews = News::with('creator')
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();
        
        // Recent news
        $recentNews = News::with('creator')
            ->latest()
            ->take(5)
            ->get();
        
        // Chart data (7 hari terakhir)
        $analytics = WebsiteAnalytics::where('date', '>=', now()->subDays(6))
            ->orderBy('date')
            ->get();
        
        // Fill missing dates with zeros
        $dates = collect();
        for ($i = 6; $i >= 0; $i--) {
            $date = now()->subDays($i)->toDateString();
            $dates->push($date);
        }
        
        $chartData = $dates->map(function ($date) use ($analytics) {
            $record = $analytics->first(function ($item) use ($date) {
                return $item->date->toDateString() === $date;
            });
            return [
                'date' => $date,
                'page_views' => $record->page_views ?? 0,
                'unique_visitors' => $record->unique_visitors ?? 0,
                'news_views' => $record->news_views ?? 0,
            ];
        });
        
        $chartLabels = $chartData->map(fn($item) => \Carbon\Carbon::parse($item['date'])->format('d M'))->toArray();
        $chartPageViews = $chartData->pluck('page_views')->toArray();
        $chartUniqueVisitors = $chartData->pluck('unique_visitors')->toArray();
        $chartNewsViews = $chartData->pluck('news_views')->toArray();
        
        return view('editor.dashboard', compact(
            'totalNews',
            'totalViews',
            'publishedNews',
            'visitorsToday',
            'topNews',
            'recentNews',
            'chartLabels',
            'chartPageViews',
            'chartUniqueVisitors',
            'chartNewsViews'
        ));
    }
}
