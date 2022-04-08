<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\userPosts;
class ShowCategory extends Controller
{
    public $sub_category;
    public function show()
    {
        $category = categories::where('main_category_id',0)->get();
        
        return view('forumindex', [
            'categories' => $category,
        ]);
    }
    public function displaycat($id){
        $this->sub_category = categories::where("main_category_id",$id)->get();
        
    }
    
}
