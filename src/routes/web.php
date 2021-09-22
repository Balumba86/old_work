<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ShopCategoryController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\RestaurantCategoryController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\RentRequestController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\MainBannerController;
use App\Http\Controllers\Admin\ContactController;


Route::get('/', function () {
    return view('site');
});

Route::
        middleware(['auth:sanctum', 'verified'])->
        prefix('admin')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('admin-dashboard');


    Route::prefix('shop-category')->group(function () {
        Route::get('/', [ShopCategoryController::class, 'index'])->name('admin-shop-category');
        Route::get('/add', [ShopCategoryController::class, 'add'])->name('admin-shop-category-add');
        Route::post('/create', [ShopCategoryController::class, 'create'])->name('admin-shop-category-create');
        Route::get('/edit/{id}', [ShopCategoryController::class, 'edit'])->name('admin-shop-category-edit');
        Route::put('/update/{id}', [ShopCategoryController::class, 'update'])->name('admin-shop-category-update');
        Route::delete('/delete/{id}', [ShopCategoryController::class, 'delete'])->name('admin-shop-category-delete');
    });
    Route::prefix('shops')->group(function () {
        Route::get('/', [ShopController::class, 'index'])->name('admin-shop');
        Route::get('/add', [ShopController::class, 'add'])->name('admin-shop-add');
        Route::post('/create', [ShopController::class, 'create'])->name('admin-shop-create');
        Route::get('/edit/{id}', [ShopController::class, 'edit'])->name('admin-shop-edit');
        Route::put('/update/{id}', [ShopController::class, 'update'])->name('admin-shop-update');
        Route::delete('/delete/{id}', [ShopController::class, 'delete'])->name('admin-shop-delete');
    });

    Route::prefix('restaurant-category')->group(function () {
        Route::get('/', [RestaurantCategoryController::class, 'index'])->name('admin-restaurant-category');
        Route::get('/add', [RestaurantCategoryController::class, 'add'])->name('admin-restaurant-category-add');
        Route::post('/create', [RestaurantCategoryController::class, 'create'])->name('admin-restaurant-category-create');
        Route::get('/edit/{id}', [RestaurantCategoryController::class, 'edit'])->name('admin-restaurant-category-edit');
        Route::put('/update/{id}', [RestaurantCategoryController::class, 'update'])->name('admin-restaurant-category-update');
        Route::delete('/delete/{id}', [RestaurantCategoryController::class, 'delete'])->name('admin-restaurant-category-delete');
    });
    Route::prefix('restaurants')->group(function () {
        Route::get('/', [RestaurantController::class, 'index'])->name('admin-restaurant');
        Route::get('/add', [RestaurantController::class, 'add'])->name('admin-restaurant-add');
        Route::post('/create', [RestaurantController::class, 'create'])->name('admin-restaurant-create');
        Route::get('/edit/{id}', [RestaurantController::class, 'edit'])->name('admin-restaurant-edit');
        Route::put('/update/{id}', [RestaurantController::class, 'update'])->name('admin-restaurant-update');
        Route::delete('/delete/{id}', [RestaurantController::class, 'delete'])->name('admin-restaurant-delete');
    });

    Route::prefix('service-category')->group(function () {
        Route::get('/', [ServiceCategoryController::class, 'index'])->name('admin-service-category');
        Route::get('/add', [ServiceCategoryController::class, 'add'])->name('admin-service-category-add');
        Route::post('/create', [ServiceCategoryController::class, 'create'])->name('admin-service-category-create');
        Route::get('/edit/{id}', [ServiceCategoryController::class, 'edit'])->name('admin-service-category-edit');
        Route::put('/update/{id}', [ServiceCategoryController::class, 'update'])->name('admin-service-category-update');
        Route::delete('/delete/{id}', [ServiceCategoryController::class, 'delete'])->name('admin-service-category-delete');
    });
    Route::prefix('services')->group(function () {
        Route::get('/', [ServiceController::class, 'index'])->name('admin-service');
        Route::get('/add', [ServiceController::class, 'add'])->name('admin-service-add');
        Route::post('/create', [ServiceController::class, 'create'])->name('admin-service-create');
        Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('admin-service-edit');
        Route::put('/update/{id}', [ServiceController::class, 'update'])->name('admin-service-update');
        Route::delete('/delete/{id}', [ServiceController::class, 'delete'])->name('admin-service-delete');
    });

    Route::prefix('news')->group(function () {
        Route::get('/', [NewsController::class, 'index'])->name('admin-news');
        Route::get('/add', [NewsController::class, 'add'])->name('admin-news-add');
        Route::post('/create', [NewsController::class, 'create'])->name('admin-news-create');
        Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('admin-news-edit');
        Route::put('/update/{id}', [NewsController::class, 'update'])->name('admin-news-update');
        Route::delete('/delete/{id}', [NewsController::class, 'delete'])->name('admin-news-delete');
    });

    Route::prefix('rent')->group(function () {
        Route::get('/', [RentRequestController::class, 'index'])->name('admin-rent');
        Route::get('/show/{id}', [RentRequestController::class, 'show'])->name('admin-rent-show');
        Route::put('/update/{id}', [RentRequestController::class, 'update'])->name('admin-rent-update');
        Route::delete('/delete/{id}', [RentRequestController::class, 'delete'])->name('admin-rent-delete');
    });

    Route::prefix('banners')->group(function () {
        Route::get('/', [MainBannerController::class, 'index'])->name('admin-banners');
        Route::get('/add', [MainBannerController::class, 'add'])->name('admin-banners-add');
        Route::post('/create', [MainBannerController::class, 'create'])->name('admin-banners-create');
        Route::get('/edit/{id}', [MainBannerController::class, 'edit'])->name('admin-banners-edit');
        Route::put('/update/{id}', [MainBannerController::class, 'update'])->name('admin-banners-update');
        Route::delete('/delete/{id}', [MainBannerController::class, 'delete'])->name('admin-banners-delete');
    });

    Route::prefix('contacts')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('admin-contacts');
        Route::get('/add', [ContactController::class, 'add'])->name('admin-contacts-add');
        Route::post('/create', [ContactController::class, 'create'])->name('admin-contacts-create');
        Route::get('/edit/{id}', [ContactController::class, 'edit'])->name('admin-contacts-edit');
        Route::put('/update/{id}', [ContactController::class, 'update'])->name('admin-contacts-update');
        Route::delete('/delete/{id}', [ContactController::class, 'delete'])->name('admin-contacts-delete');
    });

    Route::prefix('jobs')->group(function () {
        Route::get('/', [JobController::class, 'index'])->name('admin-jobs');
        Route::get('/add', [JobController::class, 'add'])->name('admin-jobs-add');
        Route::post('/create', [JobController::class, 'create'])->name('admin-jobs-create');
        Route::get('/edit/{id}', [JobController::class, 'edit'])->name('admin-jobs-edit');
        Route::put('/update/{id}', [JobController::class, 'update'])->name('admin-jobs-update');
        Route::delete('/delete/{id}', [JobController::class, 'delete'])->name('admin-jobs-delete');
    });

});

Auth::routes();

Route::get('/{query}', function() {
    return view('site');
})->where('query', '^((?!api|admin).)*$');
