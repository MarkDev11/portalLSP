<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\WebsiteAnalytics;
use Symfony\Component\HttpFoundation\Response;

class TrackPageView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Track page view
        WebsiteAnalytics::incrementToday('page_views');
        
        // Track unique visitor (based on session)
        $sessionKey = 'visitor_tracked_' . now()->toDateString();
        if (!session()->has($sessionKey)) {
            WebsiteAnalytics::incrementToday('unique_visitors');
            session([$sessionKey => true]);
        }
        
        return $next($request);
    }
}
