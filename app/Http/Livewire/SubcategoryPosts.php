<?php

namespace App\Http\Livewire;
use App\Models\userPosts;
use App\Models\categories;
use App\Models\user_comments;


use Livewire\Component;

class SubcategoryPosts extends Component
{
    public $postsAll;
    public $category_info;
    public $subpost_info;
    public $category_name;
    public $last_postsall;
    public $selected_post;
    public $post;
    public $key;
    public function render()
    {
        
        $this->getCategoryPosts();
        return view('livewire.subcategory-posts',);
    }
    public function getCategoryPosts(){
        $this->category_name = $this->category_info["category_name"];
        $this->postsAll = userPosts::where("post_category_id",$this->category_info["category_id"])->get();
        
    }
    public function getCategoryId(){
        $this->category_id = categories::where("name",$this->category_name)->first()->id;
        
    }
    public function increase_post_view_and_view(){
        
        
        
        $this->post->view_count +=1;   
        $this->post->save();
    
}
}