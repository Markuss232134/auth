<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.form');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.store');


Route::get('/login', [SessionController::class, 'create'])->middleware('guest')->name('login.form');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest')->name('login.store');

Route::post('/logout', [SessionController::class, 'destroy'])->name('logout');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

