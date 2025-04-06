<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;

// Admin routes
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::get('/profile',[AdminController::class,'profile'])->name('profile');
    Route::put('/profile',[AdminController::class,'profile_save']);
    Route::get('/login',[AdminController::class,'login'])->name('login');
    Route::post('/login',[AdminController::class,'store'])->name('login');
    Route::get('/orders',[AdminController::class,'orders'])->name('orders');

});

// Dashboard routes (if needed)
Route::prefix('dashboard')->name('dashboard.')->group(function() {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);

});
// ->middleware('auth')

