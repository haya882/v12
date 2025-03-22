<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebSiteController;

Route::get('/', [WebsiteController::class , 'index'])->name('website.index');
Route::get('/about', [WebsiteController::class , 'about'])->name('website.about ');
Route::get('/login', [WebsiteController::class , 'login'])->name('website.login ');
Route::get('/cart', [WebsiteController::class , 'cart'])->name('website.cart ');
Route::get('/checkout', [WebsiteController::class , 'checkout'])->name('website.checkout ');
Route::get('/details', [WebsiteController::class , 'details'])->name('website.details ');
Route::get('/products', [WebsiteController::class , 'products'])->name('website.products ');
Route::get('/view', [WebsiteController::class , 'view'])->name('website.view ');
Route::get('/wishlist', [WebsiteController::class , 'wishlist'])->name('website.wishlist ');

