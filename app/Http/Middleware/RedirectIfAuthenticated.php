<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // return redirect(RouteServiceProvider::HOME);
                if (auth()->user()->role->id == 1) {
                    return redirect()->intended(RouteServiceProvider::OWNER);
                } else if (auth()->user()->role->id == 2) {
                    return redirect()->intended(RouteServiceProvider::FARMER);
                } else {
                    Auth::guard('web')->logout();

                    $request->session()->invalidate();

                    $request->session()->regenerateToken();

                    return response('Unauthorized.', 401);
                }
            }
        }

        return $next($request);
    }
}
