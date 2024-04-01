<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;

class CollectionController extends Controller
{
  public function welcome()
  {
    return view('welcome');
  }

  // public function loadPage($page) {
  //     $content = view($page)->render();
  //     return responce()->json(['content' => $content]);
  // }

}
