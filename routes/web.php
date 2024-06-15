<?php

use App\Http\Controllers\DcComicController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/dc-comics', [DcComicController::class, 'index'])->name('dc-comics.index');
// Route::get('/dc-comics/{dc-comic}', [DcComicController::class, 'show'])->name('dc-comics.show');

Route::resource('dc-comics', DcComicController::class);
