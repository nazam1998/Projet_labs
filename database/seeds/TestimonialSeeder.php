<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'image'=>'avatar/01.jpg',
            'nom'=>'Michael',
            'prenom'=>'Smith',
            'fonction'=>'CEO Company',
            'texte'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.'
        ]);
        DB::table('testimonials')->insert([
            'image'=>'avatar/02.jpg',
            'nom'=>'Michael',
            'prenom'=>'Smith',
            'fonction'=>'CEO Company',
            'texte'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.'
        ]);
        DB::table('testimonials')->insert([
            'image'=>'avatar/03.jpg',
            'nom'=>'Michael',
            'prenom'=>'Smith',
            'fonction'=>'CEO Company',
            'texte'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.'
        ]);
        DB::table('testimonials')->insert([
            'image'=>'avatar/01.jpg',
            'nom'=>'Michael',
            'prenom'=>'Smith',
            'fonction'=>'CEO Company',
            'texte'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.'
        ]);
        DB::table('testimonials')->insert([
            'image'=>'avatar/02.jpg',
            'nom'=>'Michael',
            'prenom'=>'Smith',
            'fonction'=>'CEO Company',
            'texte'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.'
        ]);
        DB::table('testimonials')->insert([
            'image'=>'avatar/03.jpg',
            'nom'=>'Michael',
            'prenom'=>'Smith',
            'fonction'=>'CEO Company',
            'texte'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.'
        ]);
    }
}
