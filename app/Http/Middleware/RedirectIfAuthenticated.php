<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {
        $guards = empty($guards) ? [null] : $guards;

        if (Auth::guard($guard)->check()) {
            if (auth()->user()->hasRole(['superadministrator'])) {
                return redirect('/dashboard/home');
            }
            elseif(auth()->user()->hasRole(['user'])) {
                return redirect('/profiles');
            }
        }

        return $next($request);
    }
}
