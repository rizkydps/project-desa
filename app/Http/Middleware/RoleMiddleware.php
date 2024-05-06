<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {

        if (!Auth::check()) {
            // Not authenticated, redirect to login
            return redirect('login');
        }

        $user = Auth::user();

        foreach ($roles as $role) {
            if ($user->role == $role) {
                // User has required role, proceed with the request
                return $next($request);
            }
        }

        // User doesn't have required role, return unauthorized response
        return abort(403, 'Unauthorized');

    }
}
