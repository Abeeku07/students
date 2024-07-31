<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Bouncer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $age=$request->query("age");  //placing middleware limitations
      
        if ($age < 18)
          {
           // abort (400);
           $response = $next($request); 
           return response ("Page Restricted, 18+ only!");
          }
        return $next($request);
    }
}
