<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home')->middleware('auth');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');

Route::get('/admin/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index')->middleware('auth');
Route::get('/admin/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create')->middleware('auth');
Route::post('/admin/categories/create', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store')->middleware('auth');
Route::get('/admin/category/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show')->middleware('auth');
Route::get('/admin/category/{id}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit')->middleware('auth');
Route::put('/admin/category/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update')->middleware('auth');
Route::delete('/admin/category/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy')->middleware('auth');



