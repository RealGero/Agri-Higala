<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminMiddleware
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
        
      
        //usertype = 1  == admin
        if (Auth::check() && Auth::user()->usertype == 1) {
            return $next($request);
        }
        
        abort(403);

    }
}
