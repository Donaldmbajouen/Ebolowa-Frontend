<?php

namespace App\Http\Middleware;
use Session;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd(Session::get('access_token'));
        // Vérifier si l'utilisateur est connecté et a un token
        if (session()->has('user') && session()->has('access_token')) {
            $user = session('user');
            // Vérifier si le rôle est admin
            // dd($user['role']);
            if ($user['role'] === 'admin_principal') {

                return $next($request);
            }
        }

        return response()->json(['error' => 'Accès refusé.'], 403); //
    }
}
