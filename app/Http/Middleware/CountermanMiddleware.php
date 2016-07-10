<?php

namespace App\Http\Middleware;

use Closure;

class CountermanMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    /*
    |--------------------------------------------------------------------------
    | Authenticate Middleware(Counterman check)
    |--------------------------------------------------------------------------
    |
    | This middleware is for checking whether user is from user table 
    | and counterman .
    |
    */
    public function handle($request, Closure $next)
    {
        if (\Auth::user()) {
            if(\Auth::user()->type == 'company_admin')
                return $next($request);
            
            return redirect('/');
        }
        return redirect('/');
    }
}
