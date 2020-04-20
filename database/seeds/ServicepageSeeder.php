<?php

use Illuminate\Database\Seeder;

class ServicepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicepages')->insert([
            'titre1'=>'Get in [the Lab] and see the services',
            'titre2'=>'Get in [the Lab] and Discover',
        ]);
    }
}
