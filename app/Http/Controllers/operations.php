<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class operations extends Controller
{
    function op(){

    }
    function store(){

    }
    public function add(Request $request){
    
        $name = $request->name;
        $surname = $request->surname;
        $passwd = $request->passwd;
        $email  = $request->email;
        $r_passwd = $request->r_passwd;
        
            }
}
