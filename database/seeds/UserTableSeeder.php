<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [   "name" => "YOSHI",
                    "email" => "test@test",
                    "password" => "test"
                ];
        \App\User::create($user);
    }
}
