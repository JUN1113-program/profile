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
        $portfolios = [
                        [
                        "title" => "voCab",
                        "explanation" => "単語帳アプリ",
                        "env" => "Rails, JavaScript, Haml, SCSS, MySQL, heroku",
                        "url" => "https://vo-cab.herokuapp.com/",
                        "src" => "https://github.com/JUN1113-program/voCab",
                        "user_id" => 1
                        ],
                        [
                        "title" => "MiniWebLog",
                        "explanation" => "簡単な画像投稿ブログ",
                        "env" => "Rails, Haml, SCSS, MySQL, heroku",
                        "url" => "https://miniweblog.herokuapp.com/",
                        "src" => "https://github.com/JUN1113-program/mini-web-log",
                        "user_id" => 1
                        ],
                        [
                        "title" => "王様Kingdom",
                        "explanation" => "プレイヤーが王様になって国民を派遣するシミュレーションPRG",
                        "env" => "Java, jFrame, jPanel, Eclipse",
                        "url" => "",
                        "src" => "https://github.com/JUN1113-program/Kingdom",
                        "user_id" => 1
                        ]
                    ];
        foreach($portfolios as $portfolio){
            \App\Portfolio::create($portfolio);
        }
    }
}
