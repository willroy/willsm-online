<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\MainController::class, 'main'])->name('main');
Route::get('/blog', [App\Http\Controllers\MainController::class, 'blog'])->name('blog');
Route::get('/music', [App\Http\Controllers\MainController::class, 'music'])->name('music');
Route::get('/art', [App\Http\Controllers\MainController::class, 'art'])->name('art');
Route::get('/software', [App\Http\Controllers\MainController::class, 'software'])->name('software');
Route::get('/about', [App\Http\Controllers\MainController::class, 'about'])->name('about');

Route::get('/media/index', [App\Http\Controllers\MediaController::class, 'index'])->name('media.index')->middleware('auth');
Route::get('/media/view/{id}', [App\Http\Controllers\MediaController::class, 'view'])->name('media.view')->middleware('auth');
Route::get('/media/edit/{id?}', [App\Http\Controllers\MediaController::class, 'edit'])->name('media.edit')->middleware('auth');
Route::post('/media/save/{id?}', [App\Http\Controllers\MediaController::class, 'save'])->name('media.save')->middleware('auth');
Route::get('/media/delete/{id}', [App\Http\Controllers\MediaController::class, 'delete'])->name('media.delete')->middleware('auth');
Route::get('/media/upload', [App\Http\Controllers\MediaController::class, 'upload'])->name('media.upload')->middleware('auth');
Route::post('/media/uploadsave', [App\Http\Controllers\MediaController::class, 'uploadsave'])->name('media.uploadsave')->middleware('auth');

Route::get('/blog/view/{id}', [App\Http\Controllers\BlogController::class, 'view'])->name('blog.view')->middleware('auth');
Route::get('/blog/edit/{id?}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::post('/blog/save/{id?}', [App\Http\Controllers\BlogController::class, 'save'])->name('blog.save')->middleware('auth');
Route::get('/blog/delete/{id}', [App\Http\Controllers\BlogController::class, 'delete'])->name('blog.delete')->middleware('auth');