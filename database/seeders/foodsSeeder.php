<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB; //buat import class DB 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class foodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('foods')->insert( [
            [
                'name' => 'popcorn',
                'price' => 40000,
            ],
            [
                'name' => 'hotdog',
                'price' => 60000,
            ],
            [
                'name' => 'nachos',
                'price' => 50000,
            ],
            [
                'name' => 'pizza',
                'price' => 150000,
            ],
            [
                'name' => 'Ice Tea',
                'price' => 20000,
            ],
            [
                'name' => 'Ice Coffee',
                'price' => 30000,
            ],
            [
                'name' => 'Mineral Water',
                'price' => 10000,
            ],
            [
                'name' => 'Soda',
                'price' => 15000,
            ],
        ]);
    }
}
