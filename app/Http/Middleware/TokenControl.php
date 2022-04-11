<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class tokenControl
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
        if($user=User::where('email',$request->email)->first()){
            if($user->remember_token == $request->token && $request->email == $user->email ){

                   
                    return $next($request);


            }
            else{
                return response()->json("gecersiz token");
        }
    }
    else{
        return response()->json("boyle bir email yok");
    }
    }
}
