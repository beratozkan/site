<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categories;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [" Mobile App Development"=>"All mobile app development discussions; Xcode, Android studio, Swift etc.",
        "hoşgeldiniz"=>"",
        "Back-End Development"=>"This section is for getting help with anything Back-end related. This refers to anything that is server-related or in other words what's under the hood e.g. Engine."
,"Project Development"=>"Working with multiple languages? This is your spot to ask for help.","Computer, Server and Hardware Configurations"=>"Get help with setting up your computer, server and hardware. From installing software and configuring to installing hardware.",
];
foreach ($categories as $key => $value) {
    categories::create([
        "name"=>$key,
        "category_information"=>$value,
        "main_category_id"=>0
    ]);
}
    }
}
