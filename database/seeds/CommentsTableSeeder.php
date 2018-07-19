<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Comment;
use App\User;
use App\Article;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users= User::all();
        $articles= Article::all();
        $faker= Faker::create();
        foreach (range(1,100) as $index){
            Comment::create ([
                'user_id'=> $faker->randomElement($users->pluck('id')->toArray()),
                'article_id'=> $faker->randomElement($articles->pluck('id')->toArray()),
                'comment'=>$faker->paragraph($nbSentences = 2, $variableNbSentences = true),
            ]);
        }
    }
}
