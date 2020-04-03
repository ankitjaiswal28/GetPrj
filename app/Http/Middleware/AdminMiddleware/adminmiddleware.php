<?php

namespace App\Http\Middleware\AdminMiddleware;
use Session;
use Closure;

class adminmiddleware
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
        $roleId = session()->get('roleId');
        if($roleId !== '2' ) {
            return redirect('/');
        }
        // if (!$request->session()->exists('username')) {
        //     return redirect('/');
        // }
        return $next($request);
    }
}
