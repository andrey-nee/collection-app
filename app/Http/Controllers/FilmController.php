<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index() {
      $films = Film::orderBy('name')->take(10)->get();

        return view('films', [
          'films' => $films
        ]);
    }
}
