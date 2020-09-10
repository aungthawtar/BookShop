<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class UserMiddleware
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
        if(! auth()->check()){
            return redirect('/');
        }else{
            if(auth()->user()->status == 'admin'){
                return $next($request);
            }else{
                return redirect('/');
            }
        }
        
    }
}
