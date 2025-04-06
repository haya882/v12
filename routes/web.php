<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\ProfileController;
 use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DetailsController;



Route::get('/', [WebsiteController::class , 'index'])->name('website.index');
Route::get('/about', [WebsiteController::class , 'about'])->name('website.about ');
Route::get('/cart', [WebsiteController::class , 'cart'])->name('website.cart ');
Route::get('/checkout', [WebsiteController::class , 'checkout'])->name('website.checkout ');
Route::get('/details', [WebsiteController::class , 'details'])->name('website.details ');
Route::get('/products', [WebsiteController::class , 'products'])->name('website.products ');
Route::get('/view', [WebsiteController::class , 'view'])->name('website.view ');
Route::get('/wishlist', [WebsiteController::class , 'wishlist'])->name('website.wishlist ');
Route::get('/contact', [WebsiteController::class , 'contact'])->name('website.contact');
Route::get('/login', [WebsiteController::class , 'login'])->name('website.login ');

Route::get('/details/{id}', [DetailsController::class, 'show'])->name('details');

Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');





