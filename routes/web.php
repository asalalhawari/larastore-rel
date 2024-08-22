<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/products', [ProductController::class, 'index'])->name('index');
Route::get('/products/create', [ProductController::class, 'create'])->name('create');
Route::post('/products', [ProductController::class, 'store'])->name('store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('destroy');




 Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
 Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
 Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
 Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
 Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
 Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

// Route::resource('categories', CategoryController::class);


