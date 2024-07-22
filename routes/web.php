<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Client\PostController;

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

Route::get('/',                                  [PostController::class, 'index'])->name('index');

Route::get('category/{category_id}',             [CategoryController::class, 'showall'])->name('category.showall');

Route::get('post',                               [PostController::class, 'post'])->name('post.index');
Route::get('post/{id}',                          [PostController::class, 'show'])->name('post.show');


//---------------------------------------------
Route::prefix('admin')
    ->as('admin.')
    ->group(function () {

        Route::get('/', function () {
            return view('admin.index');
        });

        Route::prefix('categorys')
            ->as('categorys.')
            ->group(function () {
                Route::get('/',                 [AdminCategoryController::class, 'index'])->name('index');
                Route::get('create',            [AdminCategoryController::class, 'create'])->name('create');
                Route::post('store',            [AdminCategoryController::class, 'store'])->name('store');
                Route::get('show/{id}',         [AdminCategoryController::class, 'show'])->name('show');
                Route::get('{id}/edit',         [AdminCategoryController::class, 'edit'])->name('edit');
                Route::put('{id}/update',       [AdminCategoryController::class, 'update'])->name('update');
                Route::delete('id/destroy',     [AdminCategoryController::class, 'destroy'])->name('destroy');
            });
    });
