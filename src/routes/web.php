<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ShopCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::
//        middleware(['auth:sanctum', 'verified'])->
        prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin-dashboard');


    Route::prefix('shop-categories')->group(function () {
        Route::get('/', [ShopCategoryController::class, 'index'])->name('admin-shop-category');
        Route::get('/add', [ShopCategoryController::class, 'add'])->name('admin-shop-category-add');
        Route::post('/create', [ShopCategoryController::class, 'create'])->name('admin-shop-category-create');
        Route::get('/edit/{id}', [ShopCategoryController::class, 'edit'])->name('admin-shop-category-edit');
        Route::put('/update/{id}', [ShopCategoryController::class, 'update'])->name('admin-shop-category-update');
        Route::delete('/delete/{id}', [ShopCategoryController::class, 'delete'])->name('admin-shop-category-delete');
    });
    Route::prefix('shops')->group(function () {
//        Route::get('/', [AdminBooks::class, 'index'])->name('admin-books');
//        Route::get('/add', [AdminBooks::class, 'add'])->name('admin-books-add');
//        Route::post('/create', [AdminBooks::class, 'create'])->name('admin-books-create');
//        Route::get('/edit/{id}', [AdminBooks::class, 'edit'])->name('admin-books-edit');
//        Route::put('/update/{id}', [AdminBooks::class, 'update'])->name('admin-books-update');
//        Route::delete('/delete/{id}', [AdminCategories::class, 'delete'])->name('admin-category-delete');
    });
    ;
    Route::prefix('articles')->group(function () {
//        Route::get('/', [AdminBooks::class, 'index'])->name('admin-articles');
//        Route::get('/add', [AdminBooks::class, 'add'])->name('admin-articles-add');
//        Route::post('/create', [AdminBooks::class, 'create'])->name('admin-articles-create');
//        Route::get('/edit/{id}', [AdminBooks::class, 'edit'])->name('admin-articles-edit');
//        Route::put('/update/{id}', [AdminBooks::class, 'update'])->name('admin-articles-update');
//        Route::delete('/delete/{id}', [AdminCategories::class, 'delete'])->name('admin-articles-delete');
    });
    Route::prefix('radio-points')->group(function () {
//        Route::get('/', [AdminBooks::class, 'index'])->name('admin-radio-points');
//        Route::get('/add', [AdminBooks::class, 'add'])->name('admin-radio-points-add');
//        Route::post('/create', [AdminBooks::class, 'create'])->name('admin-radio-points-create');
//        Route::get('/edit/{id}', [AdminBooks::class, 'edit'])->name('admin-radio-points-edit');
//        Route::put('/update/{id}', [AdminBooks::class, 'update'])->name('admin-radio-points-update');
//        Route::delete('/delete/{id}', [AdminCategories::class, 'delete'])->name('admin-radio-points-delete');
    });
    Route::prefix('news')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('admin-news');
        Route::get('/add', [NewsController::class, 'add'])->name('admin-news-add');
        Route::post('/create', [NewsController::class, 'create'])->name('admin-news-create');
        Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('admin-news-edit');
        Route::put('/update/{id}', [NewsController::class, 'update'])->name('admin-news-update');
        Route::delete('/delete/{id}', [NewsController::class, 'delete'])->name('admin-news-delete');
    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{query}', function() {
    return view('welcome');
})->where('query', '^((?!api|admin).)*$');
