<?php

use App\Http\Controllers\ProfileController;
<<<<<<< Updated upstream
=======
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
>>>>>>> Stashed changes
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard tanpa login
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

<<<<<<< Updated upstream
=======
Route::get('/doctors', function () {
    return view('doctors');
})->name('doctors');

Route::resource('services', ServiceController::class);
Route::resource('user', UserController::class);

// Route khusus untuk user yang sudah login
>>>>>>> Stashed changes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
