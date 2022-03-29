<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;



use Illuminate\Support\Facades\Auth;


class UserInformation extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.user-information');
    }
    
    public function logout(Request $request){
        
        Auth::logout();
        $request->session()->flush();
        return redirect("/forum");
    }
    public function userinformation(){

    }
    public function useradd(){

        return redirect("user-ekle");
    } 
}
