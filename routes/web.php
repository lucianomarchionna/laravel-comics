<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $element = config('comics');
    $data = [
        'comics' => $element
    ];
    return view('home', $data);
})->name('page-home');

Route::get('/characters', function () {
    return view('characters');
})->name('page-characters');

Route::get('/comics', function () {
    return view('comics');
})->name('page-comics');

Route::get('/movies', function () {
    return view('movies');
})->name('page-movies');

Route::get('/tv', function () {
    return view('tv');
})->name('page-tv');

Route::get('/games', function () {
    return view('games');
})->name('page-games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('page-collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('page-videos');

Route::get('/fans', function () {
    return view('fans');
})->name('page-fans');

Route::get('/news', function () {
    return view('news');
})->name('page-news');

Route::get('/shop', function () {
    return view('shop');
})->name('page-shop');