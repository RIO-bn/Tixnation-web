<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //buat import class DB 
class studioseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('studios')->insert([
        [
            'name' => 'studio1'
        ],
        [
            'name' => 'studio2'
        ],
        [
            'name' => 'studio3'
        ]
        ]);   
    }
}
