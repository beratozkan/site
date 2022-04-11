<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\userPosts;
use App\Models\user_comments;


class ShowSubCategory extends Component
{
    public $sub_category_posts;
    public $working_cat;
    public $comment_count;
    public $last_post;
    public function render()
    {

        return view('livewire.show-sub-category');
    }
    public function displayCategoryPost($id){
        $this->working_cat= userPosts::where("post_category_id",$id)->count();
        
        }
        
}
