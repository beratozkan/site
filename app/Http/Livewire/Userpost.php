<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class Userpost extends Component
{
    public function render()
    {
        return view('livewire.userpost');
    }
    public function logout(Request $request){

        $this->emit("logoutuser",$request);
        $this->emit(event:"renderpage");
    }
}
