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
    return view('home');
})->name('home');

Route::get('/characters', function(){
    return view('characters');
})->name('characters');


 Route::get('/comics', function(){
    $dbcomics = config('db.comics');
     return view('comics', compact('dbcomics'));
 })->name('comics');


 Route::get('/movies', function(){
    return view('movies');
})->name('movies');

Route::get('/tv', function(){
    return view('tv');
})->name('tv');

Route::get('/games', function(){
    return view('games');
})->name('games');

Route::get('/collectibles', function(){
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function(){
    return view('videos');
})->name('videos');

Route::get('/fans', function(){
    return view('fans');
})->name('fans');

Route::get('/news', function(){
    return view('news');
})->name('news');

Route::get('/shop', function(){
    return view('shop');
})->name('shop');

Route::get('/details/ {id}', function($id  = null){
    $dbcomics = config('db.comics');
    $get_comic = array_filter($dbcomics, fn ($item) => $item['id'] == $id);
    $comic = $get_comic[array_key_first($get_comic)];
    // dd($comic);
    return view('details', compact('comic'));
})->name('details');
