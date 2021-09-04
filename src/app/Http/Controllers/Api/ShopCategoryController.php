<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ShopCategoryService;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;

class ShopCategoryController extends Controller
{
    private $shopCategoryService;

    public function __construct(
        ShopCategoryService $shopCategoryService
    ) {
        $this->shopCategoryService = $shopCategoryService;
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $categories = $this->shopCategoryService->apiAll();

        return ApiResponse::result($categories);
    }
}
