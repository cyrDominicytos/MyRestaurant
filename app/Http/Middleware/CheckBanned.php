<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckBanned
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check() && (auth()->user()->isbannir==0)){
            Auth::logout();
            $request->session()->invalid();
            $request->session()->regenerateToken();
            return redirect()->route('login')->with('error','Your account is suspend please contact Admin');
        }
        return $next($request);
    }
}
