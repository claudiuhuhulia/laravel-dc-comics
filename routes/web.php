<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');

// rotta per i comics
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

// lista delle comics
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

// form di creazione comic
Route::post('/comics/create', [ComicController::class, 'create'])->name('comics.create');

// mostra il singolo comic
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

// salva le modifiche sul db
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

// elimina il comic dal db
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');

// mostra il form di modifica 
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');
