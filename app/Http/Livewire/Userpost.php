<?php

namespace App\Http\Livewire;
use App\Models\userPosts;
use Livewire\Component;
use App\Models\User;

use Illuminate\Http\Request;
use auth;

class Userpost extends Component
{
    public $miktar;
    public function render()
    {
        $this->miktar = User::all()->except(Auth::id());
        $this->miktar = (count($this->miktar));
        return view('livewire.userpost',["miktar"=>$this->miktar]);
    }
    
    
}
