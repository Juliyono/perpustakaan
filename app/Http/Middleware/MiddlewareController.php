<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class MiddlewareController
{
    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next)
    {
        // Cek apakah admin sudah login menggunakan guard 'admin'
        if (!Auth::guard('admin')->check()) {
            // Jika belum login, redirect ke halaman login admin
            return redirect()->route('admin.login');
        }

        // Jika sudah login, lanjutkan request
        return $next($request);
    }
}
