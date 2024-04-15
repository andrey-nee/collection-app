<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    for ($i = 1; $i <= 5; $i++) {
      DB::table('genres')->insert([
        'name' => 'Genre-' . $i,
        'name_ru' => 'Жанр-' . $i,
        'description' => 'Описание-' . $i
      ]);
    }
  }
}
