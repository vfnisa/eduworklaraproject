<?php

use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;




Route ::get('/' , function () {
    echo "Ini Halaman Utama";
});

Route ::get('/products' , [ProductController::class , 'showProduct'] );

Route ::get('/cart' , function () {
    echo "Ini Halaman Keranjang";
});

Route ::get('/checkout' , function () {
    echo "Ini Halaman Checkout";
});