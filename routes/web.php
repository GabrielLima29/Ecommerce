<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;


Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/register', [UserController::class, 'showFormRegister']);
Route::post('/register', [UserController::class, 'register']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'profile']);
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/main-homem', function () {
    return view('main-homem');
});

Route::get('/main-infantil', function () {
    return view('main-infantil');
});

Route::get('/main-sapatos', function () {
    return view('main-sapatos');
});

Route::get('/main-perfume', function () {
    return view('main-perfume');
});

Route::get('/carrinho', function () {
    return view('carrinho');
});

Route::get('/homem-casacos', function () {
    return view('homem-casacos');
});

Route::get('/casaco1', function () {
    return view('casaco1');
});

Route::get('/perfil', function () {
    return view('perfil');
});