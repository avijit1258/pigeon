<?php

namespace App\Http\Middleware;

use Closure;

class CompanyAdminMiddleware
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
    | Authenticate Middleware(Company Admin check)
    |--------------------------------------------------------------------------
    |
    | This middleware is for checking whether user is from user table 
    | and company_admin .
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
