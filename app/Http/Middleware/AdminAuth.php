<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuth
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
        //variabel user untuk mengambil data user
       $user = auth()->user();
       //jika bukan admin, maka tetap dihalaman yang terakhir kali diakses.
        if(!$user->isAdmin()){
            return redirect()->back();
        }
        //jika iya maka akan diarahkan ke halaman selanjutnya(halaman admin).
        return $next($request);
    }
}
