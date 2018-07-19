<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'admin'],
            ['name' => 'author'],
            ['name' => 'user'],
            ['name' => 'guest']
        ];
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
