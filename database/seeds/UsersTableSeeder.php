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
            'name'=>"administrateur",
            'email'=>"admin@hotmail.com",
            "password"=> bcrypt('maitre'),
        ]);
    }
}
