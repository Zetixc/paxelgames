<?php

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
});

Route::get('/beranda', function () {
    return view('home');
});

Route::get('/free-fire', function () {
    return view('ff');
});

Route::get('/pubg-mobile', function () {
    return view('pubgm');
});

Route::get('/domino', function () {
    return view('domino');
});

Route::get('/mlbb', function () {
    return view('ml');
});

Route::get('/valorant', function () {
    return view('valo');
});

Route::get('/genshin-impact', function () {
    return view('gs');
});