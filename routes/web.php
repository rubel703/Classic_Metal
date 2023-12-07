<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassicMetalController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClassicMetalController::class, 'home'])->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'AuthLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

// Route::get('users', function () {
//     return view('users.list');
// });


Route::group(['middleware' => 'admin'], function () {
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);
});
