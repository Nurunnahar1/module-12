<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $email    = $request->query('email');
        $password = $request->query('password');
        if('mazbaul20@gmail.com' === $email && '12345678' === $password){
            return $next($request);
        }else{
            return response()->json(['error'=>'You are not an authenticated user'],401);
        }
    }
}
