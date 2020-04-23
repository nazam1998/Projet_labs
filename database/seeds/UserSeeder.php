<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('users')->insert([
            'nom'=>'Muhammad',
            'prenom'=>'Nazam',
            'email'=>'nazam90-be@mail.com',
            'password'=>Hash::make("nazam90-be@mail.com"),
            'image'=>'avatar/01.jpg',
            'role_id'=>2
        ]);
        DB::table('users')->insert([
            'nom'=>'Admin',
            'prenom'=>'Admin',
            'email'=>'admin@admin',
            'password'=>Hash::make("admin@admin"),
            'image'=>'avatar/02.jpg',
            'role_id'=>1
        ]);
        DB::table('users')->insert([
            'nom'=>'Redac',
            'prenom'=>'Redac',
            'email'=>'redac@redac',
            'password'=>Hash::make("redac@redac"),
            'image'=>'avatar/02.jpg',
            'role_id'=>3
        ]);
        DB::table('users')->insert([
            'nom'=>'Webmaster',
            'prenom'=>'Webmaster',
            'email'=>'web@web',
            'password'=>Hash::make("web@web"),
            'image'=>'avatar/02.jpg',
            'role_id'=>4
        ]);
        factory(User::class,6)->create();
    }
}
