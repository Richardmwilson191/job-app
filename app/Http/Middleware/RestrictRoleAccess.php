<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class RestrictRoleAccess
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

        try {
            $currentRouteName = Route::currentRouteName();
            // ddd($currentRouteName);
            $userRole = auth()->user()->role;
            $admin = ['users.index', 'users.create', 'users.show', 'users.destroy', 'users.edit', 'users.update'];

            if (in_array($currentRouteName, $admin) && $userRole == 'user') {
                abort(403, 'Unauthorized Access');
            } else {
                return $next($request);
            }
            return $next($request);
        } catch (\Throwable $th) {
            abort(403, 'Unauthorized Access 3');
        }
    }
}
