<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Role;

class PermissionCheck
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
        if (Auth()->user()->role->name !== Role::ROOT) {
            $permissions = Auth()->user()->role->permissions->pluck('id', 'route')->toArray();
            if (!array_key_exists(Route::currentRouteName(), $permissions)) {
                Auth::logout();
                if ($request->ajax()) {
                    return "Access closed";
                }
                return redirect()->route('admin.login');
            }
        }
        return $next($request);
    }
}
