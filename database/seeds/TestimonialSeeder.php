<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        $image1=rand().time().'.jpg';
        Storage::disk('public')->copy('avatar/01.jpg',$image1);
        DB::table('testimonials')->insert([
            'image'=>$image1,
            'nom'=>'Michael',
            'prenom'=>'Smith',
            'fonction'=>'CEO Company',
            'texte'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.'
        ]);
        $image2=rand().time().'.jpg';
        Storage::disk('public')->copy('avatar/02.jpg',$image2);
        DB::table('testimonials')->insert([
            'image'=>$image2,
            'nom'=>'Michael',
            'prenom'=>'Smith',
            'fonction'=>'CEO Company',
            'texte'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.'
        ]);
        $image3=rand().time().'.jpg';
        Storage::disk('public')->copy('avatar/03.jpg',$image3);
        DB::table('testimonials')->insert([
            'image'=>$image3,
            'nom'=>'Michael',
            'prenom'=>'Smith',
            'fonction'=>'CEO Company',
            'texte'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.'
        ]);
    }
}
