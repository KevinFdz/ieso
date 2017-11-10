<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Profesor
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
        if(Auth::guard()->user()->tipo() == 'Profesor'){
            return $next($request);
        }
        elseif(Auth::guard()->user()->tipo() == 'Alumno'){
            return $next($request);
        }
        elseif(Auth::guard()->user()->tipo() == 'Coordinador'){
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
