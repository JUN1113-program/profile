<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = [
            [   "title" => "Rails + heroku + order('rand()')が効かない話",
                "content" => "ABC",
                "user_id" => 1
            ],
            [   "title" => "font awesomeのトグルボタンを作る",
                "content" => "aaa",
                "user_id" => 1
            ],
            [   "title" => "seed",
                "content" => "abbaaa",
                "user_id" => 1
            ]
        ];
        foreach($blogs as $blog){
            \App\Blog::create($blog);
        }
    }
}
