<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        //truncate our existing records to start fom scratch.
        Article::truncate();

        $faker = \Faker\Factory::create();

        //and now, let's create a few articles in our db
        for($i =0; $i<50; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
