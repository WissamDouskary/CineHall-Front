<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'index']);

Route::get('/register', function(){
    return view('register');
})->name('register')->middleware('guest');

Route::get('/login', function(){
    return view('login');
})->name('login')->middleware('guest');
