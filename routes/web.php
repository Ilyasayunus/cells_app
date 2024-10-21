<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Carousels\CarouselController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//HALAMAN UTAMA (LANDING PAGE)

Route::get('/', function(){
    return view('welcome');
});


















//HALAMAN ADMIN //

// Halaman login
Route::get('/admin', function () {
    return view('admin.login');
})->name('login');

// Rute halaman login (POST)
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Rute halaman dashboard admin, dilindungi oleh middleware 'auth'
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/carousels', function () {
        return view('admin.carousel.carousels');
    })->name('admin.carousels');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/news', function () {
        return view('admin.news.news');
    })->name('admin.news');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return view('admin.profile.profile');
    })->name('admin.profile');
});

// Rute untuk logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login')->with('success', 'Anda telah logout.');
})->name('logout');




//HALAMAN CAROUSEL
Route::get('/carousels/tambah',[CarouselController::class,'tambah'])->name('carousels.tambah');