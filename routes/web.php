<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\MainController::class, 'main'])->name('main');
Route::get('/music', [App\Http\Controllers\MainController::class, 'music'])->name('music');
Route::get('/art', [App\Http\Controllers\MainController::class, 'art'])->name('art');
Route::get('/projects', [App\Http\Controllers\MainController::class, 'projects'])->name('projects');
Route::get('/about', [App\Http\Controllers\MainController::class, 'about'])->name('about');

Route::get('/media/index', [App\Http\Controllers\MediaController::class, 'index'])->name('media.index')->middleware('auth');;
Route::get('/media/view/{id}', [App\Http\Controllers\MediaController::class, 'view'])->name('media.view')->middleware('auth');;
Route::get('/media/edit/{id?}', [App\Http\Controllers\MediaController::class, 'edit'])->name('media.edit')->middleware('auth');;
Route::post('/media/save/{id?}', [App\Http\Controllers\MediaController::class, 'save'])->name('media.save')->middleware('auth');;
Route::get('/media/delete/{id}', [App\Http\Controllers\MediaController::class, 'delete'])->name('media.delete')->middleware('auth');;