<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\categories;
use App\Models\userPosts;

class DisplayCategories extends Component
{
    public $category_id;
    public $description;
    public $name;
    public $working_cat;
    public $sub_category;
    public function render()
    {
        $category = categories::where('main_category_id',0)->get();
        
        return view('livewire.display-categories',["category"=>$category]);
    }
    public function createcat(){
        categories::create(["name"=>$this->name,"category_information"=>$this->description,"main_category_id"=>$this->category_id]);
    }
    public function displaycat($id){
        $this->sub_category = categories::where("main_category_id",$id)->get();
        
    }
    public function displayCategoryInfo(){
        //categories::where("main_category_id",$id)->get();
    }
    public function displayCategoryPost($id){
         $this->working_cat= userPosts::where("post_category_id",$id)->get();

    }
   
}
