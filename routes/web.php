<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home')->middleware('auth');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');


//Routes for categories
Route::get('/admin/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index')->middleware('auth');
Route::get('/admin/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create')->middleware('auth');
Route::post('/admin/categories/create', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store')->middleware('auth');
Route::get('/admin/category/{id}', [App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show')->middleware('auth');
Route::get('/admin/category/{id}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit')->middleware('auth');
Route::put('/admin/category/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update')->middleware('auth');
Route::delete('/admin/category/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy')->middleware('auth');

//Routes for branches
Route::get('/admin/branches', [App\Http\Controllers\BranchController::class, 'index'])->name('branches.index')->middleware('auth');
Route::get('/admin/branches/create', [App\Http\Controllers\BranchController::class, 'create'])->name('branches.create')->middleware('auth');
Route::post('/admin/branches/create', [App\Http\Controllers\BranchController::class, 'store'])->name('branches.store')->middleware('auth');
Route::get('/admin/branch/{id}', [App\Http\Controllers\BranchController::class, 'show'])->name('branches.show')->middleware('auth');
Route::get('/admin/branch/{id}/edit', [App\Http\Controllers\BranchController::class, 'edit'])->name('branches.edit')->middleware('auth');
Route::put('/admin/branch/{id}', [App\Http\Controllers\BranchController::class, 'update'])->name('branches.update')->middleware('auth');
Route::delete('/admin/branch/{id}', [App\Http\Controllers\BranchController::class, 'destroy'])->name('branches.destroy')->middleware('auth');

//Routes for products
Route::get('/admin/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index')->middleware('auth');
Route::get('/admin/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('products.create')->middleware('auth');
Route::post('/admin/products/create', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store')->middleware('auth');
Route::get('/admin/product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show')->middleware('auth');
Route::get('/admin/product/{id}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit')->middleware('auth');
Route::put('/admin/product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('products.update')->middleware('auth');
Route::delete('/admin/product/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');

// Routes for suppliers
Route::get('/admin/suppliers', [App\Http\Controllers\SupplierController::class, 'index'])->name('suppliers.index')->middleware('auth');
Route::post('/admin/supplier/create', [App\Http\Controllers\SupplierController::class, 'store'])->name('suppliers.store')->middleware('auth');
Route::put('/admin/supplier/{id}', [App\Http\Controllers\SupplierController::class, 'update'])->name('suppliers.update')->middleware('auth');
Route::delete('/admin/supplier/{id}', [App\Http\Controllers\SupplierController::class, 'destroy'])->name('suppliers.destroy')->middleware('auth');





