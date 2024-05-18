<?php

use App\Http\Controllers\api\CategoriesController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\PaymodeController;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::post('/products', [ProductController::class, 'store'])->name('products.store'); 
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/{product}', [ProductController::class , 'show'])->name('products.show');

Route::get('/categories', [CategoriesController::class, 'index'])->name('categories');
Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store'); 
Route::delete('/categories/{categorie}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
Route::put('/categories/{categorie}', [CategoriesController::class, 'update'])->name('categories.update');
Route::get('/categories/{categorie}', [CategoriesController::class , 'show'])->name('categories.show');

Route::get('/paymodes', [PaymodeController::class, 'index'])->name('paymodes');
Route::post('/paymodes', [PaymodeController::class, 'store'])->name('paymodes.store'); 
Route::delete('/paymodes/{paymode}', [PaymodeController::class, 'destroy'])->name('paymodes.destroy');
Route::put('/paymodes/{paymode}', [PaymodeController::class, 'update'])->name('paymodes.update');
Route::get('/paymodes/{paymode}', [PaymodeController::class , 'show'])->name('paymodes.show');