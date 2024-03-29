<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckSignin
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
        $user = Session::get('user');

        if ($user!=null) {
            return $next($request);
        }else{
            return redirect('/users/signin')->withErrors("You must sign in to visit this page.")->withInput();
        }
    }
}
