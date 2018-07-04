<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'=>"soukaina",
            'email'=>"souki@hotmail.com",
            'role_id'=> 1,
            "password"=> bcrypt('maitre'),
        ]);
    }
}
