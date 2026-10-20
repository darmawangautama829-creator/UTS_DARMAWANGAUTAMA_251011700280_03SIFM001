<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

// 1. Home / Beranda
Route::view('/', 'index')->name('home');

// 2. Jelajahi Lagu (List All Songs)
Route::get('/jelajahi', [SongController::class, 'index'])->name('songs.index');

// 3. Detail Lagu
Route::get('/lagu/{song}', [SongController::class, 'show'])->name('songs.show');

// 4. Profile
Route::view('/profile', 'profile')->name('profile');

// 5. About
Route::view('/about', 'about')->name('about');