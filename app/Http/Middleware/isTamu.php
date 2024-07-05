<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class isTamu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Jika Sudah Login, Maka Kamu Tidak Bisa Buka Page Login
        if (Auth::check()) {
            return redirect(route('pendidikan.index'))->withErrors('Anda Sudah Login!');
        }
        return $next($request);
    }
}
