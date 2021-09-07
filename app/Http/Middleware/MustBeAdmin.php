<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MustBeAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->guest()) {
//            abort(Response::HTTP_FORBIDDEN)
            return redirect('/')->with('success', 'Access denied (Guest user)');
        }

        if(auth()->user()->username !== 'duncanssmith') {
//            abort(Response::HTTP_UNAUTHORIZED)
            return redirect('/')->with('success', 'Access denied (Logged in User)');
        }

        return $next($request);
    }
}
