<?php

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
Route::get('/home', function () {
    return view('home');
});
Route::get('/register', [App\HTTP\Controllers\RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [App\HTTP\Controllers\RegisterController::class, 'store'])->middleware('guest');
Route::get('/login', [App\HTTP\Controllers\LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [App\HTTP\Controllers\LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [App\HTTP\Controllers\LoginController::class, 'logout'])->middleware('auth')->name('logout');
