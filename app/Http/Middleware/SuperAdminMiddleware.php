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
        $type = "";
        if(isset(\Auth::user()->type )){
          $type = \Auth::user()->type;
        }
        if($type != 'super_admin'){
          //dd(\Auth::user()->type);
            return redirect()->route('login');
          }

         return $next($request);
      }
    public function handle($request, Closure $next)
    {
    
     $type = "";
     if(isset(\Auth::user()->type )){
       $type = \Auth::user()->type;
     }
     if($type != 'super_admin'){
       //dd(\Auth::user()->type);
        return redirect()->route('home');
      }
    //  dd($request->user());
      return $next($request);
    }
}
