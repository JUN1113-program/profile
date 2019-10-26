<?php

use Illuminate\Database\Seeder;

class IconTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $icon = [   "image" => "https://i.gyazo.com/61cac1442794e35432b8b6372277849d.png",
                    "user_id" => 1];
        \App\Icon::create($icon);
    }
}
