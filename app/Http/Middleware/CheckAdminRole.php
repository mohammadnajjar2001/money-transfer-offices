<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,...$roles)
    {
        $userRole = auth()->user()->role_id;

        if (in_array($userRole, $roles) || $userRole == 'admin') {
            return $next($request);
        }

        abort(403, 'Unauthorized action.');
    }
}