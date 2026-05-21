<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     * @param  string  ...$roles
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Check if user is authenticated
        if (!auth()->check()) {
            abort(403, 'Unauthorized - Please login first');
        }
        
        // Check if user has required role
        $userRole = auth()->user()->role;
        if (!in_array($userRole, $roles)) {
            abort(403, 'Unauthorized - Insufficient permissions');
        }
        
        return $next($request);
    }
}
