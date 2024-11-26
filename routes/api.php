<?php

use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('admin')
->as('api.admin.')
->group(function () {
    Route::controller(CategoryController::class)
    ->as('category.')
    ->prefix('category')
    ->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
    });

    // Route::controller(PostController::class)
    // ->as('posts.')
    // ->prefix('posts')
    // ->group(function () {
    //     Route::get('/', [PostController::class, 'index'])->name('index');
    //     Route::get('/create', [PostController::class, 'create'])->name('create');
    //     Route::post('/store', [PostController::class, 'store'])->name('store');
    //     Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');
    //     Route::put('/update/{id}', [PostController::class, 'update'])->name('update');
    //     Route::delete('/delete/{id}', [PostController::class, 'delete'])->name('delete');
    // });
});