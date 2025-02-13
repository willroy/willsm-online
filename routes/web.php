<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

// Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index')->middleware('auth');
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index');
