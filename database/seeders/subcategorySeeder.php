<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categories;

class subcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategoryFor4 = ["Web Development"=>"Web development discussions that include HTML, CSS, JavaScript and more.",
        "Mobile App Development"=> "All mobile app development discussions; Xcode, Android studio, Swift etc",
        "Desktop Development" =>"All discussions regarding developing of desktop applications.",
        "Game Development" =>"All content for game development - including all Roblox development, Lua etc",
    ];
    foreach ($subcategoryFor4 as $key => $value) {
        categories::create([
            "name"=>$key,
            "category_information"=>$value,
            "main_category_id"=>4
        ]);
    }
    $subcategoryFor3 = ["C++"=>"Anything related to C++; tutorials, questions, guides & tricks etc.",
    "C"=>"C Programming","C#"=>"Discuss or get help with anything related to C#","Java" => "Anything related to Java development.",
    "PHP"=>"All PHP topics belong here!","Python" =>"Python!, Python!, Python! All about Python can be found here.","Lua"=>"All Lua related programming belongs here "];
    foreach ($subcategoryFor3 as $key => $value) {
        categories::create([
            "name"=>$key,
            "category_information"=>$value,
            "main_category_id"=>3
        ]);}
        categories::create([
            "name"=>" kendini tanıt",
            "category_information"=>"kendinizi tanıtınız",
            "main_category_id"=>2]);
            
}
}
