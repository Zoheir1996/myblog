<?php

namespace Database\Seeders;

use App\Models\Article;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 26; $i++){

        Article::create([
            'title' => $faker-> sentence(),
            'subtitle' =>$faker -> sentence(),
            'content'=> $faker->text($MaxNbChars=600)
        ]);
    }
}
}