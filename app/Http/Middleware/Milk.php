<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Milk
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   /*  public function handle(Request $request, Closure $next): Response
    {

        $name=$request->query("name");  //placing middleware limitations
      
        if (strpos ($name ,'a'))
          {
           // abort (400);
           $response = $next($request); 
           return response ("Page Restricted, Your name doesn't start with an A!");
          }
        return $next($request);
    } */

    public function handle(Request $request, Closure $next): Response
{
    $name = $request->query("name");  // placing middleware limitations

    // Check if the name is not null and starts with the letter 'a' (case-insensitive)
    if ($name === null || strtolower($name[0]) !== 'a') {
        return response("Page Restricted, Your name doesn't start with an A!");
    }

    return $next($request);
}
}

//OR 

/* public function handle(Request $request, Closure $next): Response
    {
//name doesnt start with A block access

        $name=$request->query("name");

    if (strpos(strtolower($name), 'a') !== 0) {
        return response("Access denied");
    }
    
    return $next($request);
    
    }
}    // when a starts the name */