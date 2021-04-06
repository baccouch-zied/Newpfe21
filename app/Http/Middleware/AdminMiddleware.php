<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->type =='admin')
        {
            return $next($request);

        }

        if(Auth::user()->type =='restaurant')
        {
            return redirect()->route('resto');

        }

        if(Auth::user()->type =='livreur')
        {
            return redirect()->route('livreur');

        }
        
        if(Auth::user()->type =='client')
        {
            return redirect()->route('/');

        }
        
        else
        {
            return redirect('/');
        }    
    }
}
