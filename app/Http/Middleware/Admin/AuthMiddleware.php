<?php

namespace App\Http\Middleware\Admin;

use Closure;

class AuthMiddleware
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
        if (!auth()->guard('web')->check()) {
            return redirect()->route('admin.auth.login');
        }
        return $next($request);
    }
}
