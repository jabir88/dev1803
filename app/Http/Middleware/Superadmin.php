<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Superadmin
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
        if (Auth::user()->role_id != 1) {
            abort(404);
        }
        return $next($request);
        // if (Auth::user()->role == 2) {
        //     //return redirect('about');
        //     return "mor";
        // abort(404);
        // } else {
        //     return $next($request);
        // }
        // return "jinda thak";
    }
}
