<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'home')->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products.all');
Route::get('/products/actives', [ProductController::class, 'allActives'])->name('products.actives');
Route::get('/products/upto20', [ProductController::class, 'upTo20'])->name('products.upto20');
Route::get('/products/likeaceite', [ProductController::class, 'likeAceite'])->name('products.likeaceite');
Route::get('/products/cheepandactive', [ProductController::class, 'CheepAndActive'])->name('products.cheepandactive');
Route::get('/products/voidproducts', [ProductController::class, 'voidProducts'])->name('products.voidproducts');
Route::get('/products/between10and20', [ProductController::class, 'between10And20'])->name('products.between10and20');
Route::get('/products/olderthan', [ProductController::class, 'olderThan'])->name('products.olderthan');
Route::get('/products/updatedproducts', [ProductController::class, 'updatedProducts'])->name('products.updatedproducts');
//Route::get('/products/cheeperfirst', [ProductController::class, 'cheeperFirst'])->name('products.cheeperfirst');
