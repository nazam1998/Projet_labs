<?php

use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('categories')->insert([
        ['categorie'=>'Design'],
        ['categorie'=>'Divers'],
        ['categorie'=>'Culture'],
        ['categorie'=>'Agriculture'],
     ]);
    }
}
