<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/bibliotecario', function () {
    return view('page.bibliotecario');
});

Route::get('/usuario', function () {
    return view('page.usuario');
});
