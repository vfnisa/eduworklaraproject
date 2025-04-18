<?php

use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route ::get('/' , [HomeController::class , 'index'] );
Route ::get('/cart' , [HomeController::class , 'cart'] );

Route ::get('/products' , [ProductController::class , 'showProduct'] );


Route ::get('/checkout' , function () {
    echo "Ini Halaman Checkout";
});