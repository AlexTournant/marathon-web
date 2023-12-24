<?php

use App\Http\Controllers\AvisController;
use App\Http\Controllers\ContactController;
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


Route::get('/contact', [ContactController::class, 'afficherFormulaire']);

Route::get('/formulaire', [ContactController::class, 'show']);
Route::post('/contact', [ContactController::class, 'traiterFormulaire']);


Route::get('/test-vite', function () {
    return view('test-vite');
})->name("test-vite");

Route::get('/index', [HistoireController::class, 'index'])->name('histoires.index');

Route::get('/genre/{id}',[HistoireController::class, 'genre'])->name('genre');

Route::resource('users',\App\Http\Controllers\UserController::class);

Route::get('/chapitre/{id}',[\App\Http\Controllers\ChapitreController::class,'show']);

Route::resource('histoires', HistoireController::class);
Route::get("/activate/{id}", [HistoireController::class, 'activate']);
Route::post("/activate/{id}", [HistoireController::class, 'activate']);


Route::get("/encours/{id}", [HistoireController::class, 'vue'])->name('encours');

Route::get("/newChapitre/{id}", [HistoireController::class, 'ajoutChapitre']);
Route::post("/newChapitre/{id}", [HistoireController::class, 'ajoutChapitre']);

Route::get("/lienChapitre/{id}", [HistoireController::class, 'link']);
Route::post("/lienChapitre/{id}", [HistoireController::class, 'link']);


Route::get('/apropos', [EquipeController::class, 'index'])->name('equipes.index');
Route::resource('avis', AvisController::class)->only(['store']);

