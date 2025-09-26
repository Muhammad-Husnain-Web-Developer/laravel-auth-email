<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/register', [UserController::class, 'showForm'])->name('register.form');
Route::post('/register', [UserController::class, 'register'])->name('register.user');

Route::get('/', function () {
    return view('welcome');
});
