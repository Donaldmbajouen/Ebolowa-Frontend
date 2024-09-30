<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminSecondaireMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifier si l'utilisateur est connecté et a un token
        if (session()->has('user') && session()->has('access_token')) {
            $user = session('user');
            // Vérifier si le rôle est admin
            if ($user['role'] === 'admin_secondaire') {

                return $next($request);
            }
        }

        return abort(401); //
    }
}
