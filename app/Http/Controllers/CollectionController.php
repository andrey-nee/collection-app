<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
  public function index()
  {
    $collections = Collection::orderBy('name')->paginate(10);
    return view('sections.welcome.welcome', compact('collections'));
  }

  public function show($id)
  {
    return view('sections.welcome.welcome')->with('id', $id);
  }
}
