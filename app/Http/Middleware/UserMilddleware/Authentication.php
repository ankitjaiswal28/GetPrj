<?php

namespace App\Http\Middleware\UserMilddleware;
use Session;
use Closure;
class Authentication
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
        if (!$request->session()->exists('username')) {
            return redirect('/');
        }
        return $next($request);

    }
}
