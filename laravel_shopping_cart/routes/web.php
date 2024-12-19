<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;
use Stripe\Invoice;

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
Route::get('/checkout', [BookController::class, 'checkout'])->name('shopping.checkout');

//Route::get('/placeorder', 'App\Http\Controllers\StripeController@placeorder')->name('placeorder');
Route::post('/session', 'App\Http\Controllers\StripeController@session')->name('session');
Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');

Route::get('/invoice', [InvoiceController::class, 'InvoiceGenerate']);