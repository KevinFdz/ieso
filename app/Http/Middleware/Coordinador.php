<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Coordinador
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
        if(Auth::guard()->user()->tipo() == 'Coordinador'){
            return $next($request);
        }
        elseif(Auth::guard()->user()->tipo() == 'Admin'){
            return $next($request);
        }
        elseif(Auth::guard()->user()->tipo() == 'Administrativo'){
            return $next($request);
        }
        else{
            abort(401);
        }
    }
}
