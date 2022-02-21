<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::resource('products',ProductController::class);

Route::resource('categorys',CategoryController::class);

Route::resource('subCategorys',SubCategoryController::class);

Route::get('view-product/{id}/{slug}', [HomeController::class, 'viewProduct']); 