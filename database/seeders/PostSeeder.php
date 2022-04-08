<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categories;
use App\Models\userPosts;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = array("c++","c","c#","Java","PHP","Python","Lua");
        for ($k=0; $k < 15; $k++) { 
        for ($i=0; $i < 7; $i++) { 
            userPosts::create([
                "user"=>"root",
                "post_title"=>$posts[$i]." baslık ".$k,
                "post_content"=>$posts[$i]." content ".$k,
                "post_category_id"=>$i+10,
               
            ]);
        }
    }
    }
}
