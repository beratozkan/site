<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserComments2 extends Component
{
    public function render()
    {
        return view('livewire.user-comments2');
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
        if($this->make_comment){
             $reply=$this->make_comment;    
        }
        user_comments::create(["comment_content"=>$this->comment,"post_id"=>$this->post_id,"user"=>$user_id,"if_is_replyed"=>$reply]);
        $this->comment = "";
    }
    public function reply_to_user($index){
      $this->make_comment =  $this->show_user_comments[$index]->comment_id;
       
       //$this->new_comment($this->make_comment);


    }
}
