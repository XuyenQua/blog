<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
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

Route::as('client.')
    ->group(function () {
        Route::get('/',[ClientController::class,'index'])->name('index');
        Route::get('/category/{slug}',[ClientController::class,'category'])->name('category');
        Route::get('/post/{slug}',[ClientController::class,'post'])->name('post');


    });



Route::prefix('admin')
    ->as('admin.')
    ->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('index');

        Route::controller(CategoryController::class)
            ->as('category.')
            ->prefix('category')
            ->group(function () {
                Route::get('/', [CategoryController::class, 'index'])->name('index');
                Route::get('/create', [CategoryController::class, 'create'])->name('create');
                Route::post('/store', [CategoryController::class, 'store'])->name('store');
                Route::get('{id}/show', [CategoryController::class, 'show'])->name('show');
                Route::get('{id}/edit/', [CategoryController::class, 'edit'])->name('edit');
                Route::put('{id}/update/', [CategoryController::class, 'update'])->name('update');
            });

        Route::controller(PostController::class)
            ->as('post.')
            ->prefix('post')
            ->group(function () {
                Route::get('/', [PostController::class, 'index'])->name('index');
                Route::get('/create', [PostController::class, 'create'])->name('create');
                Route::post('/store', [PostController::class, 'store'])->name('store');
                Route::get('{id}/show', [PostController::class, 'show'])->name('show');
                Route::get('{id}/edit/', [PostController::class, 'edit'])->name('edit');
                Route::put('{id}/update/', [PostController::class, 'update'])->name('update');
            });
    });
