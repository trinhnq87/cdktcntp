<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckAdmin
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
        if(Auth::check() && Auth::user()->level<=2)
        {
            session_start();
            $_SESSION['KCFINDER'] = array();
            $_SESSION['KCFINDER']['disabled'] = false;
            return $next($request);
        }
        else {
            return redirect()->route('homepage');
        }
    }
}
