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
                    "user_id" => 1];
        \App\Profile::create($profile);
    }
}
