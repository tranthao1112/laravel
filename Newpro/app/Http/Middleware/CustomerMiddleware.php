<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     */
    private $cus;
    public function __construct()
    {

    }
    public function handle(Request $request, Closure $next):Response
    {
        if(! Auth::guard('cus')->check()){
            return redirect()->route('customer.login');
        }else{
            return $next($request);
            
        }
    }
}
