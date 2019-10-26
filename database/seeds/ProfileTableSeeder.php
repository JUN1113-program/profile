<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = ["introduction" => "趣味でプログラミングを行っています",
                    "career" => "大学中退",
                    "certification" => "普通自動車免許",
                    "goal" => "フルスタックエンジニアになり人のためになるアプリ開発",
                    "skill" => "言語: Ruby, Java, PHP, UWSC;\n FW: Ruby on Rails, Laravel;\n DB: MySQL;\n Server: AWS, heroku;\n OS: Windows, MacOS;\n エディタ: VScoder, サクラエディタ, Eclipse",
                    "age" => 25,
                    "user_id" => 1];
        \App\Profile::create($profile);
    }
}
