<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
          switch(Auth::user()->user_id){
               case 0:
                   $this->redirectTo = '/admin';
                   return $this->redirectTo;
               break;
               case 1:
                   $this->redirectTo = '/agent';
                   return $this->redirectTo;
               break;
               case 2:
                   $this->redirectTo = '/ga';
                   return $this->redirectTo;
               break;
               default:
                   return "Error: User Not Found";
           }
        }

        return $next($request);
    }
}
