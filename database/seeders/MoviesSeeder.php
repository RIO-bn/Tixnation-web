<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //buat import class DB 
class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            
        [
            'name' => 'Dune 2',
            'genre' => 'action',
            'duration' => 120,
            'price' => 45000,
        ],
        [

            'name' => 'Oppenheimer',
            'genre' => 'Thriller',
            'duration' =>120,
            'price' => 45000,
        ],
        [
            'name' => 'Extraction 2',
            'genre' => 'action',
            'duration' =>120,
            'price' => 45000,
        ],
        [
            'name' => 'The Nun 2',
            'genre' => 'horror',
            'duration' =>120,
            'price' => 45000,
        ],
        [
            'name' => 'Annabelle',
            'genre' => 'horror',
            'duration' =>120,
            'price' => 45000,
        ],
        [
            'name' => 'Conjuring 3',
            'genre' => 'horror',
            'duration' =>120,
            'price' => 45000,
        ],
        [
            'name' => 'We Live In Time',
            'genre' => 'romance',
            'duration' =>120,
            'price' => 45000,
        ],
        [
            'name' => 'Silent Love',
            'genre' => 'romance',
            'duration' =>120,
            'price' => 45000,
        ],
        [
            'name' => 'The Best Of Me',
            'genre' => 'horror',
            'duration' =>120,
            'price' => 45000,
        ],
       ] );
    }
}
