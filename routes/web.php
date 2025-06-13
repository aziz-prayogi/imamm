<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/home', function () {
    return view('landing_page');
})->name('landing_page');

Route::get('/buy', function () {
    return view('selling');
})->name('selling');

Route::get('/contact@us', function () {
    return view('contact');
})->name('contact');
