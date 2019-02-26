<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\MemberMiddleware as Middleware;

use Closure;

class MemberMiddleware
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
      if($request->type != 'admin'){
         return redirect('home');
       }
      return $next($request);
    }
}
