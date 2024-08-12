<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            // Rediriger l'utilisateur non authentifié
            return redirect('login');
        }
        if (!$request->user()->hasRole($role)) {
            // Gérer l'accès non autorisé ici
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}