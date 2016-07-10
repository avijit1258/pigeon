<?php

namespace App\Http\Middleware;

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
    /*
    |--------------------------------------------------------------------------
    | Authenticate Middleware(Super Admin check)
    |--------------------------------------------------------------------------
    |
    | This middleware is for checking whether user is from admin table 
    | and super_admin .
    |
    */
    public function handle($request, Closure $next)
    {
        
       
        if (\Auth::guard('admins')->user()) {
            if(\Auth::guard('admins')->user()->type == 'super_admin')
                return $next($request);
            
            return redirect('/');
        }
        return redirect('/');
    }
}
