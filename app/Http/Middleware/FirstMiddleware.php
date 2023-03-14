<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class FirstMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $input = Auth::user();
        $request->merge(['content'=>$input]);
        return $next($request);
    }
}

