<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $utype)
    {
        if($utype == 'seller' && auth()->user()->utype != 'SELL') {
            abort(403);
        }

        if($utype == 'customer' && auth()->user()->utype != 'USR') {
            abort(403);
        }
        
        return $next($request);
    }
}
