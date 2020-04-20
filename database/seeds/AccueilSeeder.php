<?php

use Illuminate\Database\Seeder;

class AccueilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accueils')->insert([
            'logo'=>'logo.png',
            'big_logo'=>'big-logo.png',
            'titre_carousel'=>'Get your freebie template now!',
            'titre_about'=>'Get in the Lab and discover the world',
            'text1_about'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.',
            'text2_about'=>'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.',
            'titre_service'=>'Get in [the Lab] and see the services',
            'titre_testimonials'=>'What our clients say',
            'titre_team'=>'Get in [the Lab] and see the services',
            'titre_promotion'=>'Are you ready to stand out?',
            'text_promotion'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.',
            'showbutton'=>1
        ]);
    }
}
