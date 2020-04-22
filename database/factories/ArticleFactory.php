<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\Categorie;
use App\Tag;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;

$factory->define(Article::class, function (Faker $faker) {
    $imageName=Str::random(10).'.jpg';
    Storage::disk('public')->copy('blog/blog-1.jpg', $imageName);
    return [
        'titre'=>$faker->name,
        'texte'=>$faker->text,
        'categorie_id'=>Categorie::inRandomOrder()->first()->id,
        'user_id'=>User::inRandomOrder()->where('role_id','<',4)->first()->id,
        'image'=>$imageName,
        'valide'=>true
    ];
});
$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'tag' => $faker->unique()->word,
    ];
});
