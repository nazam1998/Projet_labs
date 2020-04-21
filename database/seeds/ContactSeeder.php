<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'titre'=>'Contact us',
            'texte'=>'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
            'sous_titre'=>'Main Office',
            'adresse'=>'C/ Libertad, 34',
            'ville'=>'05200 Arévalo',
            'numero'=>'0034 37483 2445 322',
            'email'=>'hello@company.com'
        ]);
    }
}
