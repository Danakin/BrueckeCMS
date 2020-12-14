<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CanAccessAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!auth()->user()) {
            return redirect()->route('login');
        }
        foreach(auth()->user()->roles as $role) {
            if($role->hasPermission('access_admin')) {
                return $next($request);
            }
        }
        return abort(403);
    }
}
