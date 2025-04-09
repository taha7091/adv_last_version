<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if ($request->user() && $request->user()->role != $role) {
            return response()->json(['message' => 'Unauthorized'], 403); // Forbidden if not the correct role
        }
        return $next($request);
    }
}
