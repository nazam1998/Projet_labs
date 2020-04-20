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
            'role_id'=>1
        ]);
        factory(User::class,6)->create();
    }
}
