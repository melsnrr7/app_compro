<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
// Route::resource('contact', \App\Http\Controllers\ContactController::class);

Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');

// admin disini
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [\App\Http\Controllers\LoginController::class, 'index']);
    Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
    Route::resource('user', \App\Http\Controllers\UserController::class);
    Route::resource('profile', \App\Http\Controllers\ProfileController::class);
    Route::resource('pengalamans', \App\Http\Controllers\PengalamansController::class);
    Route::resource('pendidikans', \App\Http\Controllers\PendidikansController::class);
    Route::resource('skills', \App\Http\Controllers\SkillsController::class);
});
