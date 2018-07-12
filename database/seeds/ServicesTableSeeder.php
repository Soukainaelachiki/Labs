<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'titre'=>"Get in the lab",
                'contenu'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                'icon_id'=> 23,
            ],
            [
                'titre'=>"Project Online",
                'contenu'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                'icon_id'=> 11,
            ],
            [
                'titre'=>"Smart Marketing",
                'contenu'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                'icon_id'=> 37,
            ],
            [
                'titre'=>"Social Media",
                'contenu'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                'icon_id'=> 39,
            ],
            [
                'titre'=>"Brainstorming",
                'contenu'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                'icon_id'=> 36,
            ],
            [
                'titre'=>"Documented",
                'contenu'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                'icon_id'=> 26,
            ],
            [
                'titre'=>"Responsive",
                'contenu'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                'icon_id'=> 18,
            ],
            [
                'titre'=>"Retina Ready",
                'contenu'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                'icon_id'=> 43,
            ],
            [
                'titre'=>"Ultra Modern",
                'contenu'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                'icon_id'=> 12,
            ],
              
        ]);
    }
}
