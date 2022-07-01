<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        // clear the users table first
        User::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make(toptal);

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => $password
        ]);


        //and now, let's generate a few dozen users for our app
        for($i =0; $i<10; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
