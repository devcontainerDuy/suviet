<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->as('admin.')->group(function () {
    Route::resource('danh-muc', \App\Http\Controllers\CategoriesController::class)->names('categories');
    Route::resource('san-pham', \App\Http\Controllers\ProductsController::class)->names('products');
});
