<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{
  public function index()
  {
    $films = Film::orderByRaw("CAST(REGEXP_SUBSTR(name_ru, '^[A-Za-z]+') AS CHAR), CAST(REGEXP_SUBSTR(name_ru, '\\d+$') AS UNSIGNED)")->get();
    return view('sections.films.films', compact('films'));
  }

  public function info(Request $request)
  {
    $id = $request->id;

    $data = Film::with('images')->findOrFail($id);

    // Получаем картинку для фильма
    $image = $data->images->isEmpty()
      ? 'no_image.jpg'
      : $data->images->first()->image;

    // Получаем жанр фильма
    $genre = $data->genre->name_ru;

    // Получаем режиссера фильма
    $director = $data->director->name;

    return view('ajax.films-info-content', compact('data', 'image', 'genre', 'director'));
  }

  public function genre()
  {
    $films = Film::with('genre')->get();
    return view('sections.films.films', compact('genre'));
  }

  public function director()
  {
    $film = Film::with('director')->get();
    return view('sections.films.films', compact('director'));
  }

  public function count()
  {
    $count = Film::count();
    return view('sections.films.films', compact('count'));
  }

  public function addNew(Request $request) {
    $validatedData = $request->validate([
      'name_ru' => 'required|string|max:100',
      'description' => 'required|string|max:255',
      'genre_id' => 'required|string|max:100',
      'year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
      'director_id' => 'required|string|max:100',
    ]);

    Film::create($validatedData);

    return redirect()->back()->with('success', 'Данные успешно добавлены в базу данных.');

  }
}
