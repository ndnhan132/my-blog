<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Article;
use App\User;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker= Faker::create();

        $users= User::all();

        foreach (range(1,50) as $index){
            Article::create([
                'title'=>$faker->paragraph($nbSentences = 1, $variableNbSentences = true),
                'user_id'=>$faker->randomElement($users->pluck('id')->toArray()),
                'content'=> $faker->paragraph(20),
                'img'=>$faker->imageUrl($width = 640, $height = 480),
                'view'=>123,
                'like'=>123,
                'report'=>123,
                'dislike'=>123,
            ]);
        }
    }
}
