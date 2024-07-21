<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
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

Route::prefix('client')
->as('client.')
->group(function () {

    Route::get('/', function () {
        return view('client.index');
    });

    Route::get('/',                 [PostController::class, 'index' ])->name('index');
    Route::get('create',            [PostController::class, 'create' ])->name('create');
    Route::post('store',            [PostController::class, 'store' ])->name('store');
    Route::get('blog/{id}',         [PostController::class, 'show' ])->name('blog.show');
    Route::get('{id}/edit',         [PostController::class, 'edit' ])->name('edit');
    Route::put('{id}/update',       [PostController::class, 'update' ])->name('update');
    Route::delete('id/destroy',     [PostController::class, 'destroy' ])->name('destroy');
});


Route::get('client/about', function () {
    return view('client/about');
});
Route::get('/contact', function () {
    return view('client/contact');
});
Route::get('/login', function () {
    return view('client/login');
});

Route::get('/register', function () {
    return view('client/register');
});
Route::get('/blog2', function () {
    return view('client/blog2');
});
Route::get('/blog-details', function () {
    return view('client/blog-details');
});
Route::get('/author', function () {
    return view('client/author');
});
//---------------------------------------------
Route::prefix('admin')
    ->as('admin.')
    ->group(function () {

        Route::get('/', function () {
            return view('admin.index');
        });

        Route::prefix('categorys')
        ->as('categorys.')
        ->group(function(){
            Route::get('/',                 [AdminCategoryController::class, 'index' ])->name('index');
            Route::get('create',            [AdminCategoryController::class, 'create' ])->name('create');
            Route::post('store',            [AdminCategoryController::class, 'store' ])->name('store');
            Route::get('show/{id}',         [AdminCategoryController::class, 'show' ])->name('show');
            Route::get('{id}/edit',         [AdminCategoryController::class, 'edit' ])->name('edit');
            Route::put('{id}/update',       [AdminCategoryController::class, 'update' ])->name('update');
            Route::delete('id/destroy',     [AdminCategoryController::class, 'destroy' ])->name('destroy');
        });
    });
