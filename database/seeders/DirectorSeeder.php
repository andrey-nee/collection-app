<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectorSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    for ($i = 1; $i <= 10; $i++) {
      DB::table('directors')->insert([
        'name' => 'Name-' . $i,
        'name_ru' => 'Имя-' . $i,
        'description' => 'Описание-' . $i
      ]);
    }
  }
}
