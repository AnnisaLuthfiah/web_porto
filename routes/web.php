<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PortfolioController;

// Home (halaman utama langsung ke home)
Route::get('/', function () {
    return view('public.home');
})->name('home');

// Public resource route jika tetap dipakai (boleh dihapus kalau tidak dipakai)
Route::resource('portfolios', PortfolioController::class);    

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::post('/about/toggle', [AboutController::class, 'toggle'])->name('about.toggle');

// Contact
Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// Games
Route::get('/games', function () {
    return view('public.games');
})->name('games');

// Blog
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Admin redirect
Route::get('/admin', function () {
    return redirect()->route('admin.portfolios.index');
})->name('admin.home');

// Admin portfolio resource
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('portfolios', AdminPortfolioController::class);
});


