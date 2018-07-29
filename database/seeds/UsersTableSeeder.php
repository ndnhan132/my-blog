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
        User::create([
            'name'=>'dinh nhan',
            'username'=>'nhan',
            'email'=>'nhan@asd.con',
            'password'=>bcrypt('123'),
            'birthday'=>'1123-01-10',
            'gender'=>1,
            'phone'=>1212121212,
            'address'=>'Viet nam',
            'img'=>'http://truyencv.com/images/avatar/ddddaaaa-1504004292.jpg?v=1',
            'description'=>'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        ]);

        $faker= Faker::create();
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
                'img'=>'https://cdn.dribbble.com/users/199982/screenshots/4044699/furkan-avatar-dribbble_1x.png',
                'description'=>$faker->paragraph($nbSentences = 1, $variableNbSentences = true),
            ]);
        }
    }
}
