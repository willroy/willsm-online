<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

// Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index')->middleware('auth');
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::get('/music', [App\Http\Controllers\MainController::class, 'music'])->name('music');
Route::get('/art', [App\Http\Controllers\MainController::class, 'art'])->name('art');
Route::get('/projects', [App\Http\Controllers\MainController::class, 'projects'])->name('projects');
Route::get('/about', [App\Http\Controllers\MainController::class, 'about'])->name('about');
