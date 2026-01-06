<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //buat import class DB 

class schedulesseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schedules')->insert([
            ['movie_id' => 1, 'studio_id' => 1, 'schedule_time' => '10:00 - 12:00'],
            ['movie_id' => 2, 'studio_id' => 1, 'schedule_time' => '12:30 - 14:30'],
            ['movie_id' => 3, 'studio_id' => 1, 'schedule_time' => '15:00 - 17:00'],
            ['movie_id' => 4, 'studio_id' => 2, 'schedule_time' => '10:00 - 12:00'],
            ['movie_id' => 5, 'studio_id' => 2, 'schedule_time' => '12:30 - 14:30'],
            ['movie_id' => 6, 'studio_id' => 2, 'schedule_time' => '15:00 - 17:00'],
            ['movie_id' => 7, 'studio_id' => 3, 'schedule_time' => '10:00 - 12:00'],
            ['movie_id' => 8, 'studio_id' => 3, 'schedule_time' => '12:30 - 14:30'],
            ['movie_id' => 9, 'studio_id' => 3, 'schedule_time' => '15:00 - 17:00'],
            ['movie_id' => 1, 'studio_id' => 3, 'schedule_time' => '17:30 - 19:30'],
            ['movie_id' => 2, 'studio_id' => 2, 'schedule_time' => '17:30 - 19:30'],
            ['movie_id' => 3, 'studio_id' => 1, 'schedule_time' => '17:30 - 19:30'],
        ]);
    }
}
