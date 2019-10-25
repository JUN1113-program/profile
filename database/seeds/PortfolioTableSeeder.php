<?php

use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolio =    [
                        "title" => "voCab",
                        "explanation" => "単語帳アプリ",
                        "env" => "Rails, JavaScript, Haml, SCSS, MySQL, heroku",
                        "url" => "https://vo-cab.herokuapp.com/",
                        "src" => "https://github.com/JUN1113-program/voCab",
                        "user_id" => 1
                        ];
        \App\Portfolio::create($portfolio);
    }
}
