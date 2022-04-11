<?php

namespace App\Http\Livewire;
use App\Models\userPosts;
use App\Models\categories;
use App\Models\user_comments;
use Livewire\WithPagination;

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
    public $current_page;
    public $key;
    use WithPagination;

    public function render()
    {
        $this->category_name = $this->category_info["category_name"];
       
        //$postsAll = userPosts::paginate(10);
        //$displayed_post = $postsAll->paginate(10);
        return view('livewire.subcategory-posts',["posts"=>userPosts::where("post_category_id",$this->category_info["category_id"])->paginate(10)]);
    }
    public function updatingSearch()
    {
        $this->resetPage();
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