<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\PostController;
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
        Route::delete('/{id}', [CategoryController::class, 'destroy'])->name('delete');
    });


    Route::controller(PostController::class)
    ->as('post.')
    ->prefix('post')
    ->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::delete('/{id}', [PostController::class, 'destroy'])->name('delete');
    });
});