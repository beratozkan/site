<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\user_comments;
use auth;
use Illuminate\Http\Request;

class MakeComment extends Component
{
    
    public $post_id;
    public $is_reply=0;
    public $comment;
    public function render()
    {
        $this->user_id = Auth()->id(); 

        return view('livewire.make-comment');
    }
    public function new_comment(Request $request){
        
       
        user_comments::create(["comment_content"=>$this->comment,"post_id"=>$this->post_id,"user"=>$this->user_id]);
    }
   
}
