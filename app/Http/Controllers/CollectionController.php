<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Film;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
  public function index()
  {
    // Получаем список коллекций,
    // отсортированный по имени
    // и разбитый на страницы по 10 строк
    $collections = Collection::orderBy('name')->paginate(10);

    // Получаем количество фильмов
    $count = Film::count();

    return view('sections.welcome.welcome', compact('collections', 'count'));
  }

  public function show($id)
  {
    return view('sections.welcome.welcome')->with('id', $id);
  }
}
