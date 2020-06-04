<?php

namespace App\Http\Middleware;

use Closure;

class AuthToken
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
        $token = $request->header('AUTH-TOKEN');
                
        if($token != 'uZbZBDSYazUrzarNSxQQ35VIPI5daFJmY3u4jWM47lwwlhcxhdpkU1skp5zX'){
            return response()->json(['message' => 'Token incorrect or not found!'],401);
        }

        return $next($request);
    }
}
