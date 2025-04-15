<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/register', [RegisterController::class, 'create'])->name('register.form');


Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
