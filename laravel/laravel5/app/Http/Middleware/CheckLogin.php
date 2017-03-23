<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    //用于判断数组在session是否存在
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->get('user')) {
            return redirect('admin/login');
        }

        return $next($request);
    }
}
