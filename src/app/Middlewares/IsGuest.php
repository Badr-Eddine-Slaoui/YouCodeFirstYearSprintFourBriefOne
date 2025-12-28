<?php

namespace App\Middlewares;

use Closure;
use Foundations\Helpers\Auth;
use Foundations\Middlewares\Middleware;
use Foundations\Request\Request;

class IsGuest extends Middleware{
    public function handle(Request $request, Closure $next){
        if(Auth::check()){
            redirect("home");
        }
        return $next($request);
    }
}