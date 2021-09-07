<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ShopCategoryService;
use App\Services\ShopService;
use Illuminate\Http\Request;
use App\Traits\ApiResponse;

/**
 * Class ShopCategoryController
 *
 * @package Petstore30\controllers
 *
 * @author  Anton Groshev <balumba.ru@gmail.com>
 */
class ShopCategoryController extends Controller
{
    private $shopCategoryService;
    private $shopService;

    public function __construct(
        ShopCategoryService $shopCategoryService,
        ShopService $shopService
    ) {
        $this->shopCategoryService = $shopCategoryService;
        $this->shopService = $shopService;
    }

    /**
     * @OA\Get(
     *     path="/shop/categories",
     *     tags={"shop"},
     *     summary="Получение списка категорий магазинов",
     *     operationId="index",
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(ref="#/components/schemas/CategoryListResponse")
     *     )
     * )
     */
    public function index()
    {
        $categories = $this->shopCategoryService->apiAll();

        return ApiResponse::result($categories);
    }

    /**
     * @OA\Get(
     *     path="/shop/category/{categorySlug}",
     *     tags={"shop"},
     *     summary="Получение списка магазинов в категории",
     *     operationId="categoryItems",
     *     @OA\Parameter(
     *         name="categorySlug",
     *         description="slug запрашиваемой категории",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="search",
     *         in="query",
     *         description="Поиск по названию магазина в категории",
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="Номер запрашиваемой страницы",
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(ref="#/components/schemas/CategoryItemDetailResponse")
     *     )
     * )
     */
    public function categoryItems(Request $request, $slug)
    {
        $category = $this->shopCategoryService->getCategoryIdBySlug($slug);

        if (!$category) {
            return ApiResponse::error('Категория не найдена', 404);
        }

        $result = $this->shopService->getItemsByCategoryId($request, $category->id);

        return ApiResponse::result($result);
    }
}
