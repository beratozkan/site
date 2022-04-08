<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\categories;

class categoryValid
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
        
        $path = explode("/",$request->path())[1];
        $path = urldecode($path);
        
        if($f = categories::where("name",$path)->first()){
            $request->request->add(["category_id"=>$f->id]);
            $request->request->add(["category_name"=>$f->name]);

            return $next($request->merge(['category_id' => $f->id,"category_name"=>$f->name]));
            //return response($f->id);
        }
        else{
            
            return redirect("forum");
            //return $next($request);
        }
       
    }
}
