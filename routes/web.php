<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('product/create',[ProductController::class, 'create'])->name('product/create');
Route::post('product/create',[ProductController::class, 'createSubmit'])->name('product/create');
Route::get('/product/list',[ProductController::class, 'list'])->name('product/list');
Route::get('/product/edit/{id}',[ProductController::class,'edit']);
Route::post('/product/edit',[ProductController::class,'editSubmit'])->name('product/edit');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product/delete');