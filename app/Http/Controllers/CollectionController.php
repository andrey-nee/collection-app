<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function films() {
        return view('films');
    }

    // public function loadPage($page) {
    //     $content = view($page)->render();
    //     return responce()->json(['content' => $content]);
    // }

}
