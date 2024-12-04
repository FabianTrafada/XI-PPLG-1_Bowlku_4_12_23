<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\URLController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index'])->name("products.index");

Route::get("/", [URLController::class,"index"])->name("index");

