<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class userauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        /*if($request->passwd != $request->r_passwd){
            return response()->json('hata');
            
        }
        else{
            return $next($request);
        }*/
        if($request->passwd){
            return response()->json("error");
        }
        $query = $request->input();
        foreach ($query as $key => $value) {
            if($value == "" || $value == " "){
                return response()->json($key." can not be empty");
            }
           
        }
     
       return $next($request);

        
    }
}

