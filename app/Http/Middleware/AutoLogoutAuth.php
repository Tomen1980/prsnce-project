<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AutoLogoutAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // Periksa waktu terakhir pengguna aktif
            $lastActivity = Session::get('last_activity_time', now());
            $inactivityLimit = 15 * 60; // 15 menit dalam detik

            // Jika perbedaan waktu antara sekarang dan aktivitas terakhir lebih dari 15 menit, logout
            if (now()->diffInSeconds($lastActivity) > $inactivityLimit) {
                Auth::logout();
                request()->session()->invalidate();
                request()->session()->regenerateToken();
                Session::flush();

                return redirect('/')->with('message', 'Anda telah logout karena tidak aktif selama 15 menit.');
            }

            // Perbarui waktu aktivitas terakhir
            Session::put('last_activity_time', now());
        }

        return $next($request);
    }
}
