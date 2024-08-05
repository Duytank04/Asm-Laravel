<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\ClientController;
use App\Models\Category;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\PostController as AdminPostController;


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


//-------------------Đăng kí | Đăng nhập------------------


Route::get('/login',        [AuthenController::class, 'showFormLogin'])->name('login');
Route::post('/login',       [AuthenController::class, 'handleLogin']);

Route::get('/register',     [AuthenController::class, 'showFormRegister'])->name('register');
Route::post('/register',    [AuthenController::class, 'handleRegister']);

Route::get('/admin',        [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/',       [ClientController::class, 'index'])->name('client')->middleware('auth');

Route::post('/logout',      [AuthenController::class, 'logout'])->name('logout');



//-------------------Client

Route::get('/',                                  [PostController::class, 'index'])->name('index')->middleware(['auth']);
Route::get('/about', function () {
    $categories = Category::all();
    return view('client/about', ['categories' => $categories]);
});
Route::get('category/{category_id}',             [PostController::class, 'showall'])->name('category.showall');
Route::get('post',                               [PostController::class, 'post'])->name('post.index');
Route::get('post/{id}',                          [PostController::class, 'show'])->name('post.show');

//---------------------Admin

Route::prefix('admin')
    ->as('admin.')
    ->middleware('auth')
    ->group(function () {

        Route::get('/', function () {
            return view('admin.index');
        })->name('admin'); 
        Route::prefix('categories')
            ->as('categories.')
            ->group(function () {
                Route::get('/',                     [AdminCategoryController::class, 'index'])->name('index')->middleware('auth');
                Route::get('create',                [AdminCategoryController::class, 'create'])->name('create');
                Route::post('store',                [AdminCategoryController::class, 'store'])->name('store');
                Route::get('show/{id}',             [AdminCategoryController::class, 'show'])->name('show');
                Route::get('{id}/edit',             [AdminCategoryController::class, 'edit'])->name('edit');
                Route::put('{id}/update',           [AdminCategoryController::class, 'update'])->name('update');
                Route::get('{id}/destroy',          [AdminCategoryController::class, 'destroy'])->name('destroy');
            });

        Route::prefix('posts')
            ->as('posts.')
            ->group(function () {
                Route::get('/',                     [AdminPostController::class, 'index'])->name('index')->middleware('auth');
                Route::get('create',                [AdminPostController::class, 'create'])->name('create');
                Route::post('store',                [AdminPostController::class, 'store'])->name('store');
                Route::get('show/{id}',             [AdminPostController::class, 'show'])->name('show');
                Route::get('{id}/edit',             [AdminPostController::class, 'edit'])->name('edit');
                Route::put('{id}/update',           [AdminPostController::class, 'update'])->name('update');
                Route::get('{id}/destroy',          [AdminPostController::class, 'destroy'])->name('destroy');
            });
    });
