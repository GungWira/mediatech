<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/csr', function () {
    return view('csr');
});

Route::get('/custom-dev', function () {
    return view('custom-dev');
});
