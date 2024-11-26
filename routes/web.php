<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')
->as('admin.')
->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });

    Route::controller(CategoryController::class)
    ->as('category.')
    ->prefix('category')
    ->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
    });

    Route::controller(PostController::class)
    ->as('posts.')
    ->prefix('posts')
    ->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('/create', [PostController::class, 'create'])->name('create');
        Route::post('/store', [PostController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [PostController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [PostController::class, 'delete'])->name('delete');
    });
});

