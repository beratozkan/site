<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\userPosts;
use auth;
class Postshare extends Component
{
    public $posttitle;
    public $postcontent;
    
    public function render()
    {
        return view('livewire.postshare');
    }
    public function savepost(){
        
        //UserPosts::create([])
    }
}
