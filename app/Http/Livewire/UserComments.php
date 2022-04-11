<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\user_comments;
use App\Models\User;
use App\Models\userPosts;

use auth;
use Illuminate\Pagination\Paginator;

class UserComments extends Component
{
    public $post_id;
    public $show_user_comments,$reply_user_username;
    public $replyed_comments = array();
    public $user_reply;
   
    public $comment,$replyed_post,$make_comment;
    public function render()
    {
        //$this->getUserCommnets();
        return view('livewire.user-comments',["comments"=>user_comments::where("post_id",$this->post_id)->paginate(5)]);
    }
    public function getUserCommnets(){
       
        $this->show_user_comments =user_comments::where("post_id",$this->post_id);
        
    }
   
    public function getUser($id){
        $user_name = user::find($id);
        $this->user_info =  [$user_name->name,$user_name->role];
    }
    public function boot()
{
    Paginator::useBootstrapFive();
    Paginator::useBootstrapFour();
}
    public function getreplycomment($replyed_comment_id){
        $this->replyed_post = user_comments::where("comment_id",$replyed_comment_id)->first();
        $this->reply_user_username = User::find($this->replyed_post->user);
     
     
    }
    public function new_comment($reply=0){
        $user_id = Auth()->id();
        $post = userPosts::where("post_id",$this->post_id)->first();
        $post->reply_count +=1;
        $post->save();
        if($this->make_comment){
             $reply=$this->make_comment;
        }
        user_comments::create(["comment_content"=>$this->comment,"post_id"=>$this->post_id,"user"=>$user_id,"if_is_replyed"=>$reply]);
        $this->comment = "";
    }
    public function reply_to_user($post_id){
      
       $this->make_comment = $post_id;
       //$this->new_comment($post_id);


    }
}
