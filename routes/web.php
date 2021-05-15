<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');;

Route::get('/index', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');;

Route::get('/menu', function () {
    return view('menu');
})->name('menu');;

Route::post('/submit', 'App\Http\Controllers\BookingController@submit')->name('book-form');
