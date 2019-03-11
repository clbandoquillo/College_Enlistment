<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\AdminMiddleware as Middleware;

use Closure;

class AdminMiddleware
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
      if($request->type != 'member'){
         return redirect('hsdasdome');
       }
      return $next($request);
    }
}
