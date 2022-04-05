<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\user_comments;
use App\Models\categories;
use App\Models\userPosts;


class PostValid
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
            $path = $request->path();
            $path = explode("/",str_replace(" ","_",urldecode($path)));
            $current_post = userPosts::where("post_title",str_replace("_"," ",$path[2]))->where("post_category_id",$path[3])->first();
        if($current_post){
            
            $request->request->add(["post_content"=>$current_post]);
            return $next($request->merge(['post_content' => $current_post]));
        }
        
        else{
            return $next($request);
        }
        
    }
}
