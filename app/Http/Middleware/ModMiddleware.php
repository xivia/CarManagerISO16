<?php

namespace App\Http\Middleware;

use Closure;

class ModMiddleware
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
        if ($request->user()->isAdmin() || $request->user()->isMod()) {
                
            return $next($request);
        }

        Log::info('User: ' . $request->user()->name.  ' tried accessing moderator area.');

        return back();
    }
}
