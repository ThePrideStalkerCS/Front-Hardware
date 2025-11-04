<?php

use Illuminate\Support\Facades\Route;
use App\Models\Computer;


Route::get('/', function () {
    


    return view('home');
});

Route::get('/computers', function () {
    return view('computers', [ 'computers' => Computer::all() ]);
});

Route::get('/computers/{id}', function ($id) {

    $computer = Computer::find($id);

    return view('computer', ['computer' => $computer]);
});
