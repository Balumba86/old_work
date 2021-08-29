<?php

use Illuminate\Support\Facades\Route;

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


    Route::prefix('categories')->group(function () {
//        Route::get('/', [AdminCategories::class, 'index'])->name('admin-category');
//        Route::get('/add', [AdminCategories::class, 'add'])->name('admin-category-add');
//        Route::post('/create', [AdminCategories::class, 'create'])->name('admin-category-create');
//        Route::get('/edit/{id}', [AdminCategories::class, 'edit'])->name('admin-category-edit');
//        Route::put('/update/{id}', [AdminCategories::class, 'update'])->name('admin-category-update');
//        Route::delete('/delete/{id}', [AdminCategories::class, 'delete'])->name('admin-category-delete');
    });
    Route::prefix('books')->group(function () {
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
    Route::prefix('litres')->group(function () {
//        Route::get('/', [AdminBooks::class, 'index'])->name('admin-litres');
//        Route::get('/add', [AdminBooks::class, 'add'])->name('admin-litres-add');
//        Route::post('/create', [AdminBooks::class, 'create'])->name('admin-litres-create');
//        Route::get('/edit/{id}', [AdminBooks::class, 'edit'])->name('admin-litres-edit');
//        Route::put('/update/{id}', [AdminBooks::class, 'update'])->name('admin-litres-update');
//        Route::delete('/delete/{id}', [AdminCategories::class, 'delete'])->name('admin-litres-delete');
    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/{query}', function() {
    return view('welcome');
})->where('query', '^((?!api|admin).)*$');
