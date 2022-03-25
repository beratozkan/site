<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;



class Loginmodal extends Component
{
    
    
    public function render()
    {
        
        return view('livewire.loginmodal');
    }

   
   

}
