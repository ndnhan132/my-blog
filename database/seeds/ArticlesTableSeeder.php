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

        foreach (range(1,20) as $index){
            Article::create([
                'title'=>$faker->paragraph($nbSentences = 1, $variableNbSentences = true),
                'user_id'=>$faker->randomElement($users->pluck('id')->toArray()),
                'content'=> $faker->paragraph(50),
                'img'=>$faker->imageUrl($width = 640, $height = 480),
                'view'=>$faker->numberBetween($min = 1, $max = 9000),
                'like'=>$faker->numberBetween($min = 1, $max = 9000),
//                'report'=>$faker->numberBetween($min = 1, $max = 9000),
//                'dislike'=>$faker->numberBetween($min = 1, $max = 9000),
            ]);
        }
    }
}
