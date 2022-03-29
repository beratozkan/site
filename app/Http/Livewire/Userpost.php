<?php

namespace App\Http\Livewire;
use App\Models\userPosts;
use Livewire\Component;
use Illuminate\Http\Request;

class Userpost extends Component
{
    public function render()
    {
        return view('livewire.userpost');
    }
    
}
