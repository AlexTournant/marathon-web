<?php

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

Route::get('/',  [HistoireController::class, 'welcome'])->name('welcome');


Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/test-vite', function () {
    return view('test-vite');
})->name("test-vite");

Route::get('/histoire/{id}', [HistoireController::class, 'show'])->name('histoire.show');

Route::get('/index', [HistoireController::class, 'index'])->name('histoires.index');

Route::get('/genre/{id}',[HistoireController::class, 'genre'])->name('genre');

