<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;

// // Admin routes
// Route::prefix('admin')->name('admin.')->group(function() {
//     Route::get('/', [AdminController::class, 'index'])->name('index');

//     Route::get('/profile',[AdminController::class,'profile'])->name('profile');
//     Route::put('/profile',[AdminController::class,'profile_save']);
//     Route::get('/login',[AdminController::class,'login'])->name('login');
//     Route::post('/login',[AdminController::class,'store'])->name('login');
//     Route::get('/orders',[AdminController::class,'orders'])->name('orders');
//     Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');


// });

// // Dashboard routes (if needed)
// Route::prefix('dashboard')->name('dashboard.')->group(function() {
//     Route::resource('categories', CategoryController::class);
//     Route::resource('products', ProductController::class);

// });
// // ->middleware('auth')

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');
    Route::get('/signup', [AdminController::class, 'signup'])->name('signup');
    Route::post('/register', [AdminController::class, 'register'])->name('register');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    // Protected Admin Routes
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('index');
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::put('/profile/update', [AdminController::class, 'updateProfile'])->name('profile.update');
        Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
        // Route::get('/payment', [AdminController::class, 'payment'])->name('payment');

        Route::resource('categories', CategoryController::class);

        Route::resource('products', ProductController::class);
        Route::get('products/{product}/gallery', [ProductController::class, 'gallery'])->name('products.gallery');
        Route::post('products/{product}/gallery', [ProductController::class, 'uploadGallery'])->name('products.gallery.upload');
        Route::delete('products/gallery/{image}', [ProductController::class, 'deleteGalleryImage'])->name('products.gallery.delete');

        Route::resource('users',UserController::class);
    });
});
