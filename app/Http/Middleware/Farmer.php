<?php

namespace App\Http\Middleware;

use Closure;

class Farmer
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
        if(auth()->user()->role->id == 2){
            return $next($request);
        }

        return redirect('/')->with('error',"Only admin can access!");
    }
}
