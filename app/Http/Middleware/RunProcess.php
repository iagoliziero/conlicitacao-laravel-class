<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RunProcess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (php_sapi_name() != 'cli') {
            if ($GLOBALS['CURRENT_URL'] == '/lifecycle') {
                dump('8. Loading Run Process');
            }
        }

        return $next($request);
    }
}
