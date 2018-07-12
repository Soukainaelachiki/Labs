<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'theme'=>'Branding'
            ],
            [
                'theme'=>'Identity'
            ],
            [
                'theme'=>'Video'
            ],
            [
                'theme'=>'Design'
            ],
            [
                'theme'=>'Inspiration'
            ],
            [
                'theme'=>'Web Design'
            ],
            [
                'theme'=>'Photography'
            ],
        ]);
       
    }
}
