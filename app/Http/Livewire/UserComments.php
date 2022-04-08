<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\user_comments;
use App\Models\User;
use auth;
class UserComments extends Component
{
    public $post_id;
    public $show_user_comments;
    public $user_info;
    public $make_comment;
    public $comment;
    public function render()
    {
        $this->getUserCommnets();
        return view('livewire.user-comments',["comments"=>$this->show_user_comments]);
    }
    public function getUserCommnets(){
       
        $this->show_user_comments =user_comments::where("post_id",$this->post_id)->get();
        
    }
   
    public function getUser($id){
      
        
        $user_name = user::find($id);
        $this->user_info =  [$user_name->name,$user_name->role];
    }
    public function new_comment($reply=0){
        $user_id = Auth()->id(); 
        
        user_comments::create(["comment_content"=>$this->comment,"post_id"=>$this->post_id,"user"=>$user_id,"if_is_replyed"=>$reply]);
        $this->comment = "";
    }
    public function reply_to_user($index){
       $this->make_comment =  $this->show_user_comments[$index]->comment_id;
        

    }
}
