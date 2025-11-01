<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['greeting'=>'Welcome to Front Hardware']);
});

Route::get('/about', function () {
    return view('about');
});

