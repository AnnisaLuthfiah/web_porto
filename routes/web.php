<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\PublicPortfolioController;
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\AboutController;

Route::get('/', [PublicPortfolioController::class, 'index'])->name('portfolio.public');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::post('/about/toggle', [AboutController::class, 'toggle'])->name('about.toggle');

Route::get('/home', function () {
    return view('public.home');
})->name('home');

Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/games', function () {
    return view('public.games');
})->name('games');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');


Route::prefix('admin')->name('admin.')->middleware('role:admin')->group(function () {
    Route::resource('portfolios', AdminPortfolioController::class);
});
