<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //jika saat proses guard di cek ,maka akan di arahakan ke halaman yang terakhir kali diakses.
        if (Auth::guard($guard)->check()) {
            return redirect()->back();
        }
        //jika ridak maka ke halaman selanjutnya.
        return $next($request);
    }
}
