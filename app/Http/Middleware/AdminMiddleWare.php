<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//AdminMiddleware
class AdminMiddleWare
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is an admin
        if ($request->user() && $request->user()->isAdmin()) {
            return $next($request);
        }

        // Redirect or display an error message for unauthorized access
        return redirect()->route('home');
    }
}



?>
