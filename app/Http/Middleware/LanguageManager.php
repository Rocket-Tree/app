<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LanguageManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('locale') && is_string(session()->get('locale'))) {
            app()->setLocale(session()->get('locale'));
            $flags = ['es' => 'es', 'en' => 'us', 'cn' => 'cn'];
            session()->put('flag', $flags[session()->get('locale')]);
        }

        return $next($request);
    }
}
