<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(PortfolioTableSeeder::class);
        $this->call(ProfileTableSeeder::class);
        $this->call(PortfolioImageTableSeeder::class);
        $this->call(IconTableSeeder::class);
    }
}
