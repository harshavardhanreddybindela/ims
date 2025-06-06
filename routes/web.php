<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResource('products', ProductController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('suppliers', SupplierController::class);
Route::get('/products-test', function () {
    return Product::all();
});
Route::get('/categories-test', function () {
    return Category::all();
});
Route::get('/suppliers-test', function () {
    return Supplier::all();
});