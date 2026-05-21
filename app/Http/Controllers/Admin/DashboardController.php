<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;
use App\Models\WebsiteAnalytics;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Stats Cards
        $totalUsers = User::count();
        $usersByRole = User::select('role', DB::raw('count(*) as count'))
            ->groupBy('role')
            ->pluck('count', 'role')
            ->toArray();
        
        $totalNews = News::count();
        $publishedNews = News::whereNotNull('published_at')
            ->where('published_at', '<=', now())
            ->count();
        $draftNews = $totalNews - $publishedNews;
        
        $totalViews = News::sum('views');
        
        $visitorsToday = WebsiteAnalytics::whereDate('date', today())
            ->value('unique_visitors') ?? 0;
        
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
        
        // Recent Activity
        $recentUsers = User::latest()->take(5)->get();
        $recentNews = News::with('creator')->latest()->take(5)->get();
        
        // Top Editors (by news count)
        $topEditors = User::whereIn('role', ['admin', 'editor'])
            ->whereHas('news')
            ->withCount('news')
            ->orderBy('news_count', 'desc')
            ->take(5)
            ->get();
        
        // Top News (by views)
        $topNews = News::with('creator')
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();
        
        // System stats
        $newsPublishedToday = News::whereDate('published_at', today())->count();
        $usersRegisteredToday = User::whereDate('created_at', today())->count();
        
        return view('admin.dashboard', compact(
            'totalUsers',
            'usersByRole',
            'totalNews',
            'publishedNews',
            'draftNews',
            'totalViews',
            'visitorsToday',
            'chartLabels',
            'chartPageViews',
            'chartUniqueVisitors',
            'chartNewsViews',
            'recentUsers',
            'recentNews',
            'topEditors',
            'topNews',
            'newsPublishedToday',
            'usersRegisteredToday'
        ));
    }
}
