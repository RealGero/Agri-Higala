<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class RiderMiddleware
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
        // if (auth()->guest()) {
        //     return redirect()->route('/login');
        // }
      
        //usertype = 3  == rider
        if (Auth::check() && Auth::user()->usertype == 3) {
            return $next($request);
        }
        
        abort(403);
       
    }
}
