<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
  public function index()
  {
    $films = Film::orderByRaw("CAST(REGEXP_SUBSTR(name_ru, '^[A-Za-z]+') AS CHAR), CAST(REGEXP_SUBSTR(name, '\\d+$') AS UNSIGNED)")->paginate(10);
    return view('sections.films.films', compact('films'));
  }

  public function fetch_data(Request $request)
  {
    $films = Film::paginate(10);
    if ($request->ajax()) {
      return view('sections.films.films-data', compact('films'))->render();
    }
  }

  public function info(Request $request)
  {
    $id = $request->id;
    $data = Film::findOrFail($id);
    return view('ajax.films-info-content', compact('data'));
  }
}
