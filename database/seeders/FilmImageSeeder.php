<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      for($i = 1; $i <= 3; $i++)
        DB::table('film_images')->insert([
          'image' => 'film_image_'.$i,
          'film_id' => $i
        ]);
    }
}
