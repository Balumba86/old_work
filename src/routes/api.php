<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Traits\ApiResponse;
use App\Http\Controllers\Api\SubscribeController;
use App\Http\Controllers\Api\ShopCategoryController;
use App\Http\Controllers\Api\ShopController;
use App\Http\Controllers\Api\RestaurantCategoryController;
use App\Http\Controllers\Api\RestaurantController;


Route::prefix('v1')->middleware('api')->group(function () {

//    Route::prefix('home')->group(function () {
//        Route::get('/', function () {
//            return ApiResponse::success('Запрос принят))');
//        });
//
//
//    });

    Route::prefix('shop')->group(function () {
        Route::get('/categories', [ShopCategoryController::class, 'index'])->name('api-shop-category-list');
        Route::get('/category/{slug}', [ShopCategoryController::class, 'categoryItems'])->name('api-shop-category-items');
        Route::get('/{slug}', [ShopController::class, 'getItemBySlug'])->name('api-shop-item');
    });
    Route::prefix('restaurant')->group(function () {
        Route::get('/categories', [RestaurantCategoryController::class, 'index'])->name('api-restaurant-category-list');
        Route::get('/category/{slug}', [RestaurantCategoryController::class, 'categoryItems'])->name('api-restaurant-category-items');
        Route::get('/{slug}', [RestaurantController::class, 'getItemBySlug'])->name('api-restaurant-item');
    });

    Route::prefix('system')->group(function () {
        Route::post('email/subscribe', [SubscribeController::class, 'subscribe'])->name('email-subscribe');
    });

    Route::fallback(function(){
        return ApiResponse::error('Роут не определён!', 404);
    });
});
