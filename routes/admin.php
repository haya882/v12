<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
Route::prefix('admin')->name('admin.')->group(function() {
 Route::get('/',[AdminController::class,'index'])->name('index');


 Route::resource('categories',CategoryController::class);
 Route::resource('products',ProductController::class);


});


