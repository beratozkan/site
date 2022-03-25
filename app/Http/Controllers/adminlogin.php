<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Auth;
class adminlogin extends Controller
{

    function loginuser(Request $request)
    {
       
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        
        
        if (Auth::attempt($credentials) ){
            
            
            return redirect()->to("/");
        }
        else{
            return redirect()->back();
        }
     
        return back()->withErrors([
            'email' => 'not found in our database',
        ])->onlyInput(['email']);
     

    }   
}
