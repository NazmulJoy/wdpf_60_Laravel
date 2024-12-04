<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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
Route::get('/home', [BookController::class, 'index']);  
Route::get('/shopping-cart', [BookController::class, 'bookCart'])->name('shopping.cart');
Route::get('/book/{id}', [BookController::class, 'addBooktoCart'])->name('addbook.to.cart');
Route::get('/book/cart/plus/{id}', [BookController::class, 'pluscart'])->name('plus.cart');
Route::post('/book/cart/plus/{id}', [BookController::class, 'pluscart']);
Route::get('/book/cart/minus/{id}', [BookController::class, 'minuscart'])->name('minus.cart');
Route::post('/book/cart/minus/{id}', [BookController::class, 'minuscart']);
Route::patch('/update-shopping-cart', [BookController::class, 'updateCart'])->name('update.sopping.cart');
Route::delete('/delete-cart-product', [BookController::class, 'deleteProduct'])->name('delete.cart.product');