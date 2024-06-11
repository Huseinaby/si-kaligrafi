<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (!$user || $user->level !== '1') {
            return redirect()->route('no-access')->with('error', 'You do not have permission to access this page.');
        }

        return $next($request);
    }
}
