<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
           // Cek peran saat ini dengan peran yang diberikan
           if (!in_array($request->user()->role, $roles)) {
            return abort(403, "Forbidden");
        }
        return $next($request);
        // return redirect()->route('login.index');
    }
}
