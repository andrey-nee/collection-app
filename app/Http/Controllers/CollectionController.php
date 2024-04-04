<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
  public function welcome()
  {
    $collections = Collection::orderBy('name')->paginate(10);
    return view('welcome', compact('collections'));
  }

  public function show($id)
  {
    return view('welcome')->with('id', $id);
  }

  // public function loadPage($page) {
  //     $content = view($page)->render();
  //     return responce()->json(['content' => $content]);
  // }

}
