<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'nom'=>'Vestibulum maximus'
            ],
            [
                'nom'=>'Nisi eu lobortis pharetra'
            ],
            [
                'nom'=>'Orci quam accumsan
                '
            ],
            [
                'nom'=>'Auguen pharetra massa'
            ],
            [
                'nom'=>'Tellus ut nulla'
            ],
            [
                'nom'=>'Etiam egestas viverra'
            ],
            
        ]);
       
    }

}
