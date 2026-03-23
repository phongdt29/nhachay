<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/ai-music', function () {
    return view('home');
})->name('ai-music');

Route::get('/genres', function () {
    return view('home');
})->name('genres');

Route::get('/charts', function () {
    return view('home');
})->name('charts');
