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

// Route::get('/dc_comics', [DcComicController::class, 'index'])->name('dc_comics.index');
// Route::get('/dc_comics/{dc_comic}', [DcComicController::class, 'show'])->name('dc_comics.show');

Route::resource('dc-comics', DcComicController::class);
