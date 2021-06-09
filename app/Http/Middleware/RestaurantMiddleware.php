<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\UserRestaurant;

class RestaurantMiddleware
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
            return $next($request);
        }

        if(Auth::user()->type =='livreur')
        {
            return redirect()->route('livreur');
        }

        if(Auth::user()->type =='client')
        {
            return redirect()->route('index');

        }

        else
        {
            return redirect('/');
        }
    }
}
