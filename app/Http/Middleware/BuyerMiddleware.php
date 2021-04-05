<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class BuyerMiddleware
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
       
        //usertype = 4 == buyer
        if (Auth::check() && Auth::user()->usertype == 4) {
            return $next($request);
        }
        
        abort(403);
       
    }
}
