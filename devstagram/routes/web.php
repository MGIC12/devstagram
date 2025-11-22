<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/otra-vista', function () {
    return view('otra-vista');
});