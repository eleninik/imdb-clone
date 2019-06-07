<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        if(\Auth::guest()) {
            return redirect('/login');
        }
        elseif (\Auth::user()->type == 'admin') {
            return $next($request);
          }
      
            return redirect('/home')->withErrors(['You are not the admin we are looking for']);
    }
}
