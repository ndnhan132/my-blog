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
        foreach (range(1,10) as $index){
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>$faker->password,
                'password'=>$faker->password,
                'birthday'=>$faker->date($format = 'Y-m-d', $max = 'now'),
                'gender'=>$faker->randomElement($array = array ('0','1')),
                'phone'=>$faker->e164PhoneNumber,
                'address'=>$faker->address,
                'img'=>$faker->imageUrl($width = 640, $height = 480),
            ]);
        }
    }
}
