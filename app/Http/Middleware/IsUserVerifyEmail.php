<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class IsUserVerifyEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::guard('web')->user()->email_verified){
            Auth::guard('web')->logout();
            return redirect()->route('get.login')->with('error','You need to confirm your account. We have sent you an activation link, please check your email')->withInput();
        }
        return $next($request);
    }
}
