<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\SuperAdminMiddleware as Middleware;

use Closure;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     protected function redirectTo($request)
      {
         if (! $request->expectsJson()) {
             return route('login');
         }
      }
    public function handle($request, Closure $next)
    {
     if($request->type != 'super_admin'){
        return route('logout');
      }
    //  dd($request->user());
      return $next($request);
    }
}
