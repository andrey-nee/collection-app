<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
  public function index()
  {
    // $films = Film::orderBy('name')->take(10)->get();
    $films = Film::orderByRaw("CAST(REGEXP_SUBSTR(name_ru, '^[A-Za-z]+') AS CHAR), CAST(REGEXP_SUBSTR(name, '\\d+$') AS UNSIGNED)")->paginate(10);

    return view('films', compact('films'));
    // Тут compact('films') это то же самое что и ['films' => $films]
  }
}
