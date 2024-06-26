<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\FilmController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CollectionController::class, 'index'])->name('welcome.index');
Route::get('/films', [FilmController::class,'index'])->name('films.index');

Route::post('/films/info', [FilmController::class, 'info'])->name('filmsInfoContent');
Route::get('/films/fetch_data', [FilmController::class,'fetch_data'])->name('films.fetch_data');

Route::post('/films/add_new', [FilmController::class, 'addNew'])->name('films.add_new');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
