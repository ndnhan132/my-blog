<?php

use Illuminate\Database\Seeder;
use App\Role
use App\User

class RoleUserTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::all();
        User::all()->each(function ($user) as ($role) {
            $user->role()->attach(
                $role->random(rand(1, 2))->pluck('id')->toArray()
            );
        });
    }
}
