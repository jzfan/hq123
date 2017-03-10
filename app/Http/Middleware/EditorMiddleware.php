<?php

namespace App\Http\Middleware;

use Closure;

class EditorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = \Auth::user();
        if ($user->role === 'editor' && $user->id == $request->id) {
            return $next($request);
        }
        return response()->json(['data'=>'auth failed', 'code'=>401]);
    }
}
