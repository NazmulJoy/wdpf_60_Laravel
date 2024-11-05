<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('student',StudentController::class);
});


// Route::get('/admindashboard', function () {
//     return view('backend.dashboard');
// })->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::get('/admin', function () {
    return view('signin');
})->name('admin');

require __DIR__.'/auth.php';
