<?php

use App\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();
        factory(Article::class,10)->create()->each(function ($u) {
            $u->tags()->save(factory(App\Tag::class)->make());
        });
        factory(App\Tag::class, 20)->create()->each(function ($tag) {
            $tag->articles()->save(factory(App\Article::class)->make());
        });
        
    }
}
