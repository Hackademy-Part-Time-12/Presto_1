<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, 'welcome'])->name('welcome');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

Route::get('/product/show/{product}', [ProductController::class, 'show'])->name('product.show');

Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');

Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');

Route::get('/category/show/{category}', [FrontController::class, 'show'])->name('category.show');

