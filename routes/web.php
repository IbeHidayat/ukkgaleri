<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

// Register - Create User
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);


// CRUD SESSION

Route::get('/dashboard/home', function () {
    return view('Dashboard.Home');
})->middleware('auth');

Route::resource('/dashboard/photos', PhotoController::class)->middleware('auth');
