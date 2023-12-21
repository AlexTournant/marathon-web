<?php

use App\Http\Controllers\EquipeController;
use App\Http\Controllers\HistoireController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',  [HistoireController::class, 'accueil'])->name('accueil');


Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/test-vite', function () {
    return view('test-vite');
})->name("test-vite");

Route::get('/index', [HistoireController::class, 'index'])->name('histoires.index');

Route::get('/genre/{id}',[HistoireController::class, 'genre'])->name('genre');

Route::resource('users',\App\Http\Controllers\UserController::class);

Route::get('/chapitre/{id}',[\App\Http\Controllers\ChapitreController::class,'show']);

Route::resource('histoires', HistoireController::class);

Route::get('/equipes/index', [EquipeController::class, 'index'])->name('equipes.index');
