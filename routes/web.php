<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    


    return view('home');
});

Route::get('/products', function () {
    $products=Product::with('category')->paginate(3);
    return view('products', [ 'products' => $products  ]); 
});

Route::get('/product/{id}', function ($id) {

    $product = Product::find($id);

    return view('product', ['product' => $product]);
});
