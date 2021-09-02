<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Traits\ApiResponse;

Route::prefix('v1')->middleware('api')->group(function () {

    Route::prefix('home')->group(function () {
        Route::get('/', function () {
            return ApiResponse::success('Запрос принят))');
        });


    });

    Route::fallback(function(){
        return ApiResponse::error('Роут не определён!', 404);
    });
});
