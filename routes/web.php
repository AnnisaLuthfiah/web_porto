<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\PublicPortfolioController;

Route::get('/', [PublicPortfolioController::class, 'index'])->name('portfolio.public');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('portfolios', AdminPortfolioController::class);
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/home', function () {
    return view('public.home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');
