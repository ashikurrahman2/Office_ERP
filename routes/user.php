<?php

use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\PropertySellController;
use App\Http\Controllers\User\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    // Profile route
    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    // Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::post('profile/{profile}', [ProfileController::class, 'update'])->name('profile.update');
    Route::resource('profile', ProfileController::class)->except(['show','create','store','destroy']);
    // Route::get('/favorites', [PropertyController::class, 'favoriteProperties'])->name('favorites');

    Route::resource('properties', PropertySellController::class)->except(['show']);



    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::post('/profile/update-image', [ProfileController::class, 'updateProfileImage'])->name('profile.update.image');
    // Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');


});
