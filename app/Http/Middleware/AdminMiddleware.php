<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class AdminMiddleware
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

        if (!Auth::user()->hasPermissionTo('Administer roles & permissions')) // 用户是否具备此权限
        {
            abort('401');
        }

        return $next($request);
    }
}
