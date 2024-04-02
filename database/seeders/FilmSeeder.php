<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=4; $i <= 30; $i++) {
          DB::table('films')->insert([
            'name' => 'Name-'.$i,
            'name_ru' => 'Название-'.$i,
            'description' => 'Описание-'.$i,
            'genre_id' => rand(1, 4),
            'year' => rand(1991, 2023),
            'director_id' => rand(1, 5)
          ]);
        }
    }
}
