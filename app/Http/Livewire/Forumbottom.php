<?php

namespace App\Http\Livewire;
use App\Models\userPosts;
use App\Models\User;

use Livewire\Component;

class Forumbottom extends Component
{
    public $post_count;
    public $member_count;
    public $last_post;
    
    public function render()
    {
        $this->getPostCount();
        $this->getMemberCount();
        $this->getLastPost();

        return view('livewire.forumbottom');
    }
    private function getPostCount(){

        $this->post_count = userPosts::count();
    }
    private function getMemberCount(){
        $this->member_count = User::count();
    }
    private function getLastPost(){
        $this->last_post = userPosts::all()->last();
    }
    
}
