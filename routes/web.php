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
// Route::get('/films', [FilmController::class, 'index'])->name('films');

Route::post('/films/info', [FilmController::class, 'info'])->name('filmsInfoContent');
// Route::get('/{page}', [CollectionController::class, 'loadPage'])->name('load.page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
