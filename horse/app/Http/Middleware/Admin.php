<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $user = Auth::user();
        // $role = $user->role;
        // \Log::info('Authenticated user role: ' . $role);
        if(Auth::user()->role !='admin'){
            if(Auth::user()->role =='pasien') return redirect('/pasien');
            if(Auth::user()->role =='dokter') return redirect('/dokter');
            if(Auth::user()->role =='karyawan') return redirect('/karyawan');
        }
        return $next($request);
    }
}
