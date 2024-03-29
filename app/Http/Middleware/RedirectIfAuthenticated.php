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
    public function handle($request, Closure $next, $guard = null)
    {
        switch($guard)
        {
            case 'razen_politik':
                if(Auth::guard($guard)->check())
                {
                    return redirect()->route('razen-politik.admin.dashboard.index');
                }

            case 'pengguna':
                if(Auth::guard($guard)->check())
                {
                    return redirect()->route('pengguna.dashboard.index');
                }

            case 'koordinator':
                if(Auth::guard($guard)->check())
                {
                    return redirect()->route('koordinator.dashboard.index');
                }

            case 'relawan':
                if(Auth::guard($guard)->check())
                {
                    return redirect()->route('relawan.dashboard.index');
                }

            case 'saksi':
                if(Auth::guard($guard)->check())
                {
                    return redirect()->route('saksi.dashboard.index');
                }
        }

        return $next($request);
    }
}
