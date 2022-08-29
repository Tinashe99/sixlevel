<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        // $guards = empty($guards) ? [null] : $guards;

        if ($guards == "user1" && Auth::guard($guards)->check()) {
            return redirect('/user1');
        }
        if ($guards == "user2" && Auth::guard($guards)->check()) {
            return redirect('/user2');
        }
        if ($guards == "user3" && Auth::guard($guards)->check()) {
            return redirect('/user3');
        }
        if ($guards == "user4" && Auth::guard($guards)->check()) {
            return redirect('/user4');
        }
        if ($guards == "user5" && Auth::guard($guards)->check()) {
            return redirect('/user5');
        }
        if ($guards == "user6" && Auth::guard($guards)->check()) {
            return redirect('/user6');
        }

        // if (Auth::guard($guards)->check()) {
        //     return redirect('/home');
        // }

        return $next($request);


        // $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
        // }

        return $next($request);
    }
}
