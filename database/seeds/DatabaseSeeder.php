<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // DB::statement('SET_FOREIGN_KEY');
        $this->call(AccueilSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(CarouselSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(TagSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(ServicepageSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(TestimonialSeeder::class);
    }
}
