<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Traits\ApiResponse;
use App\Http\Controllers\Api\ShopCategoryController;
use App\Http\Controllers\Api\ShopController;


Route::prefix('v1')->middleware('api')->group(function () {

    Route::prefix('home')->group(function () {
        Route::get('/', function () {
            return ApiResponse::success('Запрос принят))');
        });


    });

    Route::prefix('shop')->group(function () {
        Route::get('/categories', [ShopCategoryController::class, 'index'])->name('api-shop-category-list');
        Route::get('/category/{slug}', [ShopCategoryController::class, 'categoryItems'])->name('api-shop-category-items');
        Route::get('/{slug}', [ShopController::class, 'getItemBySlug'])->name('api-shop-item');
    });

    Route::fallback(function(){
        return ApiResponse::error('Роут не определён!', 404);
    });
});
