<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;

class IsAdmin
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->hasRole(['admin', 'super_admin'])) {
            return $next($request);
        }

        return redirect()->route('main')->with('error', 'У вас нет доступа');
    }
}
