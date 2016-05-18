<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddlware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string $role the acl role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (! auth()->user()->is($role)) {
            return redirect()->back(302);
        }

        return $next($request);
    }
}
