<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Editor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Pengkondisian jika editor dan user mengakses tabel user maka masuk halaman abort
        if(Auth::user()->role == 'editor'){
            abort(404);
        }elseif(Auth::user()->role == 'user'){
            abort(404);
        }
        return $next($request);
    }
}
