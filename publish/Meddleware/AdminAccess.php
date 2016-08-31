<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Class AdminAccess
 * Check access to admin panel
 * @package App\Http\Middleware
 */
class AdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
