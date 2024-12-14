<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

Route::get('/',[CategoriesController::class, 'index']);
Route::get('/categories',[CategoriesController::class, 'categories']);
Route::post('/categoriesStore',[CategoriesController::class, 'categoriesStore']);
Route::post('/update/{id}',[CategoriesController::class, 'update']);
Route::get('/categories-entry',[CategoriesController::class, 'categories_entry']);
Route::get('/categories-edit/{id}',[CategoriesController::class, 'categories_edit']);

Route::get('/delete/{id}',[CategoriesController::class, 'delete']);
Route::get('/cetak',[CategoriesController::class, 'cetak']);



