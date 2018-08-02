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
        $comments = [
            ['comment' => 'good'],
            ['comment' => 'very good'],
            ['comment' => 'great'],
            ['comment' => 'the article very useful'],
            ['comment' => 'Very nice'],
        ];

        $faker= Faker::create();
        foreach (range(1,100) as $index){
            foreach ($comments as $comment) {
                Comment::create ([
                    'user_id'=> $faker->randomElement($users->pluck('id')->toArray()),
                    'article_id'=> $faker->randomElement($articles->pluck('id')->toArray()),
                    'comment'=>$faker->randomElement($comment),
                ]);
            }
        }
    }
}
