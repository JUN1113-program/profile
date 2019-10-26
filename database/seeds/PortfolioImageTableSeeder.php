<?php

use Illuminate\Database\Seeder;

class PortfolioImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                "image" => "https://i.gyazo.com/46483edcfc51cea6ce9cb816701436fa.png",
                "portfolio_id" => 1
            ],
            [
                "image" => "https://i.gyazo.com/bf9e02b4ce60464c20207fdddec669f3.jpg",
                "portfolio_id" => 2
            ],
            [
                "image" => "https://i.gyazo.com/bcc11aff98f3241da5a0c041fd04fead.png",
                "portfolio_id" => 3
            ],
        ];
        foreach ($images as $image) {
            \App\PortfolioImage::create($image);
        }
    }
}
