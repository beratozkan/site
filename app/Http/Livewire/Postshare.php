<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\userPosts;
use auth;

class Postshare extends Component
{
    public $posttitle;
    public $postcontent;
    public $cat_id;
    public function render()
    {
        return view('livewire.postshare');
    }
    public function savepost(){
        
        UserPosts::create(["post_content"=>$this->postcontent,"post_title"=>$this->posttitle,"user"=>Auth()->user()->name,"post_category_id"=>$this->cat_id]); 
    }
}
