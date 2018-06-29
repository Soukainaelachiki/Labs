<?php

use Illuminate\Database\Seeder;
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
        Role::create(
            [
                "name" => "Administrateur",
                "slug" => "admin"
            ]
        );
        Role::create(
            [
                "name" => "Éditeur",
                "slug" => "editor"
            ]
        );
    }
}
