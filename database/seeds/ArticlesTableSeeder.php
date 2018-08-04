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

        $images = [
            ['image' => 'http://mecuben.com/wp-content/uploads/2015/12/599b0559-e897-477f-aba4-ebce44eee266.jpg'],
            ['image' => 'https://sites.google.com/site/hinhanhdep24h/_/rsrc/1436687439788/home/hinh%20anh%20thien%20nhien%20dep%202015%20%281%29.jpeg'],
            ['image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSIKD1rvgUvWtQXLsp_U3JGyCTucx-ucQXbHTWg11FB-PXFfdcTQ'],
            ['image' => 'https://www.dkn.tv/wp-content/uploads/2018/04/dccc.jpg'],
            ['image' => 'https://media.tintucvietnam.vn/uploads/medias/2018/01/28/mot-dem-khong-ngu-vi-nhung-hinh-anh-tuyet-dep-nay-cua-tran-chung-ket-u23-chau-a-bb-baaacUzkh9.jpg'],
        ];

        foreach (range(1,3) as $index){
            foreach ($images as $image) {
                Article::create([
                    'title' => $faker->paragraph($nbSentences = 1, $variableNbSentences = true),
                    'user_id' => $faker->randomElement($users->pluck('id')->toArray()),
                    'content' => $faker->paragraph(50),
                    'img' => $faker->randomElement($image),
                    'view' => $faker->numberBetween($min = 1, $max = 9000),
                    'like' => $faker->numberBetween($min = 1, $max = 9000),
                ]);
            }
        }
    }
}
