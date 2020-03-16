<?php

namespace App\Http\Middleware;

use Closure;

class UserAuth
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
            //jika bukan user, maka tetap dihalaman yang terakhir kali diakses.
        if(!$user->isUser()){
            return redirect()->back();
        }
         //jika iya, maka akan diarahkan ke halaman selanjutnya(halaman user).
        return $next($request);
    }
}
