<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Auth;
class adminlogin extends Controller
{
    public $msg = "";
    
    function loginuser(Request $request)
    {
       
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        
        
        if (Auth::attempt($credentials) ){
            
            
                return redirect()->to("forum");;
                
            
        }
        else{
            return back()->withErrors(["error_login"=>"user not found"]);
        }
        }
       

}
