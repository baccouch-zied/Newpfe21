<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class LivreurMiddleware
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
        if(Auth::user()->type =='admin')
        {
            return redirect()->route('dash');

        }

        if(Auth::user()->type =='restaurant')
        {
            return redirect()->route('resto');

        }

        if((Auth::user()->type =='livreur')&&(Auth::user()->status =='valid'))
        {
            return $next($request);
        }

        if(Auth::user()->type =='client')
        {
            return redirect()->route('/');

        }

        else{
            Auth::logout();
            return redirect()->route('index');

        }
    }
}
