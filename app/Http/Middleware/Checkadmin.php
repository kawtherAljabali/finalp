<?php

namespace App\Http\Middleware;

use Closure;

class Checkadmin
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
        if ($request->session()->exists('admin')) {
            // user value cannot be found in session
            return $next($request);
        }
        return redirect('/dashboard/adminlogin');

    }
}
