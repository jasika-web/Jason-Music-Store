<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/instrument', function () {
    return view('pages.plp');
})->name('plp');

Route::get('/instrument/{id}', function () {
    return view('pages.pdp');
})->name('pdp');

// ganti book ke instrument di plp dan pdp