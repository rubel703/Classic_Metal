<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClassicMetalController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

//client side route
    Route::get('/', [ClassicMetalController::class, 'home'])->name('home');

//authentication route
    Route::get('admin/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'AuthLogin']);
    Route::get('/logout', [AuthController::class, 'logout']);

//dashboard or admin panel route
    Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::resource('category', CategoryController::class);
    Route::resource('subCategory', SubCategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('color', ColorController::class);
    Route::resource('size', SizeController::class);
    Route::resource('unit', UnitController::class);
    Route::resource('product', ProductController::class);
});
