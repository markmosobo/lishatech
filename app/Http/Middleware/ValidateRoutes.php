<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

class ValidateRoutes
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
        $authorizedRoutes = Session::get('routes');
        $currentRoute = explode('/',Route::current()->uri);
        if(!in_array($currentRoute[0],$authorizedRoutes)){
            return redirect('unAuthorized');
        }
        return $next($request);
    }
}
