<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        User::create([
            'name'=>'dinh nhan',
            'username'=>'admin',
            'email'=>'nhan@asd.con',
            'password'=>bcrypt('123'),
            'birthday'=>$faker->date($format = 'Y-m-d', $max = 'now'),
            'gender'=>'0',
            'phone'=>'1212121212',
            'address'=>'Viet nam',
            'img'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStuuB7ahwgQWlL-7LxMqpbU_BavHDDiGG0ymG1RSM1r9lXbeb7',
            'description'=>'Of course, you may not always want to select all columns from a database table.'
         ]);


        foreach (range(1,10) as $index){
            User::create([
                'name'=>$faker->name,
                'username'=>$faker->userName,
                'email'=>$faker->email,
                'password'=>bcrypt($faker->password),
                'birthday'=>$faker->date($format = 'Y-m-d', $max = 'now'),
                'gender'=>$faker->randomElement($array = array ('0','1')),
                'phone'=>$faker->e164PhoneNumber,
                'address'=>$faker->address,
                'img'=>$faker->imageUrl($width = 640, $height = 480),
                'description'=>$faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            ]);
        }
    }
}
