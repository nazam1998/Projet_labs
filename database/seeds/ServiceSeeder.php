<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'logo' => 'flaticon-023-flask',
                'titre' => 'Project Online',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'color'=>'blue'
            ],
            [
                'logo' => 'flaticon-011-compass',
                'titre' => 'Project Online',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'color'=>'green'
            ],
            [
                'logo' => 'flaticon-037-idea',
                'titre' => 'Project Online',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'color'=>'yellow'
            ],
            [
                'logo' => 'flaticon-039-vector',
                'titre' => 'Project Online',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'color'=>'red'
            ],
            [
                'logo' => 'flaticon-036-brainstorming',
                'titre' => 'Project Online',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'color'=>'green'
            ],
            [
                'logo' => 'flaticon-026-search',
                'titre' => 'Project Online',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'color'=>'blue'
            ],
            [
                'logo' => 'flaticon-018-laptop-1',
                'titre' => 'Project Online',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'color'=>'green'
            ],
            [
                'logo' => 'flaticon-043-sketch',
                'titre' => 'Project Online',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'color'=>'yellow'
            ],
            [
                'logo' => 'flaticon-012-cube',
                'titre' => 'Project Online',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
                'color'=>'blue'
            ],
        ]);
    }
}
