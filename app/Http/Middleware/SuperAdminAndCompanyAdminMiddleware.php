<?php

namespace App\Http\Middleware;

use Closure;

class SuperAdminAndCompanyAdminMiddleware
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
        
       
        if (\Auth::guard('admins')->user()) {
            if(\Auth::guard('admins')->user()->type == 'super_admin')
                return $next($request);
        }
        elseif (\Auth::user()) {
            if(\Auth::user()->type == 'admin')
                return $next($request);
        }
        return redirect()->back();
    }
}
