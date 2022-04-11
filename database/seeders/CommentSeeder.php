<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categories;
use App\Models\user_comments;



class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        for($i = 1; $i<105;$i++){
            user_comments::create(["comment_content"=>"comment for ".$i,"post_id"=>$i,"user"=>1,"if_is_replyed"=>0]);
        }
    }
}
