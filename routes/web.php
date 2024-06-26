<?php

use App\Livewire\Cart;
use App\Livewire\ShopPage;
use Illuminate\Support\Facades\Route;

Route::get('/', ShopPage::class)->name('shop');
Route::get('/cart', Cart::class)->name('cart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
